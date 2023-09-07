<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fupqueuesdistributions Model
 *
 * @property \App\Model\Table\FupqueuesTable|\Cake\ORM\Association\BelongsTo $Fupqueues
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 *
 * @method \App\Model\Entity\Fupqueuesdistribution get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fupqueuesdistribution newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fupqueuesdistribution[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueuesdistribution|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupqueuesdistribution saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupqueuesdistribution patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueuesdistribution[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueuesdistribution findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FupqueuesdistributionsTable extends Table
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

        $this->setTable('fupqueuesdistributions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Fupqueues', [
            'foreignKey' => 'fupqueue_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id'
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
            ->boolean('ativo')
            ->allowEmptyString('ativo');

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
        $rules->add($rules->existsIn(['fupqueue_id'], 'Fupqueues'));
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));

        return $rules;
    }
}
