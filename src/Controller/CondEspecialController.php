<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CondEspecial Controller
 *
 * @property \App\Model\Table\CondEspecialTable $CondEspecial
 */
class CondEspecialController extends AppController
{
  class DatPerDocAdmController extends AppController
  {
    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->action, ['index', 'view','add','edit']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $condEspecial = $this->paginate($this->CondEspecial);

        $this->set(compact('condEspecial'));
        $this->set('_serialize', ['condEspecial']);
    }

    /**
     * View method
     *
     * @param string|null $id Cond Especial id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $condEspecial = $this->CondEspecial->get($id, [
            'contain' => []
        ]);

        $this->set('condEspecial', $condEspecial);
        $this->set('_serialize', ['condEspecial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $condEspecial = $this->CondEspecial->newEntity();
        if ($this->request->is('post')) {
            $condEspecial = $this->CondEspecial->patchEntity($condEspecial, $this->request->data);
            if ($this->CondEspecial->save($condEspecial)) {
                $this->Flash->success(__('The cond especial has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cond especial could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('condEspecial'));
        $this->set('_serialize', ['condEspecial']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cond Especial id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $condEspecial = $this->CondEspecial->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $condEspecial = $this->CondEspecial->patchEntity($condEspecial, $this->request->data);
            if ($this->CondEspecial->save($condEspecial)) {
                $this->Flash->success(__('The cond especial has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cond especial could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('condEspecial'));
        $this->set('_serialize', ['condEspecial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cond Especial id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $condEspecial = $this->CondEspecial->get($id);
        if ($this->CondEspecial->delete($condEspecial)) {
            $this->Flash->success(__('The cond especial has been deleted.'));
        } else {
            $this->Flash->error(__('The cond especial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
