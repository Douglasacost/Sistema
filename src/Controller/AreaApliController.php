<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AreaApli Controller
 *
 * @property \App\Model\Table\AreaApliTable $AreaApli
 */
class AreaApliController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $areaApli = $this->paginate($this->AreaApli);

        $this->set(compact('areaApli'));
        $this->set('_serialize', ['areaApli']);
    }

    /**
     * View method
     *
     * @param string|null $id Area Apli id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areaApli = $this->AreaApli->get($id, [
            'contain' => []
        ]);

        $this->set('areaApli', $areaApli);
        $this->set('_serialize', ['areaApli']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areaApli = $this->AreaApli->newEntity();
        if ($this->request->is('post')) {
            $areaApli = $this->AreaApli->patchEntity($areaApli, $this->request->data);
            if ($this->AreaApli->save($areaApli)) {
                $this->Flash->success(__('The area apli has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The area apli could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areaApli'));
        $this->set('_serialize', ['areaApli']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area Apli id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areaApli = $this->AreaApli->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areaApli = $this->AreaApli->patchEntity($areaApli, $this->request->data);
            if ($this->AreaApli->save($areaApli)) {
                $this->Flash->success(__('The area apli has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The area apli could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areaApli'));
        $this->set('_serialize', ['areaApli']);
    }
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
     * Delete method
     *
     * @param string|null $id Area Apli id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areaApli = $this->AreaApli->get($id);
        if ($this->AreaApli->delete($areaApli)) {
            $this->Flash->success(__('The area apli has been deleted.'));
        } else {
            $this->Flash->error(__('The area apli could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
