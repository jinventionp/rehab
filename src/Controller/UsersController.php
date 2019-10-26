<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Profiles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Profiles', 'Cards', 'ContractsCustomers', 'CouponsCustomers', 'Payments']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($user->getErrors())){
                if ($this->Users->save($user)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The user has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Users', 'action' => 'users']);
                    $response["modal"] = "#modalAdd";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The user could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $user->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $profiles = $this->Users->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'profiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($user->getErrors())){
                if ($this->Users->save($user)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The user has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Users', 'action' => 'users']);
                    $response["modal"] = "#modalEdit";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The user could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $user->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $profiles = $this->Users->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'profiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $response["success"] = 0;
        $response["redirectUrl"] = "";
        $response["modal"] = "";

        $user = $this->Users->get($id); 
        $user->active = 0;       
        if ($this->Users->delete($user)) {
            $response["success"] = 1;
            $response["message"] ="Eliminado con Éxito<br>" .  __('The user has been deleted.');
            $response["redirectUrl"] = Router::url(['controller' => 'Users', 'action' => 'users']);
            $response["modal"] = "#modalDelete";
        } else {
            $response["message"] = ['error' => ['custom' => __('The user could not be deleted. Please, try again.')]];
        }
        echo json_encode($response);
        $this->autoRender = false;
    }


    public function login()
    {
        $this->viewBuilder()->setLayout('login');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();//pr($user);
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Username or password is incorrect'));
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

     public function register()
    {
        $this->viewBuilder()->setLayout('login');
    }

    public function dashboard()
    {

    }

    public function users()
    {        
        $this->paginate = [
            'contain' => ['Profiles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }
}
