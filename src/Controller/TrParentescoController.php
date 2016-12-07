<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrParentesco Controller
 *
 * @property \App\Model\Table\TrParentescoTable $TrParentesco
 */
class TrParentescoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trParentesco = $this->paginate($this->TrParentesco);

        $this->set(compact('trParentesco'));
        $this->set('_serialize', ['trParentesco']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Parentesco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trParentesco = $this->TrParentesco->get($id, [
            'contain' => []
        ]);

        $this->set('trParentesco', $trParentesco);
        $this->set('_serialize', ['trParentesco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trParentesco = $this->TrParentesco->newEntity();
        if ($this->request->is('post')) {
            $trParentesco = $this->TrParentesco->patchEntity($trParentesco, $this->request->data);
            if ($this->TrParentesco->save($trParentesco)) {
                $this->Flash->success(__('The tr parentesco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr parentesco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trParentesco'));
        $this->set('_serialize', ['trParentesco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Parentesco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trParentesco = $this->TrParentesco->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trParentesco = $this->TrParentesco->patchEntity($trParentesco, $this->request->data);
            if ($this->TrParentesco->save($trParentesco)) {
                $this->Flash->success(__('The tr parentesco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr parentesco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trParentesco'));
        $this->set('_serialize', ['trParentesco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Parentesco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trParentesco = $this->TrParentesco->get($id);
        if ($this->TrParentesco->delete($trParentesco)) {
            $this->Flash->success(__('The tr parentesco has been deleted.'));
        } else {
            $this->Flash->error(__('The tr parentesco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
