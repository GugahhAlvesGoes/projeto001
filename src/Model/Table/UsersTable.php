<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('GroupUsers', [
            'foreignKey' => 'group_user_id',
            'joinType' => 'INNER'
        ]);
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
        ->requirePresence('grupoUsuario', 'create')
        ->notEmpty('grupoUsuario');

        $validator
        ->requirePresence('username', 'create')
        ->notEmpty('username');

        $validator
        ->scalar('password')
        ->maxLength('password', 220)
        ->requirePresence('password', 'create')
        ->notEmpty('password')
        ->add('password', [
            'length' => [
                'rule' => ['minLength', 2],
                'message' => 'A senha deve conter no mínimo 2 caracteres!',   
            ]
        ]);

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Este e-mail já está cadastrado'));
        $rules->add($rules->isUnique(['username'], 'Este nome de usuário já está sendo utilizado'));
        $rules->add($rules->existsIn(['group_user_id'], 'GroupUsers'));

        return $rules;
    }
}