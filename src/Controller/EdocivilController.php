<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Edocivil Controller
 *
 * @property \App\Model\Table\EdocivilTable $Edocivil
 */
class EdocivilController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $edocivil = $this->paginate($this->Edocivil);

        $this->set(compact('edocivil'));
        $this->set('_serialize', ['edocivil']);
    }

    /**
     * View method
     *
     * @param string|null $id Edocivil id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $edocivil = $this->Edocivil->get($id, [
            'contain' => []
        ]);

        $this->set('edocivil', $edocivil);
        $this->set('_serialize', ['edocivil']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $edocivil = $this->Edocivil->newEntity();
        if ($this->request->is('post')) {
            $edocivil = $this->Edocivil->patchEntity($edocivil, $this->request->data);
            if ($this->Edocivil->save($edocivil)) {
                $this->Flash->success(__('The edocivil has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The edocivil could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('edocivil'));
        $this->set('_serialize', ['edocivil']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Edocivil id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $edocivil = $this->Edocivil->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $edocivil = $this->Edocivil->patchEntity($edocivil, $this->request->data);
            if ($this->Edocivil->save($edocivil)) {
                $this->Flash->success(__('The edocivil has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The edocivil could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('edocivil'));
        $this->set('_serialize', ['edocivil']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Edocivil id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $edocivil = $this->Edocivil->get($id);
        if ($this->Edocivil->delete($edocivil)) {
            $this->Flash->success(__('The edocivil has been deleted.'));
        } else {
            $this->Flash->error(__('The edocivil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
