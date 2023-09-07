<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Todosobservadores Model
 *
 * @property \App\Model\Table\TodosTable|\Cake\ORM\Association\BelongsTo $Todos
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 *
 * @method \App\Model\Entity\Todosobservadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Todosobservadore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Todosobservadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Todosobservadore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Todosobservadore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Todosobservadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Todosobservadore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Todosobservadore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TodosobservadoresTable extends Table
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

        $this->setTable('todosobservadores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Todos', [
            'foreignKey' => 'todo_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id'
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
            ->scalar('papel')
            ->maxLength('papel', 45)
            ->allowEmptyString('papel');

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
        $rules->add($rules->existsIn(['todo_id'], 'Todos'));
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));

        return $rules;
    }
}
