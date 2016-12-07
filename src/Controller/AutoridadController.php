<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Autoridad Controller
 *
 * @property \App\Model\Table\AutoridadTable $Autoridad
 */
class AutoridadController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $autoridad = $this->paginate($this->Autoridad);

        $this->set(compact('autoridad'));
        $this->set('_serialize', ['autoridad']);
    }

    /**
     * View method
     *
     * @param string|null $id Autoridad id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autoridad = $this->Autoridad->get($id, [
            'contain' => []
        ]);

        $this->set('autoridad', $autoridad);
        $this->set('_serialize', ['autoridad']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autoridad = $this->Autoridad->newEntity();
        if ($this->request->is('post')) {
            $autoridad = $this->Autoridad->patchEntity($autoridad, $this->request->data);
            if ($this->Autoridad->save($autoridad)) {
                $this->Flash->success(__('The autoridad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The autoridad could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('autoridad'));
        $this->set('_serialize', ['autoridad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Autoridad id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autoridad = $this->Autoridad->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autoridad = $this->Autoridad->patchEntity($autoridad, $this->request->data);
            if ($this->Autoridad->save($autoridad)) {
                $this->Flash->success(__('The autoridad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The autoridad could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('autoridad'));
        $this->set('_serialize', ['autoridad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Autoridad id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autoridad = $this->Autoridad->get($id);
        if ($this->Autoridad->delete($autoridad)) {
            $this->Flash->success(__('The autoridad has been deleted.'));
        } else {
            $this->Flash->error(__('The autoridad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
