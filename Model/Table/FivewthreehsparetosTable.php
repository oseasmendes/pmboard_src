<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fivewthreehsparetos Model
 *
 * @property \App\Model\Table\FivewthreehsTable|\Cake\ORM\Association\BelongsTo $Fivewthreehs
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\BelongsTo $Paretos
 *
 * @method \App\Model\Entity\Fivewthreehspareto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fivewthreehspareto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fivewthreehspareto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreehspareto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fivewthreehspareto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fivewthreehspareto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreehspareto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreehspareto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FivewthreehsparetosTable extends Table
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

        $this->setTable('fivewthreehsparetos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Fivewthreehs', [
            'foreignKey' => 'fivewthreeh_id'
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

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
        $rules->add($rules->existsIn(['fivewthreeh_id'], 'Fivewthreehs'));
        $rules->add($rules->existsIn(['pareto_id'], 'Paretos'));

        return $rules;
    }
}
