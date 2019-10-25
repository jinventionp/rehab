<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContractsCustomers Controller
 *
 * @property \App\Model\Table\ContractsCustomersTable $ContractsCustomers
 *
 * @method \App\Model\Entity\ContractsCustomer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContractsCustomersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Contracts']
        ];
        $contractsCustomers = $this->paginate($this->ContractsCustomers);

        $this->set(compact('contractsCustomers'));
    }

    /**
     * View method
     *
     * @param string|null $id Contracts Customer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contractsCustomer = $this->ContractsCustomers->get($id, [
            'contain' => ['Users', 'Contracts']
        ]);

        $this->set('contractsCustomer', $contractsCustomer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contractsCustomer = $this->ContractsCustomers->newEntity();
        if ($this->request->is('post')) {
            $contractsCustomer = $this->ContractsCustomers->patchEntity($contractsCustomer, $this->request->getData());
            if ($this->ContractsCustomers->save($contractsCustomer)) {
                $this->Flash->success(__('The contracts customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contracts customer could not be saved. Please, try again.'));
        }
        $users = $this->ContractsCustomers->Users->find('list', ['limit' => 200]);
        $contracts = $this->ContractsCustomers->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('contractsCustomer', 'users', 'contracts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contracts Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contractsCustomer = $this->ContractsCustomers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contractsCustomer = $this->ContractsCustomers->patchEntity($contractsCustomer, $this->request->getData());
            if ($this->ContractsCustomers->save($contractsCustomer)) {
                $this->Flash->success(__('The contracts customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contracts customer could not be saved. Please, try again.'));
        }
        $users = $this->ContractsCustomers->Users->find('list', ['limit' => 200]);
        $contracts = $this->ContractsCustomers->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('contractsCustomer', 'users', 'contracts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contracts Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contractsCustomer = $this->ContractsCustomers->get($id);
        if ($this->ContractsCustomers->delete($contractsCustomer)) {
            $this->Flash->success(__('The contracts customer has been deleted.'));
        } else {
            $this->Flash->error(__('The contracts customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
