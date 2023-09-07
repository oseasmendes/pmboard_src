<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atadetalhes Model
 *
 * @property \App\Model\Table\AtasTable|\Cake\ORM\Association\BelongsTo $Atas
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\BelongsTo $Processos
 * @property \App\Model\Table\EtapasTable|\Cake\ORM\Association\BelongsTo $Etapas
 * @property |\Cake\ORM\Association\BelongsTo $Atividades
 * @property |\Cake\ORM\Association\BelongsTo $Workbreakdowns
 * @property \App\Model\Table\KronusesTable|\Cake\ORM\Association\BelongsTo $Kronuses
 * @property \App\Model\Table\AtadetalhedatasTable|\Cake\ORM\Association\HasMany $Atadetalhedatas
 * @property \App\Model\Table\AtarevisaohistoricosTable|\Cake\ORM\Association\HasMany $Atarevisaohistoricos
 *
 * @method \App\Model\Entity\Atadetalhe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atadetalhe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atadetalhe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atadetalhe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atadetalhe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atadetalhe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atadetalhe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atadetalhe findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtadetalhesTable extends Table
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

        $this->setTable('atadetalhes');
        $this->setDisplayField('proposta');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Atas', [
            'foreignKey' => 'ata_id'
        ]);
        $this->belongsTo('Processos', [
            'foreignKey' => 'processo_id'
        ]);
        $this->belongsTo('Etapas', [
            'foreignKey' => 'etapa_id'
        ]);
        $this->belongsTo('Atividades', [
            'foreignKey' => 'atividade_id'
        ]);
        $this->belongsTo('Workbreakdowns', [
            'foreignKey' => 'workbreakdown_id'
        ]);
        $this->belongsTo('Kronus', [
            'foreignKey' => 'kronus_id'
        ]);
        $this->hasMany('Atadetalhedatas', [
            'foreignKey' => 'atadetalhe_id'
        ]);
        $this->hasMany('Atarevisaohistoricos', [
            'foreignKey' => 'atadetalhe_id'
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
            ->scalar('proposta')
            ->maxLength('proposta', 4294967295)
            ->allowEmptyString('proposta');

        $validator
            ->integer('responsavel')
            ->allowEmptyString('responsavel');

        $validator
            ->dateTime('dataprevista')
            ->allowEmptyDateTime('dataprevista');

        $validator
            ->scalar('statusacao')
            ->maxLength('statusacao', 255)
            ->allowEmptyString('statusacao');

        $validator
            ->dateTime('dataexecutada')
            ->allowEmptyDateTime('dataexecutada');

        $validator
            ->integer('atadetallheordem')
            ->allowEmptyString('atadetallheordem');

        $validator
            ->dateTime('horaexecutada')
            ->allowEmptyDateTime('horaexecutada');

        $validator
            ->dateTime('horainicio')
            ->allowEmptyDateTime('horainicio');

        $validator
            ->dateTime('horafim')
            ->allowEmptyDateTime('horafim');

        $validator
            ->scalar('resumo_bullet')
            ->maxLength('resumo_bullet', 255)
            ->allowEmptyString('resumo_bullet');

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
        $rules->add($rules->existsIn(['processo_id'], 'Processos'));
        $rules->add($rules->existsIn(['etapa_id'], 'Etapas'));
        $rules->add($rules->existsIn(['atividade_id'], 'Atividades'));
        $rules->add($rules->existsIn(['workbreakdown_id'], 'Workbreakdowns'));
        $rules->add($rules->existsIn(['kronus_id'], 'Kronus'));

        return $rules;
    }
}
