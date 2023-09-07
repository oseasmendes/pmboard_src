<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregaschanges Model
 *
 * @property \App\Model\Table\ProjetosentregasreqsrevesTable|\Cake\ORM\Association\BelongsTo $Projetosentregasreqsreves
 * @property \App\Model\Table\MotivosTable|\Cake\ORM\Association\BelongsTo $Motivos
 *
 * @method \App\Model\Entity\Projetosentregaschange get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregaschange newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregaschange[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregaschange|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregaschange saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregaschange patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregaschange[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregaschange findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregaschangesTable extends Table
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

        $this->setTable('projetosentregaschanges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosentregasreqsrefs', [
            'foreignKey' => 'projetosentregasreqsref_id'
        ]);

        $this->belongsTo('Motivos', [
            'foreignKey' => 'motivo_id'
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
            ->maxLength('descricao', 254)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('motivacao')
            ->maxLength('motivacao', 4294967295)
            ->allowEmptyString('motivacao');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('requisitante')
            ->maxLength('requisitante', 45)
            ->allowEmptyString('requisitante');

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
        $rules->add($rules->existsIn(['projetosentregasreqsref_id'], 'Projetosentregasreqsrefs'));
        $rules->add($rules->existsIn(['motivo_id'], 'Motivos'));

        return $rules;
    }
}
