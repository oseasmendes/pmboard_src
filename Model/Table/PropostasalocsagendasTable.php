<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Propostasalocsagendas Model
 *
 * @property \App\Model\Table\PropostasalocsTable|\Cake\ORM\Association\BelongsTo $Propostasalocs
 *
 * @method \App\Model\Entity\Propostasalocsagenda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Propostasalocsagenda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Propostasalocsagenda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Propostasalocsagenda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Propostasalocsagenda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Propostasalocsagenda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Propostasalocsagenda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Propostasalocsagenda findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PropostasalocsagendasTable extends Table
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

        $this->setTable('propostasalocsagendas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Propostasalocs', [
            'foreignKey' => 'propostasaloc_id'
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
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->decimal('jornadadetrabalho')
            ->allowEmptyString('jornadadetrabalho');

        $validator
            ->scalar('hrinicio')
            ->maxLength('hrinicio', 5)
            ->allowEmptyString('hrinicio');

        $validator
            ->scalar('hrfim')
            ->maxLength('hrfim', 5)
            ->allowEmptyString('hrfim');

        $validator
            ->scalar('semanatag')
            ->maxLength('semanatag', 45)
            ->allowEmptyString('semanatag');

        $validator
            ->integer('semananumero')
            ->allowEmptyString('semananumero');

        $validator
            ->scalar('referenciadia')
            ->maxLength('referenciadia', 10)
            ->allowEmptyString('referenciadia');

        $validator
            ->decimal('jornadatrabalholiquido')
            ->allowEmptyString('jornadatrabalholiquido');

        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');

        $validator
            ->integer('weekend')
            ->allowEmptyString('weekend');

        $validator
            ->integer('diasemana')
            ->allowEmptyString('diasemana');

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
        $rules->add($rules->existsIn(['propostasaloc_id'], 'Propostasalocs'));

        return $rules;
    }
}
