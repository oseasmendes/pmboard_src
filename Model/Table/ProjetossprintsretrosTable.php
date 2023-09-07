<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetossprintsretros Model
 *
 * @property \App\Model\Table\ProjetossprintsTable|\Cake\ORM\Association\BelongsTo $Projetossprints
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\BelongsTo $Paretos
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ProjetossprintsretrosactionsTable|\Cake\ORM\Association\HasMany $Projetossprintsretrosactions
 * @property \App\Model\Table\ProjetossprintsretrositemsTable|\Cake\ORM\Association\HasMany $Projetossprintsretrositems
 *
 * @method \App\Model\Entity\Projetossprintsretro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetossprintsretro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsretro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsretro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetossprintsretrosTable extends Table
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

        $this->setTable('projetossprintsretros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetossprints', [
            'foreignKey' => 'projetossprint_id'
        ]);
        $this->belongsTo('Paretos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
     
        $this->hasMany('Projetossprintsretrositems', [
            'foreignKey' => 'projetossprintsretro_id'
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
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 255)
            ->allowEmptyString('observacao');

        $validator
            ->scalar('referenciaboard')
            ->maxLength('referenciaboard', 255)
            ->allowEmptyString('referenciaboard');

        $validator
            ->date('dataretro')
            ->allowEmptyDate('dataretro');

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
        $rules->add($rules->existsIn(['projetossprint_id'], 'Projetossprints'));
        $rules->add($rules->existsIn(['pareto_id'], 'Paretos'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));

        return $rules;
    }
}
