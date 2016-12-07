<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrJerarquia Controller
 *
 * @property \App\Model\Table\TrJerarquiaTable $TrJerarquia
 */
class TrJerarquiaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trJerarquia = $this->paginate($this->TrJerarquia);

        $this->set(compact('trJerarquia'));
        $this->set('_serialize', ['trJerarquia']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Jerarquium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trJerarquium = $this->TrJerarquia->get($id, [
            'contain' => []
        ]);

        $this->set('trJerarquium', $trJerarquium);
        $this->set('_serialize', ['trJerarquium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trJerarquium = $this->TrJerarquia->newEntity();
        if ($this->request->is('post')) {
            $trJerarquium = $this->TrJerarquia->patchEntity($trJerarquium, $this->request->data);
            if ($this->TrJerarquia->save($trJerarquium)) {
                $this->Flash->success(__('The tr jerarquium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr jerarquium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trJerarquium'));
        $this->set('_serialize', ['trJerarquium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Jerarquium id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trJerarquium = $this->TrJerarquia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trJerarquium = $this->TrJerarquia->patchEntity($trJerarquium, $this->request->data);
            if ($this->TrJerarquia->save($trJerarquium)) {
                $this->Flash->success(__('The tr jerarquium has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr jerarquium could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trJerarquium'));
        $this->set('_serialize', ['trJerarquium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Jerarquium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trJerarquium = $this->TrJerarquia->get($id);
        if ($this->TrJerarquia->delete($trJerarquium)) {
            $this->Flash->success(__('The tr jerarquium has been deleted.'));
        } else {
            $this->Flash->error(__('The tr jerarquium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
