<?php

namespace App\Controller;

use App\Controller\AppController;

class AlunoController extends AppController
{
	public function index()
	{
		$this->paginate = [
			'limit' => 10,
			'order' => [
				'Aluno.id' => 'asc',
			]
		];
		$usuarios = $this->paginate($this->Aluno);
		$this->set(compact('usuarios'));
	}

	public function view($id = null)
	{
		$usuario = $this->Aluno->get($id);

		$this->set(['usuario' => $usuario]);
	}

	public function add()
	{
		$user = $this->Aluno->newEntity();

		if($this->request->is('post')){
			$user = $this->Aluno->patchEntity($user, $this->request->getData());
			
			if($this->Aluno->save($user)){
				$this->Flash->success(__('Aluno cadastrado com sucesso!'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->danger(__('Aluno não foi cadastrado!  Por favor, tente de novo.'));
			
		}
		$this->set(compact('user'));
	}

	public function edit($id = null)
	{
		$user = $this->Aluno->get($id);

		if($this->request->is(['post', 'put'])){
			$user = $this->Aluno->patchEntity($user, $this->request->getData());
			if($this->Aluno->save($user)){
				$this->Flash->success('Aluno editado com sucesso!');
				return $this->redirect(['action' => 'index']);
			}else{
				$this->Flash->danger('Aluno não foi editado!');
			}
		}
		
		$this->set(compact('user'));
	}

	public function delete($id = null)
	{
		//$this->request->allowMethod(['post', 'delete']);
		$this->request->allowMethod(['post', 'delete']);
		$user = $this->Aluno->get($id);
		if($this->Aluno->delete($user)){
			$this->Flash->success(__('Aluno apagado com sucesso!'));
		}else{
			$this->Flash->danger(__('O aluno não foi apagado!'));
		}
		return $this->redirect(['action' => 'index']);
	}
}