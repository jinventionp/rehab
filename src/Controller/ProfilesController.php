<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
/**
 * Profiles Controller
 *
 * @property \App\Model\Table\ProfilesTable $Profiles
 *
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $profiles = $this->paginate($this->Profiles);

        $this->set(compact('profiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profile = $this->Profiles->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('profile', $profile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profile = $this->Profiles->newEntity();
        if ($this->request->is('post')) {
            $profile = $this->Profiles->patchEntity($profile, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($profile->getErrors())){
                if ($this->Profiles->save($profile)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The profile has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Profiles', 'action' => 'profiles']);
                    $response["modal"] = "#modalAdd";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The profile could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $profile->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $this->set(compact('profile'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profile = $this->Profiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profile = $this->Profiles->patchEntity($profile, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($profile->getErrors())){
                if ($this->Profiles->save($profile)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The profile has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Profiles', 'action' => 'profiles']);
                    $response["modal"] = "#modalEdit";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The profile could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $profile->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $this->set(compact('profile'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $response["success"] = 0;
        $response["redirectUrl"] = "";
        $response["modal"] = "";
        $profile = $this->Profiles->get($id);
        if ($this->Profiles->delete($profile)) {
           $response["success"] = 1;
            $response["message"] ="Eliminado con Éxito<br>" .  __('The profile has been deleted.');
            $response["redirectUrl"] = Router::url(['controller' => 'Profiles', 'action' => 'profiles']);
            $response["modal"] = "#modalDelete";
        } else {
            $response["message"] = ['error' => ['custom' => __('The profile could not be deleted. Please, try again.')]];
        }
        echo json_encode($response);
        $this->autoRender = false;
    }

    public function profiles($txtSearch = null, $cboNumRegister = 10)
    {        
        $conditions = [];
        if (!empty($txtSearch)) {
            $conditions = ['OR' => [
                    ['Profiles.name LIKE' => '%' . $txtSearch . '%'],
                ],
                //'AND' => ['Profiles.active LIKE' => 1],
            ];
        }else{
            //$conditions = ['Profiles.active' => 1];
        }
        $this->paginate = [
            'conditions' => $conditions,
            'contain' => [],
            'limit' => $cboNumRegister,
            'maxLimit' => 100,
            'order' => ['Profiles.id' => 'DESC']
        ];

        $profiles = $this->paginate($this->Profiles);
        
        $this->set(compact('profiles'));
    }
}
