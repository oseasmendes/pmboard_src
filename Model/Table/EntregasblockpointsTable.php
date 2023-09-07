<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entregasblockpoints Model
 *
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\EntregasblockpointsflsTable|\Cake\ORM\Association\HasMany $Entregasblockpointsfls
 *
 * @method \App\Model\Entity\Entregasblockpoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Entregasblockpoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Entregasblockpoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Entregasblockpoint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entregasblockpoint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entregasblockpoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Entregasblockpoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Entregasblockpoint findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EntregasblockpointsTable extends Table
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

        $this->setTable('entregasblockpoints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->hasMany('Entregasblockpointsfls', [
            'foreignKey' => 'entregasblockpoint_id'
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
            ->scalar('responsavel')
            ->maxLength('responsavel', 45)
            ->allowEmptyString('responsavel');

        $validator
            ->date('resolvidoem')
            ->allowEmptyDate('resolvidoem');

        $validator
            ->boolean('planoacao')
            ->allowEmptyString('planoacao');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->boolean('risco')
            ->allowEmptyString('risco');

        $validator
            ->integer('flag')
            ->allowEmptyString('flag');

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
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));

        return $rules;
    }
}
