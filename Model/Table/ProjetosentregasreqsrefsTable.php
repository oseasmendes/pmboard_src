<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregasreqsrefs Model
 *
 * @property \App\Model\Table\ProjetosentregasreqsTable|\Cake\ORM\Association\BelongsTo $Projetosentregasreqs
 * @property \App\Model\Table\RequisitostiposTable|\Cake\ORM\Association\BelongsTo $Requisitostipos
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ProjetosentregasreqsrefsimgsTable|\Cake\ORM\Association\HasMany $Projetosentregasreqsrefsimgs
 *
 * @method \App\Model\Entity\Projetosentregasreqsref get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsref newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsref[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsref|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsref saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsref patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsref[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsref findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregasreqsrefsTable extends Table
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

        $this->setTable('projetosentregasreqsrefs');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosentregasreqs', [
            'foreignKey' => 'projetosentregasreq_id'
        ]);
        $this->belongsTo('Requisitostipos', [
            'foreignKey' => 'requisitostipo_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Motivos', [
            'foreignKey' => 'motivo_id'
        ]);

        $this->hasMany('Projetosentregasreqsrefsimgs', [
            'foreignKey' => 'projetosentregasreqsref_id'
        ]);

        $this->hasMany('Projetosentregaschanges', [
            'foreignKey' => 'projetosentregasreqsref_id'
        ]);

        $this->hasMany('Projetosentregasopenpoints', [
            'foreignKey' => 'projetosentregasreqsref_id'
        ]);

        $this->hasMany('Projetosentregasreqsrefsents', [
            'foreignKey' => 'projetosentregasreqsref_id'
        ]);

        $this->hasMany('Projetosentregasreqsscripts', [
            'foreignKey' => 'projetosentregasreqsref_id'
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
            ->scalar('referencia')
            ->maxLength('referencia', 25)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 220)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('requisito')
            ->maxLength('requisito', 4294967295)
            ->allowEmptyString('requisito');

        $validator
            ->scalar('restricao')
            ->maxLength('restricao', 4294967295)
            ->allowEmptyString('restricao');

        $validator
            ->scalar('descricaorisco')
            ->maxLength('descricaorisco', 4294967295)
            ->allowEmptyString('descricaorisco');

        $validator
            ->scalar('prerequisito')
            ->maxLength('prerequisito', 4294967295)
            ->allowEmptyString('prerequisito');

        $validator
            ->integer('precedente')
            ->allowEmptyString('precedente');

        $validator
            ->boolean('risco')
            ->allowEmptyString('risco');

        $validator
            ->boolean('teste')
            ->allowEmptyString('teste');

        $validator
            ->boolean('cancelled')
            ->allowEmptyString('cancelled');
        
        $validator
            ->boolean('unplanned')
            ->allowEmptyString('unplanned');
        
        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');

        $validator
            ->integer('reqreferenceid')
            ->allowEmptyString('reqreferenceid');

        $validator
            ->boolean('outofscope')
            ->allowEmptyString('outofscope');

        $validator
            ->scalar('outofscopedescription')
            ->maxLength('outofscopedescription', 255)
            ->allowEmptyString('outofscopedescription');      

        $validator
            ->scalar('representatividade')
            ->maxLength('representatividade', 45)
            ->allowEmptyString('representatividade');

        $validator
            ->scalar('agrupamento')
            ->maxLength('agrupamento', 45)
            ->allowEmptyString('agrupamento');

        $validator
            ->scalar('pmg')
            ->maxLength('pmg', 1)
            ->allowEmptyString('pmg');




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
        $rules->add($rules->existsIn(['projetosentregasreq_id'], 'Projetosentregasreqs'));
        $rules->add($rules->existsIn(['requisitostipo_id'], 'Requisitostipos'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['motivo_id'], 'Motivos'));

        return $rules;
    }
}
