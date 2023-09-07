<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemashistoricos Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 *
 * @method \App\Model\Entity\Sistemashistorico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemashistorico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemashistorico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemashistorico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemashistorico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemashistorico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemashistorico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemashistorico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemashistoricosTable extends Table
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

        $this->setTable('sistemashistoricos');
        $this->setDisplayField('resumo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->dateTime('dataregistro')
            ->allowEmptyDateTime('dataregistro');

        $validator
            ->dateTime('dataimplantacao')
            ->allowEmptyDateTime('dataimplantacao');

        $validator
            ->dateTime('dataultimaatualizacao')
            ->allowEmptyDateTime('dataultimaatualizacao');

        $validator
            ->scalar('versaoatual')
            ->maxLength('versaoatual', 45)
            ->allowEmptyString('versaoatual');

        $validator
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->scalar('motivoultimaalteracao')
            ->maxLength('motivoultimaalteracao', 4294967295)
            ->allowEmptyString('motivoultimaalteracao');

        $validator
            ->scalar('versaopathatual')
            ->maxLength('versaopathatual', 45)
            ->allowEmptyString('versaopathatual');

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

        return $rules;
    }
}
