<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function initialize(): void
    {
            parent::initialize();
            $this->viewBuilder()->setLayout('layoutAdmin');
    }
    
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user->username = $this->request->getData('username');
            $hashPswdObj = new DefaultPasswordHasher;
            $user->password = $hashPswdObj->hash($this->request->getData('password'));
            $user->fullname = $this->request->getData('fullname');
            $user->email = $this->request->getData('email');
            $user->age = $this->request->getData('age');
            $user->role = $this->request->getData('role');
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Lưu thành công'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Không thể lưu. Vui lòng thử lại.'));
        }
        $this->set(compact('user'));
    }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $hashPswdObj = new DefaultPasswordHasher;
            $user->password = $hashPswdObj->hash($this->request->getData('password'));
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Cập nhập thành công'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Không thể lưu. Vui lòng thử lại.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Xóa thành công.'));
        } else {
            $this->Flash->error(__('Không thể bị xóa. Vui lòng thử lại.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
