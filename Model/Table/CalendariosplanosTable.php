<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calendariosplanos Model
 *
 * @property \App\Model\Table\CalendariostiposTable|\Cake\ORM\Association\BelongsTo $Calendariostipos
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\CalendariosTable|\Cake\ORM\Association\HasMany $Calendarios
 *
 * @method \App\Model\Entity\Calendariosplano get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calendariosplano newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calendariosplano[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calendariosplano|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendariosplano saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendariosplano patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calendariosplano[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calendariosplano findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CalendariosplanosTable extends Table
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

        $this->setTable('calendariosplanos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Calendariostipos', [
            'foreignKey' => 'calendariostipo_id'
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Calendarios', [
            'foreignKey' => 'calendariosplano_id'
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
            ->maxLength('descricao', 100)
            ->allowEmptyString('descricao');

        $validator
            ->dateTime('horainicio')
            ->allowEmptyDateTime('horainicio');

        $validator
            ->dateTime('horafim')
            ->allowEmptyDateTime('horafim');

        $validator
            ->dateTime('horaalmocoinicio')
            ->allowEmptyDateTime('horaalmocoinicio');

        $validator
            ->dateTime('horaalmocofim')
            ->allowEmptyDateTime('horaalmocofim');

        $validator
            ->dateTime('primeiraparadainicio')
            ->allowEmptyDateTime('primeiraparadainicio');

        $validator
            ->dateTime('primeiraparadafim')
            ->allowEmptyDateTime('primeiraparadafim');

        $validator
            ->dateTime('segundaparadainicio')
            ->allowEmptyDateTime('segundaparadainicio');

        $validator
            ->dateTime('segundaparadafim')
            ->allowEmptyDateTime('segundaparadafim');

        $validator
            ->dateTime('terceiraparadainicio')
            ->allowEmptyDateTime('terceiraparadainicio');

        $validator
            ->dateTime('terceiraparadafim')
            ->allowEmptyDateTime('terceiraparadafim');

        $validator
            ->dateTime('quartaparadainicio')
            ->allowEmptyDateTime('quartaparadainicio');

        $validator
            ->dateTime('quartaparadafim')
            ->allowEmptyDateTime('quartaparadafim');

        $validator
            ->decimal('tempoabertura')
            ->allowEmptyString('tempoabertura');

        $validator
            ->decimal('tempoparadaprogramada')
            ->allowEmptyString('tempoparadaprogramada');

        $validator
            ->decimal('tempodisponivel')
            ->allowEmptyString('tempodisponivel');

        $validator
            ->boolean('considerarcrossday')
            ->allowEmptyString('considerarcrossday');

        $validator
            ->scalar('tempoprimeiraparada')
            ->maxLength('tempoprimeiraparada', 30)
            ->allowEmptyString('tempoprimeiraparada');

        $validator
            ->scalar('temposegundaparada')
            ->maxLength('temposegundaparada', 30)
            ->allowEmptyString('temposegundaparada');

        $validator
            ->scalar('tempoterceiraparada')
            ->maxLength('tempoterceiraparada', 30)
            ->allowEmptyString('tempoterceiraparada');

        $validator
            ->scalar('tempoquartaparada')
            ->maxLength('tempoquartaparada', 30)
            ->allowEmptyString('tempoquartaparada');

        $validator
            ->scalar('tempoalmocoparada')
            ->maxLength('tempoalmocoparada', 30)
            ->allowEmptyString('tempoalmocoparada');

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
        $rules->add($rules->existsIn(['calendariostipo_id'], 'Calendariostipos'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }
}
