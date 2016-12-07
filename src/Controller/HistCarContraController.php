<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HistCarContra Controller
 *
 * @property \App\Model\Table\HistCarContraTable $HistCarContra
 */
class HistCarContraController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $histCarContra = $this->paginate($this->HistCarContra);

        $this->set(compact('histCarContra'));
        $this->set('_serialize', ['histCarContra']);
    }

    /**
     * View method
     *
     * @param string|null $id Hist Car Contra id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $histCarContra = $this->HistCarContra->get($id, [
            'contain' => []
        ]);

        $this->set('histCarContra', $histCarContra);
        $this->set('_serialize', ['histCarContra']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $histCarContra = $this->HistCarContra->newEntity();
        if ($this->request->is('post')) {
            $histCarContra = $this->HistCarContra->patchEntity($histCarContra, $this->request->data);
            if ($this->HistCarContra->save($histCarContra)) {
                $this->Flash->success(__('The hist car contra has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hist car contra could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('histCarContra'));
        $this->set('_serialize', ['histCarContra']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hist Car Contra id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $histCarContra = $this->HistCarContra->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $histCarContra = $this->HistCarContra->patchEntity($histCarContra, $this->request->data);
            if ($this->HistCarContra->save($histCarContra)) {
                $this->Flash->success(__('The hist car contra has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hist car contra could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('histCarContra'));
        $this->set('_serialize', ['histCarContra']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hist Car Contra id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $histCarContra = $this->HistCarContra->get($id);
        if ($this->HistCarContra->delete($histCarContra)) {
            $this->Flash->success(__('The hist car contra has been deleted.'));
        } else {
            $this->Flash->error(__('The hist car contra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
