<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calendarios Model
 *
 * @property \App\Model\Table\CalendariosplanosTable|\Cake\ORM\Association\BelongsTo $Calendariosplanos
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Calendario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calendario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calendario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calendario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calendario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calendario findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CalendariosTable extends Table
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

        $this->setTable('calendarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Calendariosplanos', [
            'foreignKey' => 'calendariosplano_id'
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
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
            ->dateTime('data')
            ->allowEmptyDateTime('data');

        $validator
            ->scalar('dia')
            ->maxLength('dia', 2)
            ->allowEmptyString('dia');

        $validator
            ->scalar('mes')
            ->maxLength('mes', 2)
            ->allowEmptyString('mes');

        $validator
            ->scalar('ano')
            ->maxLength('ano', 4)
            ->allowEmptyString('ano');

        $validator
            ->scalar('dianome')
            ->maxLength('dianome', 45)
            ->allowEmptyString('dianome');

        $validator
            ->scalar('mesnome')
            ->maxLength('mesnome', 45)
            ->allowEmptyString('mesnome');

        $validator
            ->scalar('etiqueta')
            ->maxLength('etiqueta', 45)
            ->allowEmptyString('etiqueta');

        $validator
            ->integer('feriado')
            ->allowEmptyString('feriado');

        $validator
            ->integer('diaserial')
            ->allowEmptyString('diaserial');

        $validator
            ->integer('endweek')
            ->allowEmptyString('endweek');

        $validator
            ->integer('technicalfreezing')
            ->allowEmptyString('technicalfreezing');

        $validator
            ->integer('semananumero')
            ->allowEmptyString('semananumero');

        $validator
            ->scalar('referenciadia')
            ->maxLength('referenciadia', 10)
            ->allowEmptyString('referenciadia');

        $validator
            ->decimal('tempoabertura')
            ->allowEmptyString('tempoabertura');

        $validator
            ->decimal('tempoparadaprogramada')
            ->allowEmptyString('tempoparadaprogramada');

        $validator
            ->decimal('tempodisponivel')
            ->allowEmptyString('tempodisponivel');

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
        $rules->add($rules->existsIn(['calendariosplano_id'], 'Calendariosplanos'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }
}
