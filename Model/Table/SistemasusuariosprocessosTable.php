<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasusuariosprocessos Model
 *
 * @property \App\Model\Table\SistemasusuariosTable|\Cake\ORM\Association\BelongsTo $Sistemasusuarios
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\BelongsTo $Processos
 *
 * @method \App\Model\Entity\Sistemasusuariosprocesso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasusuariosprocesso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasusuariosprocesso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasusuariosprocesso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasusuariosprocesso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasusuariosprocesso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasusuariosprocesso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasusuariosprocesso findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasusuariosprocessosTable extends Table
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

        $this->setTable('sistemasusuariosprocessos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemasusuarios', [
            'foreignKey' => 'sistemasusuario_id'
        ]);
        $this->belongsTo('Processos', [
            'foreignKey' => 'processo_id'
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
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

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
        $rules->add($rules->existsIn(['sistemasusuario_id'], 'Sistemasusuarios'));
        $rules->add($rules->existsIn(['processo_id'], 'Processos'));

        return $rules;
    }
}
