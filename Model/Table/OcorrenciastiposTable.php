<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ocorrenciastipos Model
 *
 * @property \App\Model\Table\OcorrenciasTable|\Cake\ORM\Association\HasMany $Ocorrencias
 *
 * @method \App\Model\Entity\Ocorrenciastipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ocorrenciastipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ocorrenciastipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrenciastipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ocorrenciastipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ocorrenciastipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrenciastipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrenciastipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OcorrenciastiposTable extends Table
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

        $this->setTable('ocorrenciastipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Ocorrencias', [
            'foreignKey' => 'ocorrenciastipo_id'
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
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        return $validator;
    }
}
