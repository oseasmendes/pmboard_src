<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendatipos Model
 *
 * @property \App\Model\Table\AgendasTable|\Cake\ORM\Association\HasMany $Agendas
 *
 * @method \App\Model\Entity\Agendatipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agendatipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agendatipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agendatipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agendatipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agendatipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agendatipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agendatipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgendatiposTable extends Table
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

        $this->setTable('agendatipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Agendas', [
            'foreignKey' => 'agendatipo_id'
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
            ->boolean('notificacao')
            ->allowEmptyString('notificacao');

        $validator
            ->boolean('tecnica')
            ->allowEmptyString('tecnica');

        return $validator;
    }
}
