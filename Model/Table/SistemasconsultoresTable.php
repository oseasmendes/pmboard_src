<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasconsultores Model
 *
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\KnowhowsTable|\Cake\ORM\Association\BelongsTo $Knowhows
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 *
 * @method \App\Model\Entity\Sistemasconsultore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasconsultore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasconsultore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasconsultore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasconsultore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasconsultore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasconsultore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasconsultore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasconsultoresTable extends Table
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

        $this->setTable('sistemasconsultores');
        $this->setDisplayField('principalfuncao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Knowhows', [
            'foreignKey' => 'knowhow_id'
        ]);
        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
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
            ->scalar('principalfuncao')
            ->maxLength('principalfuncao', 45)
            ->allowEmptyString('principalfuncao');

        $validator
            ->scalar('atividadeexecutada')
            ->maxLength('atividadeexecutada', 255)
            ->allowEmptyString('atividadeexecutada');

        $validator
            ->dateTime('dataatividade')
            ->allowEmptyDateTime('dataatividade');

        $validator
            ->scalar('consultoria')
            ->maxLength('consultoria', 45)
            ->allowEmptyString('consultoria');

        $validator
            ->decimal('alocacao')
            ->allowEmptyString('alocacao');

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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['knowhow_id'], 'Knowhows'));
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));

        return $rules;
    }
}
