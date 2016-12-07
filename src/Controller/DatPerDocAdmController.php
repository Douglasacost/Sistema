<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DatPerDocAdm Controller
 *
 * @property \App\Model\Table\DatPerDocAdmTable $DatPerDocAdm
 */
class DatPerDocAdmController extends AppController
{
  public function isAuthorized($user)
  {
      if(isset($user['role']) and $user['role'] ==='user')
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
        $datPerDocAdm = $this->paginate($this->DatPerDocAdm);

        $this->set(compact('datPerDocAdm'));
        $this->set('_serialize', ['datPerDocAdm']);
    }

    /**
     * View method
     *
     * @param string|null $id Dat Per Doc Adm id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $datPerDocAdm = $this->DatPerDocAdm->get($id, [
            'contain' => []
        ]);

        $this->set('datPerDocAdm', $datPerDocAdm);
        $this->set('_serialize', ['datPerDocAdm']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $datPerDocAdm = $this->DatPerDocAdm->newEntity();
        if ($this->request->is('post')) {
            $datPerDocAdm = $this->DatPerDocAdm->patchEntity($datPerDocAdm, $this->request->data);
            if ($this->DatPerDocAdm->save($datPerDocAdm)) {
                $this->Flash->success(__('The dat per doc adm has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dat per doc adm could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('datPerDocAdm'));
        $this->set('_serialize', ['datPerDocAdm']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dat Per Doc Adm id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $datPerDocAdm = $this->DatPerDocAdm->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datPerDocAdm = $this->DatPerDocAdm->patchEntity($datPerDocAdm, $this->request->data);
            if ($this->DatPerDocAdm->save($datPerDocAdm)) {
                $this->Flash->success(__('The dat per doc adm has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dat per doc adm could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('datPerDocAdm'));
        $this->set('_serialize', ['datPerDocAdm']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dat Per Doc Adm id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $datPerDocAdm = $this->DatPerDocAdm->get($id);
        if ($this->DatPerDocAdm->delete($datPerDocAdm)) {
            $this->Flash->success(__('The dat per doc adm has been deleted.'));
        } else {
            $this->Flash->error(__('The dat per doc adm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
