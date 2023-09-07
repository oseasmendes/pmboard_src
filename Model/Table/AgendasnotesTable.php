<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendasnotes Model
 *
 * @property \App\Model\Table\AgendaschannelsTable|\Cake\ORM\Association\BelongsTo $Agendaschannels
 * @property \App\Model\Table\AgendasTable|\Cake\ORM\Association\BelongsTo $Agendas
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 *
 * @method \App\Model\Entity\Agendasnote get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agendasnote newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agendasnote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agendasnote|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agendasnote saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agendasnote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agendasnote[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agendasnote findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgendasnotesTable extends Table
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

        $this->setTable('agendasnotes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Agendaschannels', [
            'foreignKey' => 'agendaschannel_id'
        ]);
        $this->belongsTo('Agendas', [
            'foreignKey' => 'agenda_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
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
            ->scalar('timeinformed')
            ->maxLength('timeinformed', 5)
            ->allowEmptyString('timeinformed');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('comments')
            ->maxLength('comments', 4294967295)
            ->allowEmptyString('comments');

        $validator
            ->scalar('keywords')
            ->maxLength('keywords', 255)
            ->allowEmptyString('keywords');

        $validator
            ->boolean('actionplan')
            ->allowEmptyString('actionplan');

        $validator
            ->boolean('selection')
            ->allowEmptyString('selection');

        $validator
            ->boolean('beshared')
            ->allowEmptyString('beshared');

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
        $rules->add($rules->existsIn(['agendaschannel_id'], 'Agendaschannels'));
        $rules->add($rules->existsIn(['agenda_id'], 'Agendas'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));

        return $rules;
    }
}
