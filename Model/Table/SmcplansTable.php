<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Smcplans Model
 *
 * @property |\Cake\ORM\Association\HasMany $Sistemasbriefings
 *
 * @method \App\Model\Entity\Smcplan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Smcplan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Smcplan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Smcplan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Smcplan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Smcplan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Smcplan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Smcplan findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SmcplansTable extends Table
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

        $this->setTable('smcplans');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sistemasbriefings', [
            'foreignKey' => 'smcplan_id'
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
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('pmg')
            ->maxLength('pmg', 45)
            ->allowEmptyString('pmg');

        return $validator;
    }
}
