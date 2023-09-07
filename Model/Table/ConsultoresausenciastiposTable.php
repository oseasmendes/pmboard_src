<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultoresausenciastipos Model
 *
 * @property \App\Model\Table\ConsultoresausenciasTable|\Cake\ORM\Association\HasMany $Consultoresausencias
 *
 * @method \App\Model\Entity\Consultoresausenciastipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultoresausenciastipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consultoresausenciastipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresausenciastipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoresausenciastipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoresausenciastipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresausenciastipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresausenciastipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConsultoresausenciastiposTable extends Table
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

        $this->setTable('consultoresausenciastipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Consultoresausencias', [
            'foreignKey' => 'consultoresausenciastipo_id'
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
            ->maxLength('descricao', 100)
            ->allowEmptyString('descricao');

        return $validator;
    }
}
