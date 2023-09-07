<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasprocessos Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\BelongsTo $Processos
 *
 * @method \App\Model\Entity\Sistemasprocesso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasprocesso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasprocesso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasprocesso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasprocesso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasprocesso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasprocesso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasprocesso findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasprocessosTable extends Table
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

        $this->setTable('sistemasprocessos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Processos', [
            'foreignKey' => 'processo_id'
        ]);
        $this->hasMany('Sistemaproactions', [
            'foreignKey' => 'sistemasprocesso_id'
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
            ->maxLength('descricao', 150)
            ->allowEmptyString('descricao');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->date('descontinuadoem')
            ->allowEmptyDate('descontinuadoem');

        $validator
            ->scalar('descontinuadomotivo')
            ->maxLength('descontinuadomotivo', 250)
            ->allowEmptyString('descontinuadomotivo');

        $validator
            ->scalar('motivo')
            ->maxLength('motivo', 250)
            ->allowEmptyString('motivo');

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
        $rules->add($rules->existsIn(['processo_id'], 'Processos'));

        return $rules;
    }
}
