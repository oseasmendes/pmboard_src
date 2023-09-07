<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgtables Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\SistemasmodulosTable|\Cake\ORM\Association\BelongsTo $Sistemasmodulos
 *
 * @method \App\Model\Entity\Sistemascfgtable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgtable newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgtable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgtable|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgtable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgtable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgtable[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgtable findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgtablesTable extends Table
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

        $this->setTable('sistemascfgtables');
        $this->setDisplayField('tabelanome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Sistemasmodulos', [
            'foreignKey' => 'sistemasmodulo_id'
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
            ->scalar('tabelanome')
            ->maxLength('tabelanome', 100)
            ->allowEmptyString('tabelanome');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('detalhe')
            ->maxLength('detalhe', 4294967295)
            ->allowEmptyString('detalhe');

        $validator
            ->scalar('versao')
            ->maxLength('versao', 45)
            ->allowEmptyString('versao');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->scalar('chaveprimaria')
            ->maxLength('chaveprimaria', 45)
            ->allowEmptyString('chaveprimaria');

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
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));
        $rules->add($rules->existsIn(['sistemasmodulo_id'], 'Sistemasmodulos'));

        return $rules;
    }
}
