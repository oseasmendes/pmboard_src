<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pmobalances Model
 *
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\PmobalanceconsultoresTable|\Cake\ORM\Association\HasMany $Pmobalanceconsultores
 *
 * @method \App\Model\Entity\Pmobalance get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pmobalance newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pmobalance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pmobalance|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pmobalance saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pmobalance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pmobalance[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pmobalance findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PmobalancesTable extends Table
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

        $this->setTable('pmobalances');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Pmobalanceconsultores', [
            'foreignKey' => 'pmobalance_id'
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
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->date('periodoinicio')
            ->allowEmptyDate('periodoinicio');

        $validator
            ->date('periodofim')
            ->allowEmptyDate('periodofim');

        $validator
            ->integer('versao')
            ->allowEmptyString('versao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));

        return $rules;
    }
}
