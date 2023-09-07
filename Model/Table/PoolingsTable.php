<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Poolings Model
 *
 * @property \App\Model\Table\PoolingsmembersTable|\Cake\ORM\Association\HasMany $Poolingsmembers
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\HasMany $Projetosprodutosentregas
 *
 * @method \App\Model\Entity\Pooling get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pooling newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pooling[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pooling|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pooling saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pooling patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pooling[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pooling findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PoolingsTable extends Table
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

        $this->setTable('poolings');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Poolingsmembers', [
            'foreignKey' => 'pooling_id'
        ]);
        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'pooling_id'
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
            ->scalar('descricao')
            ->maxLength('descricao', 100)
            ->allowEmptyString('descricao');

        return $validator;
    }
}
