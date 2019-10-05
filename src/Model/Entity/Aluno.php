<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Aluno extends Entity
{
	public $_accessible = [
		'id'=>true,
		'name'=>true,
		'email'=>true,
		'foto'=>true,
		'telefone'=>true,
		'cpf'=>true,
		'sexo'=>true,
		'dataNascimento'=>true,
		'uf'=>true,
		'cidade'=>true,
		'bairro'=>true,
		'cep'=>true,
		'logradouro'=>true,
		'numero'=>true
	];
}