<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class UsersController extends AppController
{
	public function index()
	{
		$this->paginate = [
			'limit' => 10,
			'order' => [
				'Users.id' => 'asc',
			]
		];
		$usuarios = $this->paginate($this->Users);
		$this->set(compact('usuarios'));
	}

	public function view($id = null)
	{
		$usuario = $this->Users->get($id);

		$this->set(['usuario' => $usuario]);
	}

	public function add()
	{
		$user = $this->Users->newEntity();

		if($this->request->is('post')){
			$user = $this->Users->patchEntity($user, $this->request->getData());
			
			if($this->Users->save($user)){
				$this->Flash->success(__('Usuário cadastrado com sucesso'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->danger(__('Usuário não pode ser cadastrado no sistema!'));
			
		}
		$groupUsers = $this->Users->GroupUsers->find('list', ['limit' => 200]);
		$this->set(compact('user', 'groupUsers'));
	}

	public function edit($id = null)
	{
		$user = $this->Users->get($id);

		if($this->request->is(['post', 'put'])){
			$user = $this->Users->patchEntity($user, $this->request->getData());
			if($this->Users->save($user)){
				$this->Flash->success('Usuário editado com sucesso');
				return $this->redirect(['action' => 'index']);
			}else{
				$this->Flash->error('Usuário não foi editado com sucesso');
			}
		}
		$groupUsers = $this->Users->GroupUsers->find('list', ['limit' => 200]);
		$this->set(compact('user', 'groupUsers'));
	}

	public function delete($id = null)
	{
		//$this->request->allowMethod(['post', 'delete']);
		$user = $this->Users->get($id);
		if($this->Users->delete($user)){
			$this->Flash->success(('Usuário apagado com sucesso'));
		}else{
			$this->Flash->danger(('O usuário não foi apagado com sucesso'));
		}
		return $this->redirect(['action' => 'index']);
	}

	public function login()
	{
		if($this->request->is('post')){
			$user = $this->Auth->identify();
			if($user){
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}else{
				$this->Flash->danger(__('Login ou senha incorreto!'));
			}
		}
	}

	public function logout()
	{
		$this->Flash->success(__('Deslogado com sucesso!'));
		return $this->redirect($this->Auth->logout());
	}

}