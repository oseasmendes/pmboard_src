<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregasopenpoints Model
 *
 * @property \App\Model\Table\ProjetosentregasreqsrevesTable|\Cake\ORM\Association\BelongsTo $Projetosentregasreqsreves
 * @property \App\Model\Table\MotivosTable|\Cake\ORM\Association\BelongsTo $Motivos
 *
 * @method \App\Model\Entity\Projetosentregasopenpoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregasopenpoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregasopenpoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasopenpoint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasopenpoint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasopenpoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasopenpoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasopenpoint findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregasopenpointsTable extends Table
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

        $this->setTable('projetosentregasopenpoints');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosentregasreqsrefs', [
            'foreignKey' => 'projetosentregasreqsref_id'
        ]);

        $this->belongsTo('Motivos', [
            'foreignKey' => 'motivo_id'
        ]);

        $this->hasMany('Projetosentregasopprespostas', [
            'foreignKey' => 'projetosentregasopenpoint_id'
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
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('detalhes')
            ->maxLength('detalhes', 4294967295)
            ->allowEmptyString('detalhes');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->boolean('planoacao')
            ->allowEmptyString('planoacao');
        
        
        $validator
            ->boolean('resolvido')
            ->allowEmptyString('resolvido');
        
        
        $validator
            ->date('resolvidoem')
            ->allowEmptyDate('resolvidoem');

        $validator
            ->scalar('planodeacaodescricao')
            ->maxLength('planodeacaodescricao', 255)
            ->allowEmptyString('planodeacaodescricao');

        
        $validator
            ->date('dataprevistaatendimento')
            ->allowEmptyDate('dataprevistaatendimento');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 255)
            ->allowEmptyString('responsavel');


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
         $rules->add($rules->existsIn(['projetosentregasreqsref_id'], 'Projetosentregasreqsrefs'));
        $rules->add($rules->existsIn(['motivo_id'], 'Motivos'));

        return $rules;
    }
}
