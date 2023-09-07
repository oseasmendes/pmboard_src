<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kronus Model
 *
 * @property \App\Model\Table\KronusplansTable|\Cake\ORM\Association\BelongsTo $Kronusplans
 * @property \App\Model\Table\FlagsTable|\Cake\ORM\Association\BelongsTo $Flags
 * @property \App\Model\Table\FasesTable|\Cake\ORM\Association\BelongsTo $Fases
 *
 * @method \App\Model\Entity\Kronus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kronus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kronus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kronus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kronus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kronus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kronus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kronus findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KronusTable extends Table
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

        $this->setTable('kronus');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Kronusplans', [
            'foreignKey' => 'kronusplan_id'
        ]);
        $this->belongsTo('Flags', [
            'foreignKey' => 'flag_id'
        ]);
        $this->belongsTo('Fases', [
            'foreignKey' => 'fase_id'
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
            ->scalar('unidade')
            ->maxLength('unidade', 45)
            ->allowEmptyString('unidade');

        $validator
            ->integer('seq')
            ->allowEmptyString('seq');

        $validator
            ->scalar('kickoff')
            ->maxLength('kickoff', 45)
            ->allowEmptyString('kickoff');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 45)
            ->allowEmptyString('categoria');

        $validator
            ->scalar('ordem')
            ->maxLength('ordem', 45)
            ->allowEmptyString('ordem');

        $validator
            ->scalar('atividade')
            ->maxLength('atividade', 255)
            ->allowEmptyString('atividade');

        $validator
            ->scalar('duracao')
            ->maxLength('duracao', 45)
            ->allowEmptyString('duracao');

        $validator
            ->scalar('inicio')
            ->maxLength('inicio', 45)
            ->allowEmptyString('inicio');

        $validator
            ->scalar('fim')
            ->maxLength('fim', 45)
            ->allowEmptyString('fim');

        $validator
            ->scalar('predecessora')
            ->maxLength('predecessora', 45)
            ->allowEmptyString('predecessora');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 80)
            ->allowEmptyString('responsavel');

        $validator
            ->scalar('milestone')
            ->maxLength('milestone', 1)
            ->allowEmptyString('milestone');

        $validator
            ->scalar('comentarios')
            ->maxLength('comentarios', 4294967295)
            ->allowEmptyString('comentarios');

        $validator
            ->scalar('fasenome')
            ->maxLength('fasenome', 45)
            ->allowEmptyString('fasenome');

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
        $rules->add($rules->existsIn(['kronusplan_id'], 'Kronusplans'));
        $rules->add($rules->existsIn(['flag_id'], 'Flags'));
        $rules->add($rules->existsIn(['fase_id'], 'Fases'));

        return $rules;
    }
}
