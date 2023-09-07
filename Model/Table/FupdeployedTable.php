<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fupdeployed Model
 *
 * @property \App\Model\Table\FupagendasTable|\Cake\ORM\Association\BelongsTo $Fupagendas
 *
 * @method \App\Model\Entity\Fupdeployed get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fupdeployed newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fupdeployed[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fupdeployed|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupdeployed saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupdeployed patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fupdeployed[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fupdeployed findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FupdeployedTable extends Table
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

        $this->setTable('fupdeployed');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Fupagendas', [
            'foreignKey' => 'fupagenda_id'
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
            ->scalar('departamento')
            ->maxLength('departamento', 45)
            ->allowEmptyString('departamento');

        $validator
            ->scalar('kanban')
            ->maxLength('kanban', 45)
            ->allowEmptyString('kanban');

        $validator
            ->scalar('esupportid')
            ->maxLength('esupportid', 10)
            ->allowEmptyString('esupportid');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->allowEmptyString('titulo');

        $validator
            ->integer('prio')
            ->allowEmptyString('prio');

        $validator
            ->scalar('requisitante')
            ->maxLength('requisitante', 80)
            ->allowEmptyString('requisitante');

        $validator
            ->scalar('statusdetalhado')
            ->maxLength('statusdetalhado', 255)
            ->allowEmptyString('statusdetalhado');

        $validator
            ->scalar('analista')
            ->maxLength('analista', 80)
            ->allowEmptyString('analista');

        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 255)
            ->allowEmptyString('comentario');

        $validator
            ->date('lastupdate')
            ->allowEmptyDate('lastupdate');

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
        $rules->add($rules->existsIn(['fupagenda_id'], 'Fupagendas'));

        return $rules;
    }
}
