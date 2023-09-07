<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Periodotipos Model
 *
 * @property \App\Model\Table\PropostasalocsTable|\Cake\ORM\Association\HasMany $Propostasalocs
 *
 * @method \App\Model\Entity\Periodotipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Periodotipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Periodotipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Periodotipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Periodotipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Periodotipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Periodotipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Periodotipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PeriodotiposTable extends Table
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

        $this->setTable('periodotipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Propostasalocs', [
            'foreignKey' => 'periodotipo_id'
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
            ->integer('dias')
            ->allowEmptyString('dias');

        return $validator;
    }
}
