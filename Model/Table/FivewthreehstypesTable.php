<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fivewthreehstypes Model
 *
 * @property \App\Model\Table\FivewthreehsTable|\Cake\ORM\Association\HasMany $Fivewthreehs
 *
 * @method \App\Model\Entity\Fivewthreehstype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fivewthreehstype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fivewthreehstype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreehstype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fivewthreehstype saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fivewthreehstype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreehstype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreehstype findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FivewthreehstypesTable extends Table
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

        $this->setTable('fivewthreehstypes');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Fivewthreehs', [
            'foreignKey' => 'fivewthreehstype_id'
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

     public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['fivewthreehstype_id'], 'Fivewthreehs'));    

        return $rules;
    }
}
