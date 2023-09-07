<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atas Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Agendas
 * @property |\Cake\ORM\Association\BelongsTo $Relators
 * @property |\Cake\ORM\Association\BelongsTo $Patrocinadors
 * @property |\Cake\ORM\Association\BelongsTo $Coordenadorreuniaos
 * @property \App\Model\Table\ConditionsTable|\Cake\ORM\Association\BelongsTo $Conditions
 * @property |\Cake\ORM\Association\BelongsTo $Pmoprojetos
 * @property \App\Model\Table\TipodocumentosTable|\Cake\ORM\Association\BelongsTo $Tipodocumentos
 * @property \App\Model\Table\AtaaprovadoresTable|\Cake\ORM\Association\HasMany $Ataaprovadores
 * @property \App\Model\Table\AtaparticipantesTable|\Cake\ORM\Association\HasMany $Ataparticipantes
 * @property \App\Model\Table\AtarevisaohistoricosTable|\Cake\ORM\Association\HasMany $Atarevisaohistoricos
 * @property \App\Model\Table\AtarevisoesTable|\Cake\ORM\Association\HasMany $Atarevisoes
 * @property |\Cake\ORM\Association\HasMany $Atasdetalhes
 *
 * @method \App\Model\Entity\Ata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ata newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ata|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ata[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ata findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtasTable extends Table
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

        $this->setTable('atas');
        $this->setDisplayField('resumogeral');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Agendas', [
            'foreignKey' => 'agenda_id'
        ]);

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);

        $this->belongsTo('Participantes', [
            'foreignKey' => 'relator_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'patrocinador_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'coordenadorreuniao_id'
        ]);
        $this->belongsTo('Conditions', [
            'foreignKey' => 'condition_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'pmoprojeto_id'
        ]);
        $this->belongsTo('Tipodocumentos', [
            'foreignKey' => 'tipodocumento_id'
        ]);
        $this->hasMany('Ataaprovadores', [
            'foreignKey' => 'ata_id'
        ]);
        $this->hasMany('Ataparticipantes', [
            'foreignKey' => 'ata_id'
        ]);
         $this->hasMany('Ataconsultores', [
            'foreignKey' => 'ata_id'
        ]);
        $this->hasMany('Atarevisaohistoricos', [
            'foreignKey' => 'ata_id'
        ]);
        $this->hasMany('Atarevisoes', [
            'foreignKey' => 'ata_id'
        ]);
        $this->hasMany('Atasdetalhes', [
            'foreignKey' => 'ata_id'
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
            ->date('dataemissao')
            ->allowEmptyDate('dataemissao');

        $validator
            ->date('datareuniao')
            ->allowEmptyDate('datareuniao');

        $validator
            ->scalar('resumogeral')
            ->maxLength('resumogeral', 255)
            ->allowEmptyString('resumogeral');

        $validator
            ->scalar('objetivo')
            ->maxLength('objetivo', 4294967295)
            ->allowEmptyString('objetivo');

        $validator
            ->dateTime('horarioreuniao')
            ->allowEmptyDateTime('horarioreuniao');

        $validator
            ->scalar('local')
            ->maxLength('local', 255)
            ->allowEmptyString('local');

        $validator
            ->scalar('versao')
            ->maxLength('versao', 10)
            ->allowEmptyString('versao');

        $validator
            ->dateTime('proximadatareuniao')
            ->allowEmptyDateTime('proximadatareuniao');

        $validator
            ->scalar('proximareuniaolocal')
            ->maxLength('proximareuniaolocal', 255)
            ->allowEmptyString('proximareuniaolocal');

        $validator
            ->dateTime('horainicio')
            ->allowEmptyDateTime('horainicio');

        $validator
            ->dateTime('horafim')
            ->allowEmptyDateTime('horafim');

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
        $rules->add($rules->existsIn(['agenda_id'], 'Agendas'));
        $rules->add($rules->existsIn(['relator_id'], 'Participantes'));
        $rules->add($rules->existsIn(['patrocinador_id'], 'Participantes'));
        $rules->add($rules->existsIn(['coordenadorreuniao_id'], 'Participantes'));
        $rules->add($rules->existsIn(['condition_id'], 'Conditions'));
        $rules->add($rules->existsIn(['pmoprojeto_id'], 'Participantes'));
        $rules->add($rules->existsIn(['tipodocumento_id'], 'Tipodocumentos'));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));
        return $rules;
    }
}
