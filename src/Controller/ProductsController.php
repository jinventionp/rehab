<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories', 'Payments']
        ]);

        $this->set('product', $product);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($product->getErrors())){
                if ($this->Products->save($product)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The product has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Products', 'action' => 'products']);
                    $response["modal"] = "#modalAdd";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The product could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $product->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($product->getErrors())){
                if ($this->Products->save($product)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The product has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Products', 'action' => 'products']);
                    $response["modal"] = "#modalEdit";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The product could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $product->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $response["success"] = 0;
        $response["redirectUrl"] = "";
        $response["modal"] = "";
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $response["success"] = 1;
            $response["message"] ="Eliminado con Éxito<br>" .  __('The product has been deleted.');
            $response["redirectUrl"] = Router::url(['controller' => 'Products', 'action' => 'products']);
            $response["modal"] = "#modalDelete";
        } else {
            $response["message"] = ['error' => ['custom' => __('The product could not be deleted. Please, try again.')]];
        }
        echo json_encode($response);
        $this->autoRender = false;

        return $this->redirect(['action' => 'index']);
    }

    public function products($txtSearch = null, $cboNumRegister = 10)
    {        
        $conditions = [];
        if (!empty($txtSearch)) {
            $conditions = ['OR' => [
                    ['Products.name LIKE' => '%' . $txtSearch . '%'],
                    ['Products.price LIKE' => '%' . $txtSearch . '%'],
                    ['Products.description LIKE' => '%' . $txtSearch . '%'], 
                ],
                //'AND' => ['Products.active LIKE' => 1],
            ];
        }else{
            //$conditions = ['Products.active' => 1];
        }
        $this->paginate = [
            'conditions' => $conditions,
            'contain' => ['Categories'],
            'limit' => $cboNumRegister,
            'maxLimit' => 100,
            'order' => ['Products.id' => 'DESC']
        ];

        $products = $this->paginate($this->Products);
        
        $this->set(compact('products'));
    }
}
