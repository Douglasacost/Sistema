<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entidad Controller
 *
 * @property \App\Model\Table\EntidadTable $Entidad
 */
class EntidadController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $entidad = $this->paginate($this->Entidad);

        $this->set(compact('entidad'));
        $this->set('_serialize', ['entidad']);
    }

    /**
     * View method
     *
     * @param string|null $id Entidad id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entidad = $this->Entidad->get($id, [
            'contain' => []
        ]);

        $this->set('entidad', $entidad);
        $this->set('_serialize', ['entidad']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entidad = $this->Entidad->newEntity();
        if ($this->request->is('post')) {
            $entidad = $this->Entidad->patchEntity($entidad, $this->request->data);
            if ($this->Entidad->save($entidad)) {
                $this->Flash->success(__('The entidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entidad could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('entidad'));
        $this->set('_serialize', ['entidad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entidad id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entidad = $this->Entidad->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entidad = $this->Entidad->patchEntity($entidad, $this->request->data);
            if ($this->Entidad->save($entidad)) {
                $this->Flash->success(__('The entidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entidad could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('entidad'));
        $this->set('_serialize', ['entidad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entidad id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entidad = $this->Entidad->get($id);
        if ($this->Entidad->delete($entidad)) {
            $this->Flash->success(__('The entidad has been deleted.'));
        } else {
            $this->Flash->error(__('The entidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
