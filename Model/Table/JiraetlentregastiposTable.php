<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jiraetlentregastipos Model
 *
 * @property \App\Model\Table\EntregastiposTable|\Cake\ORM\Association\BelongsTo $Entregastipos
 *
 * @method \App\Model\Entity\Jiraetlentregastipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jiraetlentregastipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jiraetlentregastipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jiraetlentregastipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jiraetlentregastipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jiraetlentregastipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jiraetlentregastipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jiraetlentregastipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JiraetlentregastiposTable extends Table
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

        $this->setTable('jiraetlentregastipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->scalar('Descricao')
            ->maxLength('Descricao', 100)
            ->allowEmptyString('Descricao');

        $validator
            ->scalar('JiraIssueType')
            ->maxLength('JiraIssueType', 100)
            ->allowEmptyString('JiraIssueType');

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
        $rules->add($rules->existsIn(['entregastipo_id'], 'Entregastipos'));

        return $rules;
    }
}
