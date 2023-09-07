<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Requisitostipos Model
 *
 * @property \App\Model\Table\ProjetosentregasreqsrefsTable|\Cake\ORM\Association\HasMany $Projetosentregasreqsrefs
 *
 * @method \App\Model\Entity\Requisitostipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Requisitostipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Requisitostipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Requisitostipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requisitostipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Requisitostipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Requisitostipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Requisitostipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RequisitostiposTable extends Table
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

        $this->setTable('requisitostipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetosentregasreqsrefs', [
            'foreignKey' => 'requisitostipo_id'
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
