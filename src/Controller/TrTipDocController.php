<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrTipDoc Controller
 *
 * @property \App\Model\Table\TrTipDocTable $TrTipDoc
 */
class TrTipDocController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trTipDoc = $this->paginate($this->TrTipDoc);

        $this->set(compact('trTipDoc'));
        $this->set('_serialize', ['trTipDoc']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Tip Doc id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trTipDoc = $this->TrTipDoc->get($id, [
            'contain' => []
        ]);

        $this->set('trTipDoc', $trTipDoc);
        $this->set('_serialize', ['trTipDoc']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trTipDoc = $this->TrTipDoc->newEntity();
        if ($this->request->is('post')) {
            $trTipDoc = $this->TrTipDoc->patchEntity($trTipDoc, $this->request->data);
            if ($this->TrTipDoc->save($trTipDoc)) {
                $this->Flash->success(__('The tr tip doc has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr tip doc could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trTipDoc'));
        $this->set('_serialize', ['trTipDoc']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Tip Doc id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trTipDoc = $this->TrTipDoc->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trTipDoc = $this->TrTipDoc->patchEntity($trTipDoc, $this->request->data);
            if ($this->TrTipDoc->save($trTipDoc)) {
                $this->Flash->success(__('The tr tip doc has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr tip doc could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trTipDoc'));
        $this->set('_serialize', ['trTipDoc']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Tip Doc id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trTipDoc = $this->TrTipDoc->get($id);
        if ($this->TrTipDoc->delete($trTipDoc)) {
            $this->Flash->success(__('The tr tip doc has been deleted.'));
        } else {
            $this->Flash->error(__('The tr tip doc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
