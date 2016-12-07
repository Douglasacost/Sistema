<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DatFam Controller
 *
 * @property \App\Model\Table\DatFamTable $DatFam
 */
class DatFamController extends AppController
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
        $datFam = $this->paginate($this->DatFam);

        $this->set(compact('datFam'));
        $this->set('_serialize', ['datFam']);
    }

    /**
     * View method
     *
     * @param string|null $id Dat Fam id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $datFam = $this->DatFam->get($id, [
            'contain' => []
        ]);

        $this->set('datFam', $datFam);
        $this->set('_serialize', ['datFam']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $datFam = $this->DatFam->newEntity();
        if ($this->request->is('post')) {
            $datFam = $this->DatFam->patchEntity($datFam, $this->request->data);
            if ($this->DatFam->save($datFam)) {
                $this->Flash->success(__('The dat fam has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dat fam could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('datFam'));
        $this->set('_serialize', ['datFam']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dat Fam id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $datFam = $this->DatFam->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datFam = $this->DatFam->patchEntity($datFam, $this->request->data);
            if ($this->DatFam->save($datFam)) {
                $this->Flash->success(__('The dat fam has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dat fam could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('datFam'));
        $this->set('_serialize', ['datFam']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dat Fam id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $datFam = $this->DatFam->get($id);
        if ($this->DatFam->delete($datFam)) {
            $this->Flash->success(__('The dat fam has been deleted.'));
        } else {
            $this->Flash->error(__('The dat fam could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
