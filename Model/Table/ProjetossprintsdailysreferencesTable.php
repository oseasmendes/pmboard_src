<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetossprintsdailysreferences Model
 *
 * @property \App\Model\Table\ProjetossprintsdailiesTable|\Cake\ORM\Association\BelongsTo $Projetossprintsdailies
 *
 * @method \App\Model\Entity\Projetossprintsdailysreference get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetossprintsdailysreference newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetossprintsdailysreference[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsdailysreference|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsdailysreference saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsdailysreference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsdailysreference[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsdailysreference findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetossprintsdailysreferencesTable extends Table
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

        $this->setTable('projetossprintsdailysreferences');
        $this->setDisplayField('resumo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetossprintsdailys', [
            'foreignKey' => 'projetossprintsdaily_id'
        ]);

        $this->belongsTo('Agenda', [
            'foreignKey' => 'agenda_id'
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
            ->scalar('reference')
            ->maxLength('reference', 45)
            ->allowEmptyString('reference');

        $validator
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->boolean('cancelado')
            ->allowEmptyString('cancelado');

        $validator
            ->integer('numericreference')
            ->allowEmptyString('numericreference');

        $validator
            ->boolean('done')
            ->allowEmptyString('done');

        $validator
            ->boolean('doing')
            ->allowEmptyString('doing');

        $validator
            ->boolean('testing')
            ->allowEmptyString('testing');

        $validator
            ->boolean('collaboration')
            ->allowEmptyString('collaboration');

        $validator
            ->boolean('Selected')
            ->allowEmptyString('Selected');

        $validator
            ->boolean('analysing')
            ->allowEmptyString('analysing');

        $validator
            ->scalar('comments')
            ->maxLength('comments', 255)
            ->allowEmptyString('comments');
        
        $validator
            ->scalar('additionalcomments')
            ->maxLength('additionalcomments', 80)
            ->allowEmptyString('additionalcomments');

        $validator
            ->boolean('actionsplans')
            ->allowEmptyString('actionsplans');

        $validator
            ->boolean('generatenews')
            ->allowEmptyString('generatenews');

        $validator
            ->boolean('support')
            ->allowEmptyString('support');

        $validator
            ->boolean('risk')
            ->allowEmptyString('risk');

        $validator
            ->boolean('customeraction')
            ->allowEmptyString('customeraction');

        $validator
            ->boolean('customeractionflag')
            ->allowEmptyString('customeractionflag');

        $validator
            ->dateTime('lancadoem')
            ->allowEmptyDateTime('lancadoem');

            

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
        $rules->add($rules->existsIn(['projetossprintsdaily_id'], 'Projetossprintsdailys'));
        $rules->add($rules->existsIn(['agenda_id'], 'Agendas'));
        return $rules;
    }
}
