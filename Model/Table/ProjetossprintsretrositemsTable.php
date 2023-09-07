<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetossprintsretrositems Model
 *
 * @property \App\Model\Table\ProjetossprintsretrosTable|\Cake\ORM\Association\BelongsTo $Projetossprintsretros
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\BelongsTo $Paretos
 * @property |\Cake\ORM\Association\HasMany $Projetossprintsretrosactions
 *
 * @method \App\Model\Entity\Projetossprintsretrositem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetossprintsretrositem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretrositem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretrositem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsretrositem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprintsretrositem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretrositem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprintsretrositem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetossprintsretrositemsTable extends Table
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

        $this->setTable('projetossprintsretrositems');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetossprintsretros', [
            'foreignKey' => 'projetossprintsretro_id'
        ]);
        $this->belongsTo('Paretos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetossprintsretrosactions', [
            'foreignKey' => 'projetossprintsretrositem_id'
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
            ->scalar('detalhes')
            ->maxLength('detalhes', 4294967295)
            ->allowEmptyString('detalhes');

        $validator
            ->scalar('geraplanoacao')
            ->maxLength('geraplanoacao', 1)
            ->allowEmptyString('geraplanoacao');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 255)
            ->allowEmptyString('observacao');

        $validator
            ->scalar('classificacao')
            ->maxLength('classificacao', 255)
            ->allowEmptyString('classificacao');

        $validator
            ->scalar('referenciaoriginal')
            ->maxLength('referenciaoriginal', 255)
            ->allowEmptyString('referenciaoriginal');

        $validator
            ->integer('numerocard')
            ->allowEmptyString('numerocard');

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
        $rules->add($rules->existsIn(['projetossprintsretro_id'], 'Projetossprintsretros'));
        $rules->add($rules->existsIn(['pareto_id'], 'Paretos'));

        return $rules;
    }
}
