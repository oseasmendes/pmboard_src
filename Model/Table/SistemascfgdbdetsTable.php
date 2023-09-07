<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgdbdets Model
 *
 * @property \App\Model\Table\SistemascfgdbsTable|\Cake\ORM\Association\BelongsTo $Sistemascfgdbs
 *
 * @method \App\Model\Entity\Sistemascfgdbdet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgdbdet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgdbdet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgdbdet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgdbdet saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgdbdet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgdbdet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgdbdet findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgdbdetsTable extends Table
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

        $this->setTable('sistemascfgdbdets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemascfgdbs', [
            'foreignKey' => 'sistemascfgdb_id'
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
            ->dateTime('datainventario')
            ->allowEmptyDateTime('datainventario');

        $validator
            ->decimal('tamanho')
            ->allowEmptyString('tamanho');

        $validator
            ->decimal('qtetabelas')
            ->allowEmptyString('qtetabelas');

        $validator
            ->decimal('qtecolunas')
            ->allowEmptyString('qtecolunas');

        $validator
            ->decimal('qteregistros')
            ->allowEmptyString('qteregistros');

        $validator
            ->decimal('qtestoreprocedures')
            ->allowEmptyString('qtestoreprocedures');

        $validator
            ->decimal('qtetriggers')
            ->allowEmptyString('qtetriggers');

        $validator
            ->decimal('espacoemdisco')
            ->allowEmptyString('espacoemdisco');

        $validator
            ->scalar('responsavelinventario')
            ->maxLength('responsavelinventario', 255)
            ->allowEmptyString('responsavelinventario');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['sistemascfgdb_id'], 'Sistemascfgdbs'));

        return $rules;
    }
}
