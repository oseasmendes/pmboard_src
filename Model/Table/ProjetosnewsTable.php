<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosnews Model
 *
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 *
 * @method \App\Model\Entity\Projetosnews get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosnews newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosnews[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosnews|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosnews saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosnews patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosnews[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosnews findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosnewsTable extends Table
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

        $this->setTable('projetosnews');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
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
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->integer('prio')
            ->allowEmptyString('prio');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->date('datalancto')
            ->allowEmptyDate('datalancto');

        $validator
            ->scalar('requisitante')
            ->maxLength('requisitante', 100)
            ->allowEmptyString('requisitante');

        $validator
            ->scalar('departamento')
            ->maxLength('departamento', 45)
            ->allowEmptyString('departamento');

        $validator
            ->scalar('sistema')
            ->maxLength('sistema', 45)
            ->allowEmptyString('sistema');

        $validator
            ->scalar('complexidade')
            ->maxLength('complexidade', 45)
            ->allowEmptyString('complexidade');

        $validator
            ->scalar('evento')
            ->maxLength('evento', 45)
            ->allowEmptyString('evento');

        $validator
            ->date('datacheckin')
            ->allowEmptyDate('datacheckin');

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
        $rules->add($rules->existsIn(['projeto_id'], 'Projetos'));

        return $rules;
    }
}
