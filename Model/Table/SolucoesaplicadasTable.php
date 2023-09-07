<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solucoesaplicadas Model
 *
 * @property \App\Model\Table\SolucoestiposTable|\Cake\ORM\Association\BelongsTo $Solucoestipos
 * @property \App\Model\Table\ProjetosentregasencerramentosTable|\Cake\ORM\Association\HasMany $Projetosentregasencerramentos
 *
 * @method \App\Model\Entity\Solucoesaplicada get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solucoesaplicada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Solucoesaplicada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solucoesaplicada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solucoesaplicada saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solucoesaplicada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solucoesaplicada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solucoesaplicada findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SolucoesaplicadasTable extends Table
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

        $this->setTable('solucoesaplicadas');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Solucoestipos', [
            'foreignKey' => 'solucoestipo_id'
        ]);
        $this->hasMany('Projetosentregasencerramentos', [
            'foreignKey' => 'solucoesaplicada_id'
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
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('detalhestecnico')
            ->maxLength('detalhestecnico', 4294967295)
            ->allowEmptyString('detalhestecnico');

        $validator
            ->integer('prio')
            ->allowEmptyString('prio');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

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
        $rules->add($rules->existsIn(['solucoestipo_id'], 'Solucoestipos'));

        return $rules;
    }
}
