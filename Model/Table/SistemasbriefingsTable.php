<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasbriefings Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\SmcplansTable|\Cake\ORM\Association\BelongsTo $Smcplans
 *
 * @method \App\Model\Entity\Sistemasbriefing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasbriefing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasbriefing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasbriefing|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasbriefing saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasbriefing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasbriefing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasbriefing findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasbriefingsTable extends Table
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

        $this->setTable('sistemasbriefings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->belongsTo('Smcplans', [
            'foreignKey' => 'smcplan_id'
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
            ->dateTime('dataregistro')
            ->allowEmptyDateTime('dataregistro');

        $validator
            ->scalar('objetivo')
            ->maxLength('objetivo', 4294967295)
            ->allowEmptyString('objetivo');

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
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));
        $rules->add($rules->existsIn(['smcplan_id'], 'Smcplans'));

        return $rules;
    }
}
