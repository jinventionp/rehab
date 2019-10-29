<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 *
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $categories = $this->paginate($this->Categories);

        $this->set(compact('categories'));
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('category', $category);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($category->getErrors())){
                if ($this->Categories->save($category)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The category has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Categories', 'action' => 'Categories']);
                    $response["modal"] = "#modalAdd";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The category could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $category->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $products = $this->Categories->Products->find('list', ['limit' => 200]);
        $this->set(compact('category', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Products']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($category->getErrors())){
                if ($this->Categories->save($category)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The category has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Categories', 'action' => 'Categories']);
                    $response["modal"] = "#modalEdit";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The category could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $category->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $products = $this->Categories->Products->find('list', ['limit' => 200]);
        $this->set(compact('category', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $response["success"] = 0;
        $response["redirectUrl"] = "";
        $response["modal"] = "";
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $response["success"] = 1;
            $response["message"] ="Eliminado con Éxito<br>" .  __('The category has been deleted.');
            $response["redirectUrl"] = Router::url(['controller' => 'Categories', 'action' => 'categories']);
            $response["modal"] = "#modalDelete";
        } else {
            $response["message"] = ['error' => ['custom' => __('The category could not be deleted. Please, try again.')]];
        }
        echo json_encode($response);
        $this->autoRender = false;
    }

    public function categories($txtSearch = null, $cboNumRegister = 10)
    {        
        $conditions = [];
        if (!empty($txtSearch)) {
            $conditions = ['OR' => [
                    ['Categories.name LIKE' => '%' . $txtSearch . '%'],
                    ['Categories.description LIKE' => '%' . $txtSearch . '%'], 
                ],
                //'AND' => ['categories.active LIKE' => 1],
            ];
        }else{
            //$conditions = ['categories.active' => 1];
        }
        $this->paginate = [
            'conditions' => $conditions,
            'contain' => ['Products'],
            'limit' => $cboNumRegister,
            'maxLimit' => 100,
            'order' => ['Categories.id' => 'DESC']
        ];

        $categories = $this->paginate($this->Categories);
        
        $this->set(compact('categories'));
    }
}
