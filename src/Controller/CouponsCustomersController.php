<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CouponsCustomers Controller
 *
 * @property \App\Model\Table\CouponsCustomersTable $CouponsCustomers
 *
 * @method \App\Model\Entity\CouponsCustomer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CouponsCustomersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Coupons', 'Users']
        ];
        $couponsCustomers = $this->paginate($this->CouponsCustomers);

        $this->set(compact('couponsCustomers'));
    }

    /**
     * View method
     *
     * @param string|null $id Coupons Customer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $couponsCustomer = $this->CouponsCustomers->get($id, [
            'contain' => ['Coupons', 'Users']
        ]);

        $this->set('couponsCustomer', $couponsCustomer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $couponsCustomer = $this->CouponsCustomers->newEntity();
        if ($this->request->is('post')) {
            $couponsCustomer = $this->CouponsCustomers->patchEntity($couponsCustomer, $this->request->getData());
            if ($this->CouponsCustomers->save($couponsCustomer)) {
                $this->Flash->success(__('The coupons customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coupons customer could not be saved. Please, try again.'));
        }
        $coupons = $this->CouponsCustomers->Coupons->find('list', ['limit' => 200]);
        $users = $this->CouponsCustomers->Users->find('list', ['limit' => 200]);
        $this->set(compact('couponsCustomer', 'coupons', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coupons Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $couponsCustomer = $this->CouponsCustomers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $couponsCustomer = $this->CouponsCustomers->patchEntity($couponsCustomer, $this->request->getData());
            if ($this->CouponsCustomers->save($couponsCustomer)) {
                $this->Flash->success(__('The coupons customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coupons customer could not be saved. Please, try again.'));
        }
        $coupons = $this->CouponsCustomers->Coupons->find('list', ['limit' => 200]);
        $users = $this->CouponsCustomers->Users->find('list', ['limit' => 200]);
        $this->set(compact('couponsCustomer', 'coupons', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coupons Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $couponsCustomer = $this->CouponsCustomers->get($id);
        if ($this->CouponsCustomers->delete($couponsCustomer)) {
            $this->Flash->success(__('The coupons customer has been deleted.'));
        } else {
            $this->Flash->error(__('The coupons customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
