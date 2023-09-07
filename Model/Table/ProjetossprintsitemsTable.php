<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetossprintsitems Model
 *
 * @property \App\Model\Table\ProjetossprintsTable|\Cake\ORM\Association\BelongsTo $Projetossprints
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\BelongsTo $Paretos
 *
 * @method \App\Model\Entity\Projetossprintsitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetossprintsitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetossprintsitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsitem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsitem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsitem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetossprintsitemsTable extends Table
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

        $this->setTable('projetossprintsitems');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetossprints', [
            'foreignKey' => 'projetossprint_id'
        ]);
        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Paretos', [
            'foreignKey' => 'pareto_id'
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
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('taskmain')
            ->maxLength('taskmain', 1)
            ->allowEmptyString('taskmain');

        $validator
            ->scalar('tasksub')
            ->maxLength('tasksub', 1)
            ->allowEmptyString('tasksub');

        $validator
            ->date('dataplanning')
            ->allowEmptyDate('dataplanning');

        $validator
            ->decimal('storyppoints')
            ->allowEmptyString('storyppoints');

        $validator
            ->decimal('storypointsrevised')
            ->allowEmptyString('storypointsrevised');

        $validator
            ->dateTime('datarevised')
            ->allowEmptyDateTime('datarevised');

        $validator
            ->date('canceladoem')
            ->allowEmptyDate('canceladoem');
        
        $validator
            ->boolean('cancelado')
            ->allowEmptyString('cancelado');

        $validator
            ->scalar('canceladomotivo')
            ->maxLength('canceladomotivo', 255)
            ->allowEmptyString('canceladomotivo');

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
        $rules->add($rules->existsIn(['projetossprint_id'], 'Projetossprints'));
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['pareto_id'], 'Paretos'));

        return $rules;
    }
}
