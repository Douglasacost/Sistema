<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DatCar Controller
 *
 * @property \App\Model\Table\DatCarTable $DatCar
 */
class DatCarController extends AppController
{
  class DatPerDocAdmController extends AppController
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
        $datCar = $this->paginate($this->DatCar);

        $this->set(compact('datCar'));
        $this->set('_serialize', ['datCar']);
    }

    /**
     * View method
     *
     * @param string|null $id Dat Car id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $datCar = $this->DatCar->get($id, [
            'contain' => []
        ]);

        $this->set('datCar', $datCar);
        $this->set('_serialize', ['datCar']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $datCar = $this->DatCar->newEntity();
        if ($this->request->is('post')) {
            $datCar = $this->DatCar->patchEntity($datCar, $this->request->data);
            if ($this->DatCar->save($datCar)) {
                $this->Flash->success(__('The dat car has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dat car could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('datCar'));
        $this->set('_serialize', ['datCar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dat Car id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $datCar = $this->DatCar->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datCar = $this->DatCar->patchEntity($datCar, $this->request->data);
            if ($this->DatCar->save($datCar)) {
                $this->Flash->success(__('The dat car has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dat car could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('datCar'));
        $this->set('_serialize', ['datCar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dat Car id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $datCar = $this->DatCar->get($id);
        if ($this->DatCar->delete($datCar)) {
            $this->Flash->success(__('The dat car has been deleted.'));
        } else {
            $this->Flash->error(__('The dat car could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
