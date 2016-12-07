<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ControldeSolicitudes Controller
 *
 * @property \App\Model\Table\ControldeSolicitudesTable $ControldeSolicitudes
 */
class ControldeSolicitudesController extends AppController
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
        $controldeSolicitudes = $this->paginate($this->ControldeSolicitudes);

        $this->set(compact('controldeSolicitudes'));
        $this->set('_serialize', ['controldeSolicitudes']);
    }

    /**
     * View method
     *
     * @param string|null $id Controlde Solicitude id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controldeSolicitude = $this->ControldeSolicitudes->get($id, [
            'contain' => []
        ]);

        $this->set('controldeSolicitude', $controldeSolicitude);
        $this->set('_serialize', ['controldeSolicitude']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controldeSolicitude = $this->ControldeSolicitudes->newEntity();
        if ($this->request->is('post')) {
            $controldeSolicitude = $this->ControldeSolicitudes->patchEntity($controldeSolicitude, $this->request->data);
            if ($this->ControldeSolicitudes->save($controldeSolicitude)) {
                $this->Flash->success(__('The controlde solicitude has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The controlde solicitude could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('controldeSolicitude'));
        $this->set('_serialize', ['controldeSolicitude']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Controlde Solicitude id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controldeSolicitude = $this->ControldeSolicitudes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controldeSolicitude = $this->ControldeSolicitudes->patchEntity($controldeSolicitude, $this->request->data);
            if ($this->ControldeSolicitudes->save($controldeSolicitude)) {
                $this->Flash->success(__('The controlde solicitude has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The controlde solicitude could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('controldeSolicitude'));
        $this->set('_serialize', ['controldeSolicitude']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Controlde Solicitude id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controldeSolicitude = $this->ControldeSolicitudes->get($id);
        if ($this->ControldeSolicitudes->delete($controldeSolicitude)) {
            $this->Flash->success(__('The controlde solicitude has been deleted.'));
        } else {
            $this->Flash->error(__('The controlde solicitude could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
