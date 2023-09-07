<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregasparetos Model
 *
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\BelongsTo $Paretos
 * @property \App\Model\Table\MotivosTable|\Cake\ORM\Association\BelongsTo $Motivos
 * @property \App\Model\Table\ResponsabilidadesTable|\Cake\ORM\Association\BelongsTo $Responsabilidades
 *
 * @method \App\Model\Entity\Projetosentregaspareto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregaspareto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregaspareto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregaspareto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregaspareto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregaspareto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregaspareto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregaspareto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregasparetosTable extends Table
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

        $this->setTable('projetosentregasparetos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
        $this->belongsTo('Paretos', [
            'foreignKey' => 'pareto_id'
        ]);

        $this->belongsTo('Motivos', [
            'foreignKey' => 'motivo_id'
        ]);
        $this->belongsTo('Responsabilidades', [
            'foreignKey' => 'responsabilidade_id'
        ]);

        $this->belongsTo('Entregastipos', [
            'foreignKey' => 'entregastipo_id'
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
            ->scalar('canal')
            ->maxLength('canal', 45)
            ->allowEmptyString('canal');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');
        
        $validator
            ->datetime('dataorigem')
            ->allowEmptyDatetime('dataorigem');
        

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
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));
        $rules->add($rules->existsIn(['pareto_id'], 'Paretos'));
        $rules->add($rules->existsIn(['motivo_id'], 'Motivos'));
        $rules->add($rules->existsIn(['responsabilidade_id'], 'Responsabilidades'));
        $rules->add($rules->existsIn(['entregastipo_id'], 'Entregastipos'));

        return $rules;
    }
}
