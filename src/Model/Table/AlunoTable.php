<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class AlunoTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('aluno');

        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
        ->integer('id')
        ->allowEmpty('id', 'create');

        $validator
        ->requirePresence('name', 'create')
        ->notEmpty('name');

        $validator
        ->requirePresence('email', 'create')
        ->notEmpty('email');

        $validator
        ->requirePresence('telefone', 'create')
        ->notEmpty('telefone');

        $validator
        ->requirePresence('sexo', 'create')
        ->notEmpty('sexo');

        $validator
        ->requirePresence('cpf', 'create')
        ->notEmpty('cpf');

        $validator
        ->requirePresence('dataNascimento', 'create')
        ->notEmpty('dataNascimento');

        $validator
        ->requirePresence('uf', 'create')
        ->notEmpty('uf');

        $validator
        ->requirePresence('cidade', 'create')
        ->notEmpty('cidade');

        $validator
        ->requirePresence('bairro', 'create')
        ->notEmpty('bairro');

        $validator
        ->requirePresence('cep', 'create')
        ->notEmpty('cep');

        $validator
        ->requirePresence('logradouro', 'create')
        ->notEmpty('logradouro');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Este e-mail já está cadastrado'));
        $rules->add($rules->isUnique(['cpf'], 'Este CPF já está sendo utilizado'));
        return $rules;
    }
}