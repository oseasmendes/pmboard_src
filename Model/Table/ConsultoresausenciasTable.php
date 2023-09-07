<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultoresausencias Model
 *
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ConsultoresausenciastiposTable|\Cake\ORM\Association\BelongsTo $Consultoresausenciastipos
 *
 * @method \App\Model\Entity\Consultoresausencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultoresausencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consultoresausencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresausencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoresausencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoresausencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresausencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresausencia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConsultoresausenciasTable extends Table
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

        $this->setTable('consultoresausencias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Consultoresausenciastipos', [
            'foreignKey' => 'consultoresausenciastipo_id'
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
            ->scalar('comentario')
            ->maxLength('comentario', 100)
            ->allowEmptyString('comentario');

        $validator
            ->date('datainicio')
            ->allowEmptyDate('datainicio');

        $validator
            ->date('datafim')
            ->allowEmptyDate('datafim');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 4294967295)
            ->allowEmptyString('observacao');

        $validator
            ->integer('periodo')
            ->allowEmptyString('periodo');

        $validator
            ->date('informadoem')
            ->allowEmptyDate('informadoem');

        $validator
            ->date('planejamentode')
            ->allowEmptyDate('planejamentode');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');
        
        $validator
            ->scalar('knowledgehrstatus')
            ->maxLength('knowledgehrstatus', 15)
            ->allowEmptyString('knowledgehrstatus');

        $validator
            ->scalar('knowledgehrstatus')
            ->maxLength('knowledgehrstatus', 15)
            ->allowEmptyString('knowledgehrstatus');

        $validator
            ->scalar('knowledgeprojectstatus')
            ->maxLength('knowledgeprojectstatus', 15)
            ->allowEmptyString('knowledgeprojectstatus');

        $validator
            ->scalar('knowledgecoordstatus')
            ->maxLength('knowledgecoordstatus', 15)
            ->allowEmptyString('knowledgecoordstatus');

        $validator
            ->date('knowledgehrdata')
            ->allowEmptyDate('knowledgehrdata');

        $validator
            ->date('knowledgeprojectdata')
            ->allowEmptyDate('knowledgeprojectdata');

        $validator
            ->date('knowledgecoorddata')
            ->allowEmptyDate('knowledgecoorddata');


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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['consultoresausenciastipo_id'], 'Consultoresausenciastipos'));

        return $rules;
    }
}
