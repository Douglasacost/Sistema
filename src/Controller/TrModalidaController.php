<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrModalida Controller
 *
 * @property \App\Model\Table\TrModalidaTable $TrModalida
 */
class TrModalidaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trModalida = $this->paginate($this->TrModalida);

        $this->set(compact('trModalida'));
        $this->set('_serialize', ['trModalida']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Modalida id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trModalida = $this->TrModalida->get($id, [
            'contain' => []
        ]);

        $this->set('trModalida', $trModalida);
        $this->set('_serialize', ['trModalida']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trModalida = $this->TrModalida->newEntity();
        if ($this->request->is('post')) {
            $trModalida = $this->TrModalida->patchEntity($trModalida, $this->request->data);
            if ($this->TrModalida->save($trModalida)) {
                $this->Flash->success(__('The tr modalida has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr modalida could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trModalida'));
        $this->set('_serialize', ['trModalida']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Modalida id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trModalida = $this->TrModalida->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trModalida = $this->TrModalida->patchEntity($trModalida, $this->request->data);
            if ($this->TrModalida->save($trModalida)) {
                $this->Flash->success(__('The tr modalida has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr modalida could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trModalida'));
        $this->set('_serialize', ['trModalida']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Modalida id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trModalida = $this->TrModalida->get($id);
        if ($this->TrModalida->delete($trModalida)) {
            $this->Flash->success(__('The tr modalida has been deleted.'));
        } else {
            $this->Flash->error(__('The tr modalida could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
