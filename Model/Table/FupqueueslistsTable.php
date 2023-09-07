<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fupqueueslists Model
 *
 * @property \App\Model\Table\FupqueuesTable|\Cake\ORM\Association\BelongsTo $Fupqueues
 *
 * @method \App\Model\Entity\Fupqueueslist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fupqueueslist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fupqueueslist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueueslist|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupqueueslist saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupqueueslist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueueslist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueueslist findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FupqueueslistsTable extends Table
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

        $this->setTable('fupqueueslists');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Fupqueues', [
            'foreignKey' => 'fupqueue_id'
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
            ->scalar('lista')
            ->maxLength('lista', 80)
            ->allowEmptyString('lista');

        $validator
            ->scalar('emaillist')
            ->maxLength('emaillist', 4294967295)
            ->allowEmptyString('emaillist');

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
        $rules->add($rules->existsIn(['fupqueue_id'], 'Fupqueues'));

        return $rules;
    }
}
