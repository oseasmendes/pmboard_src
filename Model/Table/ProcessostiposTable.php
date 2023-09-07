<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Processostipos Model
 *
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\HasMany $Processos
 *
 * @method \App\Model\Entity\Processostipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Processostipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Processostipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Processostipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Processostipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Processostipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Processostipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Processostipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProcessostiposTable extends Table
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

        $this->setTable('processostipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Processos', [
            'foreignKey' => 'processostipo_id'
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
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        return $validator;
    }
}
