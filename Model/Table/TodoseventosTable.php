<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Todoseventos Model
 *
 * @property \App\Model\Table\TodosTable|\Cake\ORM\Association\BelongsTo $Todos
 * @property \App\Model\Table\TecnicosTable|\Cake\ORM\Association\BelongsTo $Tecnicos
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 *
 * @method \App\Model\Entity\Todosevento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Todosevento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Todosevento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Todosevento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Todosevento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Todosevento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Todosevento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Todosevento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TodoseventosTable extends Table
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

        $this->setTable('todoseventos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Todos', [
            'foreignKey' => 'todo_id'
        ]);
      
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
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
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->dateTime('horainicial')
            ->allowEmptyDateTime('horainicial');

        $validator
            ->dateTime('horafinal')
            ->allowEmptyDateTime('horafinal');

        $validator
            ->scalar('ticketid')
            ->maxLength('ticketid', 15)
            ->allowEmptyString('ticketid');

        $validator
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->scalar('hrinicial')
            ->maxLength('hrinicial', 5)
            ->allowEmptyString('hrinicial');
        
        $validator
            ->scalar('hrfinal')
            ->maxLength('hrfinal', 5)
            ->allowEmptyString('hrfinal');

        $validator
            ->scalar('numerochamado')
            ->maxLength('numerochamado', 45)
            ->allowEmptyString('numerochamado');

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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));

        return $rules;
    }
}
