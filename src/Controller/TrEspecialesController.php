<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrEspeciales Controller
 *
 * @property \App\Model\Table\TrEspecialesTable $TrEspeciales
 */
class TrEspecialesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trEspeciales = $this->paginate($this->TrEspeciales);

        $this->set(compact('trEspeciales'));
        $this->set('_serialize', ['trEspeciales']);
    }

    /**
     * View method
     *
     * @param string|null $id Tr Especiale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trEspeciale = $this->TrEspeciales->get($id, [
            'contain' => []
        ]);

        $this->set('trEspeciale', $trEspeciale);
        $this->set('_serialize', ['trEspeciale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trEspeciale = $this->TrEspeciales->newEntity();
        if ($this->request->is('post')) {
            $trEspeciale = $this->TrEspeciales->patchEntity($trEspeciale, $this->request->data);
            if ($this->TrEspeciales->save($trEspeciale)) {
                $this->Flash->success(__('The tr especiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr especiale could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trEspeciale'));
        $this->set('_serialize', ['trEspeciale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tr Especiale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trEspeciale = $this->TrEspeciales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trEspeciale = $this->TrEspeciales->patchEntity($trEspeciale, $this->request->data);
            if ($this->TrEspeciales->save($trEspeciale)) {
                $this->Flash->success(__('The tr especiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tr especiale could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trEspeciale'));
        $this->set('_serialize', ['trEspeciale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tr Especiale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trEspeciale = $this->TrEspeciales->get($id);
        if ($this->TrEspeciales->delete($trEspeciale)) {
            $this->Flash->success(__('The tr especiale has been deleted.'));
        } else {
            $this->Flash->error(__('The tr especiale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
