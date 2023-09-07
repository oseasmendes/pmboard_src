<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasdocs Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\DocumentosTable|\Cake\ORM\Association\BelongsTo $Documentos
 *
 * @method \App\Model\Entity\Sistemasdoc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasdoc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasdoc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasdoc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasdoc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasdoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasdoc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasdoc findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasdocsTable extends Table
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

        $this->setTable('sistemasdocs');
        $this->setDisplayField('documentonome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Documentos', [
            'foreignKey' => 'documento_id'
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
            ->dateTime('criadoem')
            ->allowEmptyDateTime('criadoem');

        $validator
            ->dateTime('atualizadoem')
            ->allowEmptyDateTime('atualizadoem');

        $validator
            ->scalar('documentourl')
            ->maxLength('documentourl', 4294967295)
            ->allowEmptyString('documentourl');

        $validator
            ->scalar('documentonome')
            ->maxLength('documentonome', 255)
            ->allowEmptyString('documentonome');

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
        $rules->add($rules->existsIn(['documento_id'], 'Documentos'));

        return $rules;
    }
}
