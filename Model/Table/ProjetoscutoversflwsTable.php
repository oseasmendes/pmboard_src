<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetoscutoversflws Model
 *
 * @property \App\Model\Table\ProjetoscutoversTable|\Cake\ORM\Association\BelongsTo $Projetoscutovers
 *
 * @method \App\Model\Entity\Projetoscutoversflw get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetoscutoversflw newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetoscutoversflw[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetoscutoversflw|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetoscutoversflw saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetoscutoversflw patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetoscutoversflw[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetoscutoversflw findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetoscutoversflwsTable extends Table
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

        $this->setTable('projetoscutoversflws');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetoscutovers', [
            'foreignKey' => 'projetoscutover_id'
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
            ->scalar('responsavel')
            ->maxLength('responsavel', 45)
            ->allowEmptyString('responsavel');

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
        $rules->add($rules->existsIn(['projetoscutover_id'], 'Projetoscutovers'));

        return $rules;
    }
}
