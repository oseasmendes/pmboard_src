<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paretosmestres Model
 *
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\HasMany $Paretos
 *
 * @method \App\Model\Entity\Paretosmestre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paretosmestre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paretosmestre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paretosmestre|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paretosmestre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paretosmestre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paretosmestre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paretosmestre findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParetosmestresTable extends Table
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

        $this->setTable('paretosmestres');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Paretos', [
            'foreignKey' => 'paretosmestre_id'
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

        return $validator;
    }
}
