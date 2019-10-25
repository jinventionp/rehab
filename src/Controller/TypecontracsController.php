<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typecontracs Controller
 *
 * @property \App\Model\Table\TypecontracsTable $Typecontracs
 *
 * @method \App\Model\Entity\Typecontrac[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypecontracsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typecontracs = $this->paginate($this->Typecontracs);

        $this->set(compact('typecontracs'));
    }

    /**
     * View method
     *
     * @param string|null $id Typecontrac id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typecontrac = $this->Typecontracs->get($id, [
            'contain' => ['Contracts']
        ]);

        $this->set('typecontrac', $typecontrac);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typecontrac = $this->Typecontracs->newEntity();
        if ($this->request->is('post')) {
            $typecontrac = $this->Typecontracs->patchEntity($typecontrac, $this->request->getData());
            if ($this->Typecontracs->save($typecontrac)) {
                $this->Flash->success(__('The typecontrac has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typecontrac could not be saved. Please, try again.'));
        }
        $this->set(compact('typecontrac'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typecontrac id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typecontrac = $this->Typecontracs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typecontrac = $this->Typecontracs->patchEntity($typecontrac, $this->request->getData());
            if ($this->Typecontracs->save($typecontrac)) {
                $this->Flash->success(__('The typecontrac has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typecontrac could not be saved. Please, try again.'));
        }
        $this->set(compact('typecontrac'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typecontrac id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typecontrac = $this->Typecontracs->get($id);
        if ($this->Typecontracs->delete($typecontrac)) {
            $this->Flash->success(__('The typecontrac has been deleted.'));
        } else {
            $this->Flash->error(__('The typecontrac could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
