<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrEntes Controller
 *
 * @property \App\Model\Table\TrEntesTable $TrEntes
 */
class TrEntesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trEntes = $this->paginate($this->TrEntes);

        $this->set(compact('trEntes'));
        $this->set('_serialize', ['trEntes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Ente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trEnte = $this->TrEntes->get($id, [
            'contain' => []
        ]);

        $this->set('trEnte', $trEnte);
        $this->set('_serialize', ['trEnte']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trEnte = $this->TrEntes->newEntity();
        if ($this->request->is('post')) {
            $trEnte = $this->TrEntes->patchEntity($trEnte, $this->request->data);
            if ($this->TrEntes->save($trEnte)) {
                $this->Flash->success(__('The tr ente has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr ente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trEnte'));
        $this->set('_serialize', ['trEnte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Ente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trEnte = $this->TrEntes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trEnte = $this->TrEntes->patchEntity($trEnte, $this->request->data);
            if ($this->TrEntes->save($trEnte)) {
                $this->Flash->success(__('The tr ente has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr ente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trEnte'));
        $this->set('_serialize', ['trEnte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Ente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trEnte = $this->TrEntes->get($id);
        if ($this->TrEntes->delete($trEnte)) {
            $this->Flash->success(__('The tr ente has been deleted.'));
        } else {
            $this->Flash->error(__('The tr ente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
