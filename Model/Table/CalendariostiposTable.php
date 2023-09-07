<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calendariostipos Model
 *
 * @property \App\Model\Table\CalendariosplanosTable|\Cake\ORM\Association\HasMany $Calendariosplanos
 *
 * @method \App\Model\Entity\Calendariostipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calendariostipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calendariostipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calendariostipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendariostipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendariostipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calendariostipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calendariostipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CalendariostiposTable extends Table
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

        $this->setTable('calendariostipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Calendariosplanos', [
            'foreignKey' => 'calendariostipo_id'
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
            ->boolean('planosimulacao')
            ->allowEmptyString('planosimulacao');

        return $validator;
    }
}
