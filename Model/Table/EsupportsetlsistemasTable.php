<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Esupportsetlsistemas Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\SistemasmodulosTable|\Cake\ORM\Association\BelongsTo $Sistemasmodulos
 *
 * @method \App\Model\Entity\Esupportsetlsistema get($primaryKey, $options = [])
 * @method \App\Model\Entity\Esupportsetlsistema newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Esupportsetlsistema[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Esupportsetlsistema|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Esupportsetlsistema saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Esupportsetlsistema patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Esupportsetlsistema[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Esupportsetlsistema findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EsupportsetlsistemasTable extends Table
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

        $this->setTable('esupportsetlsistemas');
        $this->setDisplayField('id');
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
            ->scalar('canal')
            ->maxLength('canal', 45)
            ->allowEmptyString('canal');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 250)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 200)
            ->allowEmptyString('referencia');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

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
