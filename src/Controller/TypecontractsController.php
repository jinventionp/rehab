<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Typecontracts Controller
 *
 * @property \App\Model\Table\TypecontractsTable $Typecontracts
 *
 * @method \App\Model\Entity\Typecontract[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypecontractsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typecontracts = $this->paginate($this->Typecontracts);

        $this->set(compact('typecontracts'));
    }

    /**
     * View method
     *
     * @param string|null $id Typecontract id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typecontract = $this->Typecontracts->get($id, [
            'contain' => []
        ]);

        $this->set('typecontract', $typecontract);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typecontract = $this->Typecontracts->newEntity();
        if ($this->request->is('post')) {
            $typecontract = $this->Typecontracts->patchEntity($typecontract, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($typecontract->getErrors())){
                if ($this->Typecontracts->save($typecontract)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The typecontract has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Typecontracts', 'action' => 'typecontracts']);
                    $response["modal"] = "#modalAdd";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The typecontract could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $typecontract->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $this->set(compact('typecontract'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typecontract id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typecontract = $this->Typecontracts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typecontract = $this->Typecontracts->patchEntity($typecontract, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($typecontract->getErrors())){
                if ($this->Typecontracts->save($typecontract)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The typecontract has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Typecontracts', 'action' => 'typecontracts']);
                    $response["modal"] = "#modalEdit";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The typecontract could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $typecontract->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $this->set(compact('typecontract'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typecontract id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $response["success"] = 0;
        $response["redirectUrl"] = "";
        $response["modal"] = "";
        $typecontract = $this->Typecontracts->get($id);
        if ($this->Typecontracts->delete($typecontract)) {
            $response["success"] = 1;
            $response["message"] ="Eliminado con Éxito<br>" .  __('The typecontract has been deleted.');
            $response["redirectUrl"] = Router::url(['controller' => 'Typecontracts', 'action' => 'typecontracts']);
            $response["modal"] = "#modalDelete";
        } else {
            $response["message"] = ['error' => ['custom' => __('The typecontract could not be deleted. Please, try again.')]];
        }
        echo json_encode($response);
        $this->autoRender = false;
    }

    public function typecontracts($txtSearch = null, $cboNumRegister = 10)
    {        
        $conditions = [];
        if (!empty($txtSearch)) {
            $conditions = ['OR' => [
                    ['Typecontracts.name LIKE' => '%' . $txtSearch . '%'],
                    ['Typecontracts.description LIKE' => '%' . $txtSearch . '%'], 
                ],
                //'AND' => ['Typecontracts.active LIKE' => 1],
            ];
        }else{
            //$conditions = ['Typecontracts.active' => 1];
        }
        $this->paginate = [
            'conditions' => $conditions,
            'contain' => [],
            'limit' => $cboNumRegister,
            'maxLimit' => 100,
            'order' => ['Typecontracts.id' => 'DESC']
        ];

        $typecontracts = $this->paginate($this->Typecontracts);
        
        $this->set(compact('typecontracts'));
    }
}
