<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutossprints Model
 *
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\SprinttiposTable|\Cake\ORM\Association\BelongsTo $Sprinttipos
 * @property \App\Model\Table\ProjetosprodutosentregassprintsTable|\Cake\ORM\Association\HasMany $Projetosprodutosentregassprints
 *
 * @method \App\Model\Entity\Projetosprodutossprint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutossprint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutossprint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutossprint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutossprint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutossprint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutossprint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutossprint findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutossprintsTable extends Table
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

        $this->setTable('projetosprodutossprints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Sprinttipos', [
            'foreignKey' => 'sprinttipo_id'
        ]);
        $this->hasMany('Projetosprodutosentregassprints', [
            'foreignKey' => 'projetosprodutossprint_id'
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
            ->date('datainicio')
            ->allowEmptyDate('datainicio');

        $validator
            ->date('datafim')
            ->allowEmptyDate('datafim');

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
        $rules->add($rules->existsIn(['projetosproduto_id'], 'Projetosprodutos'));
        $rules->add($rules->existsIn(['sprinttipo_id'], 'Sprinttipos'));

        return $rules;
    }
}
