<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrMedio Controller
 *
 * @property \App\Model\Table\TrMedioTable $TrMedio
 */
class TrMedioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trMedio = $this->paginate($this->TrMedio);

        $this->set(compact('trMedio'));
        $this->set('_serialize', ['trMedio']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Medio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trMedio = $this->TrMedio->get($id, [
            'contain' => []
        ]);

        $this->set('trMedio', $trMedio);
        $this->set('_serialize', ['trMedio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trMedio = $this->TrMedio->newEntity();
        if ($this->request->is('post')) {
            $trMedio = $this->TrMedio->patchEntity($trMedio, $this->request->data);
            if ($this->TrMedio->save($trMedio)) {
                $this->Flash->success(__('The tr medio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr medio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trMedio'));
        $this->set('_serialize', ['trMedio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Medio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trMedio = $this->TrMedio->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trMedio = $this->TrMedio->patchEntity($trMedio, $this->request->data);
            if ($this->TrMedio->save($trMedio)) {
                $this->Flash->success(__('The tr medio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr medio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trMedio'));
        $this->set('_serialize', ['trMedio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Medio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trMedio = $this->TrMedio->get($id);
        if ($this->TrMedio->delete($trMedio)) {
            $this->Flash->success(__('The tr medio has been deleted.'));
        } else {
            $this->Flash->error(__('The tr medio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
