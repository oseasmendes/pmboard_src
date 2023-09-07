<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasqueues Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\HasMany $Sistemas
 *
 * @method \App\Model\Entity\Sistemasqueue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasqueue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasqueue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasqueue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasqueue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasqueue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasqueue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasqueue findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasqueuesTable extends Table
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

        $this->setTable('sistemasqueues');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sistemas', [
            'foreignKey' => 'sistemasqueue_id'
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
            ->maxLength('descricao', 80)
            ->allowEmptyString('descricao');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->boolean('selectedflag')
            ->allowEmptyString('selectedflag');

        return $validator;
    }
}
