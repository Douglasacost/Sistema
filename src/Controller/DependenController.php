<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dependen Controller
 *
 * @property \App\Model\Table\DependenTable $Dependen
 */
class DependenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $dependen = $this->paginate($this->Dependen);

        $this->set(compact('dependen'));
        $this->set('_serialize', ['dependen']);
    }

    /**
     * View method
     *
     * @param string|null $id Dependen id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dependen = $this->Dependen->get($id, [
            'contain' => []
        ]);

        $this->set('dependen', $dependen);
        $this->set('_serialize', ['dependen']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dependen = $this->Dependen->newEntity();
        if ($this->request->is('post')) {
            $dependen = $this->Dependen->patchEntity($dependen, $this->request->data);
            if ($this->Dependen->save($dependen)) {
                $this->Flash->success(__('The dependen has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dependen could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dependen'));
        $this->set('_serialize', ['dependen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dependen id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dependen = $this->Dependen->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dependen = $this->Dependen->patchEntity($dependen, $this->request->data);
            if ($this->Dependen->save($dependen)) {
                $this->Flash->success(__('The dependen has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dependen could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dependen'));
        $this->set('_serialize', ['dependen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dependen id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dependen = $this->Dependen->get($id);
        if ($this->Dependen->delete($dependen)) {
            $this->Flash->success(__('The dependen has been deleted.'));
        } else {
            $this->Flash->error(__('The dependen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
