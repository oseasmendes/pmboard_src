<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jiraetlversions Model
 *
 * @property \App\Model\Table\ProjetossprintsTable|\Cake\ORM\Association\BelongsTo $Projetossprints
 *
 * @method \App\Model\Entity\Jiraetlversion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jiraetlversion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jiraetlversion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jiraetlversion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jiraetlversion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jiraetlversion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jiraetlversion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jiraetlversion findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JiraetlversionsTable extends Table
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

        $this->setTable('jiraetlversions');
        $this->setDisplayField('versao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetossprints', [
            'foreignKey' => 'projetossprint_id'
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
            ->scalar('versao')
            ->maxLength('versao', 255)
            ->allowEmptyString('versao');

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

        return $rules;
    }
}
