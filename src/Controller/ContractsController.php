<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Contracts Controller
 *
 * @property \App\Model\Table\ContractsTable $Contracts
 *
 * @method \App\Model\Entity\Contract[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContractsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Typecontracts']
        ];
        $contracts = $this->paginate($this->Contracts);

        $this->set(compact('contracts'));
    }

    /**
     * View method
     *
     * @param string|null $id Contract id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contract = $this->Contracts->get($id, [
            'contain' => ['Typecontracts', 'ContractsCustomers', 'CouponsPackages', 'Payments']
        ]);

        $this->set('contract', $contract);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contract = $this->Contracts->newEntity();
        if ($this->request->is('post')) {
            $contract = $this->Contracts->patchEntity($contract, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($contract->getErrors())){
                if ($this->Contracts->save($contract)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The contract has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Contracts', 'action' => 'contracts']);
                    $response["modal"] = "#modalAdd";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The contract could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $contract->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $typecontracts = $this->Contracts->Typecontracts->find('list', ['limit' => 200]);
        $this->set(compact('contract', 'typecontracts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contract id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contract = $this->Contracts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contract = $this->Contracts->patchEntity($contract, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($contract->getErrors())){
                if ($this->Contracts->save($contract)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The contract has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Contracts', 'action' => 'contracts']);
                    $response["modal"] = "#modalEdit";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The contract could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $contract->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $typecontracts = $this->Contracts->Typecontracts->find('list', ['limit' => 200]);
        $this->set(compact('contract', 'typecontracts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contract id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $response["success"] = 0;
        $response["redirectUrl"] = "";
        $response["modal"] = "";
        $contract = $this->Contracts->get($id);
        $contract->active = 0;
        if ($this->Contracts->save($contract)) {
           $response["success"] = 1;
            $response["message"] ="Eliminado con Éxito<br>" .  __('The contract has been deleted.');
            $response["redirectUrl"] = Router::url(['controller' => 'Contracts', 'action' => 'contract']);
            $response["modal"] = "#modalDelete";
        } else {
            $response["message"] = ['error' => ['custom' => __('The contract could not be deleted. Please, try again.')]];
        }
        echo json_encode($response);
        $this->autoRender = false;
    }


    public function contracts($txtSearch = null, $cboNumRegister = 10)
    {        
        $conditions = [];
        if (!empty($txtSearch)) {
            $conditions = ['OR' => [
                    ['Contracts.name LIKE' => '%' . $txtSearch . '%'],
                    ['Contracts.surname LIKE' => '%' . $txtSearch . '%'],
                    ['Contracts.email LIKE' => '%' . $txtSearch . '%'],
                    ['Contracts.movil LIKE' => '%' . $txtSearch . '%'],                
                ],
                //'AND' => ['Contracts.active LIKE' => 1],
            ];
        }else{
            //$conditions = ['Contracts.active' => 1];
        }
        $this->paginate = [
            'conditions' => $conditions,
            'contain' => ['Typecontracts'],
            'limit' => $cboNumRegister,
            'maxLimit' => 100,
            'order' => ['Contracts.id' => 'DESC']
        ];

        $contracts = $this->paginate($this->Contracts);
        
        $this->set(compact('contracts'));
    }
}
