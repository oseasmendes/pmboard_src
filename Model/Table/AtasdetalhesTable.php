<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atasdetalhes Model
 *
 * @property \App\Model\Table\AtasTable|\Cake\ORM\Association\BelongsTo $Atas
 * @property |\Cake\ORM\Association\BelongsTo $Responsavels
 * @property \App\Model\Table\EtapasTable|\Cake\ORM\Association\BelongsTo $Etapas
 * @property \App\Model\Table\AtividadesTable|\Cake\ORM\Association\BelongsTo $Atividades
 * @property \App\Model\Table\FivewthreehsTable|\Cake\ORM\Association\BelongsTo $Fivewthreehs
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\BelongsTo $Processos
 *
 * @method \App\Model\Entity\Atasdetalhe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atasdetalhe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atasdetalhe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atasdetalhe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atasdetalhe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atasdetalhe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atasdetalhe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atasdetalhe findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtasdetalhesTable extends Table
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

        $this->setTable('atasdetalhes');
        $this->setDisplayField('resumo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Atas', [
            'foreignKey' => 'ata_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'responsavel_id'
        ]);
        $this->belongsTo('Etapas', [
            'foreignKey' => 'etapa_id'
        ]);
        $this->belongsTo('Atividades', [
            'foreignKey' => 'atividade_id'
        ]);
        $this->belongsTo('Fivewthreehs', [
            'foreignKey' => 'fivewthreeh_id'
        ]);
        $this->belongsTo('Processos', [
            'foreignKey' => 'processo_id'
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
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->scalar('detalhamento')
            ->maxLength('detalhamento', 4294967295)
            ->allowEmptyString('detalhamento');

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
        $rules->add($rules->existsIn(['responsavel_id'], 'Participantes'));
        $rules->add($rules->existsIn(['etapa_id'], 'Etapas'));
        $rules->add($rules->existsIn(['atividade_id'], 'Atividades'));
        $rules->add($rules->existsIn(['fivewthreeh_id'], 'Fivewthreehs'));
        $rules->add($rules->existsIn(['processo_id'], 'Processos'));

        return $rules;
    }
}
