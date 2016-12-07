<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrMotivo Controller
 *
 * @property \App\Model\Table\TrMotivoTable $TrMotivo
 */
class TrMotivoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trMotivo = $this->paginate($this->TrMotivo);

        $this->set(compact('trMotivo'));
        $this->set('_serialize', ['trMotivo']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Motivo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trMotivo = $this->TrMotivo->get($id, [
            'contain' => []
        ]);

        $this->set('trMotivo', $trMotivo);
        $this->set('_serialize', ['trMotivo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trMotivo = $this->TrMotivo->newEntity();
        if ($this->request->is('post')) {
            $trMotivo = $this->TrMotivo->patchEntity($trMotivo, $this->request->data);
            if ($this->TrMotivo->save($trMotivo)) {
                $this->Flash->success(__('The tr motivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr motivo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trMotivo'));
        $this->set('_serialize', ['trMotivo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Motivo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trMotivo = $this->TrMotivo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trMotivo = $this->TrMotivo->patchEntity($trMotivo, $this->request->data);
            if ($this->TrMotivo->save($trMotivo)) {
                $this->Flash->success(__('The tr motivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr motivo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trMotivo'));
        $this->set('_serialize', ['trMotivo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Motivo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trMotivo = $this->TrMotivo->get($id);
        if ($this->TrMotivo->delete($trMotivo)) {
            $this->Flash->success(__('The tr motivo has been deleted.'));
        } else {
            $this->Flash->error(__('The tr motivo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
