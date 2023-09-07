<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ataaprovadores Model
 *
 * @property \App\Model\Table\AtasTable|\Cake\ORM\Association\BelongsTo $Atas
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 *
 * @method \App\Model\Entity\Ataaprovadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ataaprovadore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ataaprovadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ataaprovadore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ataaprovadore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ataaprovadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ataaprovadore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ataaprovadore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtaaprovadoresTable extends Table
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

        $this->setTable('ataaprovadores');
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
            ->scalar('aprovacao_status')
            ->maxLength('aprovacao_status', 255)
            ->allowEmptyString('aprovacao_status');

        $validator
            ->dateTime('aprovacao_data')
            ->allowEmptyDateTime('aprovacao_data');

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
