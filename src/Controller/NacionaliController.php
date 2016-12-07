<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Nacionali Controller
 *
 * @property \App\Model\Table\NacionaliTable $Nacionali
 */
class NacionaliController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $nacionali = $this->paginate($this->Nacionali);

        $this->set(compact('nacionali'));
        $this->set('_serialize', ['nacionali']);
    }

    /**
     * View method
     *
     * @param string|null $id Nacionali id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nacionali = $this->Nacionali->get($id, [
            'contain' => []
        ]);

        $this->set('nacionali', $nacionali);
        $this->set('_serialize', ['nacionali']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nacionali = $this->Nacionali->newEntity();
        if ($this->request->is('post')) {
            $nacionali = $this->Nacionali->patchEntity($nacionali, $this->request->data);
            if ($this->Nacionali->save($nacionali)) {
                $this->Flash->success(__('The nacionali has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nacionali could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nacionali'));
        $this->set('_serialize', ['nacionali']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nacionali id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nacionali = $this->Nacionali->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nacionali = $this->Nacionali->patchEntity($nacionali, $this->request->data);
            if ($this->Nacionali->save($nacionali)) {
                $this->Flash->success(__('The nacionali has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nacionali could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nacionali'));
        $this->set('_serialize', ['nacionali']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nacionali id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nacionali = $this->Nacionali->get($id);
        if ($this->Nacionali->delete($nacionali)) {
            $this->Flash->success(__('The nacionali has been deleted.'));
        } else {
            $this->Flash->error(__('The nacionali could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
