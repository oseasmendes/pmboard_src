<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logbooks Model
 *
 * @property \App\Model\Table\ProgramasTable|\Cake\ORM\Association\BelongsTo $Programas
 * @property \App\Model\Table\AtividadetiposTable|\Cake\ORM\Association\BelongsTo $Atividadetipos
 * @property \App\Model\Table\LogbooksitemsTable|\Cake\ORM\Association\HasMany $Logbooksitems
 *
 * @method \App\Model\Entity\Logbook get($primaryKey, $options = [])
 * @method \App\Model\Entity\Logbook newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Logbook[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logbook|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logbook saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logbook patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Logbook[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logbook findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LogbooksTable extends Table
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

        $this->setTable('logbooks');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Programas', [
            'foreignKey' => 'programa_id'
        ]);
        $this->belongsTo('Atividadetipos', [
            'foreignKey' => 'atividadetipos_id'
        ]);
        $this->hasMany('Logbooksitems', [
            'foreignKey' => 'logbook_id'
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
            ->scalar('descricao')
            ->maxLength('descricao', 220)
            ->allowEmptyString('descricao');

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
        $rules->add($rules->existsIn(['programa_id'], 'Programas'));
        $rules->add($rules->existsIn(['atividadetipos_id'], 'Atividadetipos'));

        return $rules;
    }
}
