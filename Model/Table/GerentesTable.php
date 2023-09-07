<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gerentes Model
 *
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\HasMany $Departamentos
 *
 * @method \App\Model\Entity\Gerente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gerente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gerente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gerente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gerente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gerente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gerente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gerente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GerentesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('gerentes');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Departamentos', [
            'foreignKey' => 'gerente_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 150)
            ->requirePresence('nome', 'create')
            ->allowEmptyString('nome', false);

        return $validator;
    }
}
