<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atadetalhedatas Model
 *
 * @property \App\Model\Table\AtadetalhesTable|\Cake\ORM\Association\BelongsTo $Atadetalhes
 *
 * @method \App\Model\Entity\Atadetalhedata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atadetalhedata newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atadetalhedata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atadetalhedata|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atadetalhedata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atadetalhedata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atadetalhedata[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atadetalhedata findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtadetalhedatasTable extends Table
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

        $this->setTable('atadetalhedatas');
        $this->setDisplayField('motivo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Atadetalhes', [
            'foreignKey' => 'atadetalhe_id'
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
            ->dateTime('dataprometida')
            ->allowEmptyDateTime('dataprometida');

        $validator
            ->dateTime('dataexecutada')
            ->allowEmptyDateTime('dataexecutada');

        $validator
            ->scalar('motivo')
            ->maxLength('motivo', 4294967295)
            ->allowEmptyString('motivo');

        $validator
            ->scalar('docanexo')
            ->maxLength('docanexo', 255)
            ->allowEmptyString('docanexo');

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
        $rules->add($rules->existsIn(['atadetalhe_id'], 'Atadetalhes'));

        return $rules;
    }
}
