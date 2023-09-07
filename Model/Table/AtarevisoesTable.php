<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atarevisoes Model
 *
 * @property \App\Model\Table\AtasTable|\Cake\ORM\Association\BelongsTo $Atas
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 *
 * @method \App\Model\Entity\Atareviso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atareviso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atareviso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atareviso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atareviso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atareviso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atareviso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atareviso findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtarevisoesTable extends Table
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

        $this->setTable('atarevisoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Atas', [
            'foreignKey' => 'ata_id'
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
            ->scalar('revisao_status')
            ->maxLength('revisao_status', 255)
            ->allowEmptyString('revisao_status');

        $validator
            ->dateTime('revisao_data')
            ->allowEmptyDateTime('revisao_data');

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
        $rules->add($rules->existsIn(['ata_id'], 'Atas'));
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));

        return $rules;
    }
}
