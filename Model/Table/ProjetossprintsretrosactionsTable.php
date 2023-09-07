<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetossprintsretrosactions Model
 *
 * @property \App\Model\Table\ProjetossprintsretrositemsTable|\Cake\ORM\Association\BelongsTo $Projetossprintsretrositems
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\PillarsTable|\Cake\ORM\Association\BelongsTo $Pillars
 * @property \App\Model\Table\PillarsareasTable|\Cake\ORM\Association\BelongsTo $Pillarsareas
 * @property \App\Model\Table\PillarsresponsabilitiesTable|\Cake\ORM\Association\BelongsTo $Pillarsresponsabilities
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 *
 * @method \App\Model\Entity\Projetossprintsretrosaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetossprintsretrosaction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretrosaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretrosaction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsretrosaction saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsretrosaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretrosaction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretrosaction findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetossprintsretrosactionsTable extends Table
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

        $this->setTable('projetossprintsretrosactions');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetossprintsretrositems', [
            'foreignKey' => 'projetossprintsretrositem_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Pillars', [
            'foreignKey' => 'pillar_id'
        ]);
        $this->belongsTo('Pillarsareas', [
            'foreignKey' => 'pillarsarea_id'
        ]);
        $this->belongsTo('Pillarsresponsabilities', [
            'foreignKey' => 'pillarsresponsabilitie_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
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
            ->scalar('propostopor')
            ->maxLength('propostopor', 255)
            ->allowEmptyString('propostopor');

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
        $rules->add($rules->existsIn(['projetossprintsretrositem_id'], 'Projetossprintsretrositems'));
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['pillar_id'], 'Pillars'));
        $rules->add($rules->existsIn(['pillarsarea_id'], 'Pillarsareas'));
        $rules->add($rules->existsIn(['pillarsresponsabilitie_id'], 'Pillarsresponsabilities'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));

        return $rules;
    }
}
