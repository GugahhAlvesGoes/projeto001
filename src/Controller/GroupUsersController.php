<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GroupUsers Controller
 *
 * @property \App\Model\Table\GroupUsersTable $GroupUsers
 *
 * @method \App\Model\Entity\GroupUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $groupUsers = $this->paginate($this->GroupUsers);

        $this->set(compact('groupUsers'));

        
    }

    /**
     * View method
     *
     * @param string|null $id Group User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupUser = $this->GroupUsers->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('groupUser', $groupUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupUser = $this->GroupUsers->newEntity();
        if ($this->request->is('post')) {
            $groupUser = $this->GroupUsers->patchEntity($groupUser, $this->request->getData());
            if ($this->GroupUsers->save($groupUser)) {
                $this->Flash->success(__('Grupo Cadastrado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('O Grupo não foi cadastrado! Por favor, tente de novo.'));
        }
        $this->set(compact('groupUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Group User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupUser = $this->GroupUsers->get($id);

        if ($this->request->is(['post', 'put'])) {
            $groupUser = $this->GroupUsers->patchEntity($groupUser, $this->request->getData());
            if ($this->GroupUsers->save($groupUser)) {
                $this->Flash->success('Grupo Cadastrado com sucesso!');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger('O Grupo não foi cadastrado! Por favor, tente de novo.');
        }
        $this->set(compact('groupUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Group User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupUser = $this->GroupUsers->get($id);
        if ($this->GroupUsers->delete($groupUser)) {
            $this->Flash->success(__('Grupo apagado com sucesso!'));
        } else {
            $this->Flash->danger(__('Grupo não foi apagado. Por favor, tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
