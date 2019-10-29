<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Cards Controller
 *
 * @property \App\Model\Table\CardsTable $Cards
 *
 * @method \App\Model\Entity\Card[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $cards = $this->paginate($this->Cards);

        $this->set(compact('cards'));
    }

    /**
     * View method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $card = $this->Cards->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('card', $card);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $card = $this->Cards->newEntity();
        if ($this->request->is('post')) {
            $card = $this->Cards->patchEntity($card, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($card->getErrors())){
                if ($this->Cards->save($card)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The card has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Cards', 'action' => 'cards']);
                    $response["modal"] = "#modalAdd";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The card could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $card->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $users = $this->Cards->Users->find('list', ['limit' => 200]);
        $this->set(compact('card', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $card = $this->Cards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $card = $this->Cards->patchEntity($card, $this->request->getData());
            $response["success"] = 0;
            $response["redirectUrl"] = "";
            $response["modal"] = "";
            if(empty($card->getErrors())){
                if ($this->Cards->save($card)) {
                    $response["success"] = 1;
                    $response["message"] = "Guardado con Éxito<br>" . __('The card has been saved.');
                    $response["redirectUrl"] = Router::url(['controller' => 'Cards', 'action' => 'cards']);
                    $response["modal"] = "#modalEdit";
                }else{
                    $response["message"] = ['error' => ['custom' => __('The card could not be saved. Please, try again.')]];
                }
            }else{
                $response["message"] = $card->getErrors();
            }
            echo json_encode($response);
            $this->autoRender = false;
        }
        $users = $this->Cards->Users->find('list', ['limit' => 200]);
        $this->set(compact('card', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Card id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $response["success"] = 0;
        $response["redirectUrl"] = "";
        $response["modal"] = "";
        $card = $this->Cards->get($id);
        if ($this->Cards->delete($card)) {
            $response["success"] = 1;
            $response["message"] ="Eliminado con Éxito<br>" .  __('The card has been deleted.');
            $response["redirectUrl"] = Router::url(['controller' => 'Cards', 'action' => 'cards']);
            $response["modal"] = "#modalDelete";
        } else {
            $response["message"] = ['error' => ['custom' => __('The card could not be deleted. Please, try again.')]];
        }
        echo json_encode($response);
        $this->autoRender = false;
    }

    public function cards($txtSearch = null, $cboNumRegister = 10)
    {        
        $conditions = [];
        if (!empty($txtSearch)) {
            $conditions = ['OR' => [
                    ['Cards.name LIKE' => '%' . $txtSearch . '%'],
                    ['Cards.number_card LIKE' => '%' . $txtSearch . '%'],
                    ['Cards.expedition_date LIKE' => '%' . $txtSearch . '%'],
                    ['Cards.security_code LIKE' => '%' . $txtSearch . '%'], 
                    ['Cards.token LIKE' => '%' . $txtSearch . '%'],          
                ],
                //'AND' => ['Cards.active LIKE' => 1],
            ];
        }else{
            //$conditions = ['Cards.active' => 1];
        }
        $this->paginate = [
            'conditions' => $conditions,
            'contain' => ['Users'],
            'limit' => $cboNumRegister,
            'maxLimit' => 100,
            'order' => ['Cards.id' => 'DESC']
        ];

        $cards = $this->paginate($this->Cards);
        
        $this->set(compact('cards'));
    }
}
