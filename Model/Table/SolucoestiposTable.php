<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Solucoestipos Model
 *
 * @property \App\Model\Table\SolucoesaplicadasTable|\Cake\ORM\Association\HasMany $Solucoesaplicadas
 *
 * @method \App\Model\Entity\Solucoestipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Solucoestipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Solucoestipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Solucoestipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solucoestipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Solucoestipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Solucoestipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Solucoestipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SolucoestiposTable extends Table
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

        $this->setTable('solucoestipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Solucoesaplicadas', [
            'foreignKey' => 'solucoestipo_id'
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
