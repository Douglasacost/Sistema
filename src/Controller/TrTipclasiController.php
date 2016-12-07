<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrTipclasi Controller
 *
 * @property \App\Model\Table\TrTipclasiTable $TrTipclasi
 */
class TrTipclasiController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trTipclasi = $this->paginate($this->TrTipclasi);

        $this->set(compact('trTipclasi'));
        $this->set('_serialize', ['trTipclasi']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Tipclasi id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trTipclasi = $this->TrTipclasi->get($id, [
            'contain' => []
        ]);

        $this->set('trTipclasi', $trTipclasi);
        $this->set('_serialize', ['trTipclasi']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trTipclasi = $this->TrTipclasi->newEntity();
        if ($this->request->is('post')) {
            $trTipclasi = $this->TrTipclasi->patchEntity($trTipclasi, $this->request->data);
            if ($this->TrTipclasi->save($trTipclasi)) {
                $this->Flash->success(__('The tr tipclasi has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr tipclasi could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trTipclasi'));
        $this->set('_serialize', ['trTipclasi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Tipclasi id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trTipclasi = $this->TrTipclasi->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trTipclasi = $this->TrTipclasi->patchEntity($trTipclasi, $this->request->data);
            if ($this->TrTipclasi->save($trTipclasi)) {
                $this->Flash->success(__('The tr tipclasi has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr tipclasi could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trTipclasi'));
        $this->set('_serialize', ['trTipclasi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Tipclasi id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trTipclasi = $this->TrTipclasi->get($id);
        if ($this->TrTipclasi->delete($trTipclasi)) {
            $this->Flash->success(__('The tr tipclasi has been deleted.'));
        } else {
            $this->Flash->error(__('The tr tipclasi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
