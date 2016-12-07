<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ubicacionexpedientes Controller
 *
 * @property \App\Model\Table\UbicacionexpedientesTable $Ubicacionexpedientes
 */
class UbicacionexpedientesController extends AppController
{

    public function isAuthorized($user)
    {
        if(isset($user['role']) and $user['role'] === 'user')
        {
            if(in_array($this->request->action, ['index', 'view','add','edit']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ubicacionexpedientes = $this->paginate($this->Ubicacionexpedientes);

        $this->set(compact('ubicacionexpedientes'));
        $this->set('_serialize', ['ubicacionexpedientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ubicacionexpediente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ubicacionexpediente = $this->Ubicacionexpedientes->get($id, [
            'contain' => []
        ]);

        $this->set('ubicacionexpediente', $ubicacionexpediente);
        $this->set('_serialize', ['ubicacionexpediente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ubicacionexpediente = $this->Ubicacionexpedientes->newEntity();
        if ($this->request->is('post')) {
            $ubicacionexpediente = $this->Ubicacionexpedientes->patchEntity($ubicacionexpediente, $this->request->data);
            if ($this->Ubicacionexpedientes->save($ubicacionexpediente)) {
                $this->Flash->success(__('The ubicacionexpediente has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ubicacionexpediente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ubicacionexpediente'));
        $this->set('_serialize', ['ubicacionexpediente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ubicacionexpediente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ubicacionexpediente = $this->Ubicacionexpedientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ubicacionexpediente = $this->Ubicacionexpedientes->patchEntity($ubicacionexpediente, $this->request->data);
            if ($this->Ubicacionexpedientes->save($ubicacionexpediente)) {
                $this->Flash->success(__('The ubicacionexpediente has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ubicacionexpediente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ubicacionexpediente'));
        $this->set('_serialize', ['ubicacionexpediente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ubicacionexpediente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ubicacionexpediente = $this->Ubicacionexpedientes->get($id);
        if ($this->Ubicacionexpedientes->delete($ubicacionexpediente)) {
            $this->Flash->success(__('The ubicacionexpediente has been deleted.'));
        } else {
            $this->Flash->error(__('The ubicacionexpediente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
