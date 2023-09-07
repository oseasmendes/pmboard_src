<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entregasblockpointsfls Model
 *
 * @property \App\Model\Table\EntregasblockpointsTable|\Cake\ORM\Association\BelongsTo $Entregasblockpoints
 *
 * @method \App\Model\Entity\Entregasblockpointsfl get($primaryKey, $options = [])
 * @method \App\Model\Entity\Entregasblockpointsfl newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Entregasblockpointsfl[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Entregasblockpointsfl|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entregasblockpointsfl saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entregasblockpointsfl patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Entregasblockpointsfl[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Entregasblockpointsfl findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EntregasblockpointsflsTable extends Table
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

        $this->setTable('entregasblockpointsfls');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Entregasblockpoints', [
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
            ->date('dataemissao')
            ->allowEmptyDate('dataemissao');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('detalhes')
            ->maxLength('detalhes', 4294967295)
            ->allowEmptyString('detalhes');

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
        $rules->add($rules->existsIn(['entregasblockpoint_id'], 'Entregasblockpoints'));

        return $rules;
    }
}
