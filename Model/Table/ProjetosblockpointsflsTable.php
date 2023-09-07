<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosblockpointsfls Model
 *
 * @property \App\Model\Table\ProjetosblockpointsTable|\Cake\ORM\Association\BelongsTo $Projetosblockpoints
 *
 * @method \App\Model\Entity\Projetosblockpointsfl get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosblockpointsfl newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosblockpointsfl[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosblockpointsfl|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosblockpointsfl saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosblockpointsfl patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosblockpointsfl[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosblockpointsfl findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosblockpointsflsTable extends Table
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

        $this->setTable('projetosblockpointsfls');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosblockpoints', [
            'foreignKey' => 'projetosblockpoint_id'
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
        $rules->add($rules->existsIn(['projetosblockpoint_id'], 'Projetosblockpoints'));

        return $rules;
    }
}
