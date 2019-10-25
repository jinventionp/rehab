<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CouponsPackages Controller
 *
 * @property \App\Model\Table\CouponsPackagesTable $CouponsPackages
 *
 * @method \App\Model\Entity\CouponsPackage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CouponsPackagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Coupons', 'Contracts']
        ];
        $couponsPackages = $this->paginate($this->CouponsPackages);

        $this->set(compact('couponsPackages'));
    }

    /**
     * View method
     *
     * @param string|null $id Coupons Package id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $couponsPackage = $this->CouponsPackages->get($id, [
            'contain' => ['Coupons', 'Contracts']
        ]);

        $this->set('couponsPackage', $couponsPackage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $couponsPackage = $this->CouponsPackages->newEntity();
        if ($this->request->is('post')) {
            $couponsPackage = $this->CouponsPackages->patchEntity($couponsPackage, $this->request->getData());
            if ($this->CouponsPackages->save($couponsPackage)) {
                $this->Flash->success(__('The coupons package has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coupons package could not be saved. Please, try again.'));
        }
        $coupons = $this->CouponsPackages->Coupons->find('list', ['limit' => 200]);
        $contracts = $this->CouponsPackages->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('couponsPackage', 'coupons', 'contracts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coupons Package id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $couponsPackage = $this->CouponsPackages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $couponsPackage = $this->CouponsPackages->patchEntity($couponsPackage, $this->request->getData());
            if ($this->CouponsPackages->save($couponsPackage)) {
                $this->Flash->success(__('The coupons package has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coupons package could not be saved. Please, try again.'));
        }
        $coupons = $this->CouponsPackages->Coupons->find('list', ['limit' => 200]);
        $contracts = $this->CouponsPackages->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('couponsPackage', 'coupons', 'contracts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coupons Package id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $couponsPackage = $this->CouponsPackages->get($id);
        if ($this->CouponsPackages->delete($couponsPackage)) {
            $this->Flash->success(__('The coupons package has been deleted.'));
        } else {
            $this->Flash->error(__('The coupons package could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
