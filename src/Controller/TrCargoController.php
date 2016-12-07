<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrCargo Controller
 *
 * @property \App\Model\Table\TrCargoTable $TrCargo
 */
class TrCargoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trCargo = $this->paginate($this->TrCargo);

        $this->set(compact('trCargo'));
        $this->set('_serialize', ['trCargo']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Cargo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trCargo = $this->TrCargo->get($id, [
            'contain' => []
        ]);

        $this->set('trCargo', $trCargo);
        $this->set('_serialize', ['trCargo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trCargo = $this->TrCargo->newEntity();
        if ($this->request->is('post')) {
            $trCargo = $this->TrCargo->patchEntity($trCargo, $this->request->data);
            if ($this->TrCargo->save($trCargo)) {
                $this->Flash->success(__('The tr cargo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr cargo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trCargo'));
        $this->set('_serialize', ['trCargo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Cargo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trCargo = $this->TrCargo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trCargo = $this->TrCargo->patchEntity($trCargo, $this->request->data);
            if ($this->TrCargo->save($trCargo)) {
                $this->Flash->success(__('The tr cargo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr cargo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trCargo'));
        $this->set('_serialize', ['trCargo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Cargo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trCargo = $this->TrCargo->get($id);
        if ($this->TrCargo->delete($trCargo)) {
            $this->Flash->success(__('The tr cargo has been deleted.'));
        } else {
            $this->Flash->error(__('The tr cargo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
