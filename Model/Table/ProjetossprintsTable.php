<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetossprints Model
 *
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\SprinttiposTable|\Cake\ORM\Association\BelongsTo $Sprinttipos
 * @property \App\Model\Table\JiraetlversionsTable|\Cake\ORM\Association\HasMany $Jiraetlversions
 * @property \App\Model\Table\ProjetossprintsforecastsTable|\Cake\ORM\Association\HasMany $Projetossprintsforecasts
 * @property \App\Model\Table\ProjetossprintsitemsTable|\Cake\ORM\Association\HasMany $Projetossprintsitems
 * @property \App\Model\Table\ProjetossprintsrealizadosTable|\Cake\ORM\Association\HasMany $Projetossprintsrealizados
 *
 * @method \App\Model\Entity\Projetossprint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetossprint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetossprint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetossprint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetossprint findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetossprintsTable extends Table
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

        $this->setTable('projetossprints');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Sprinttipos', [
            'foreignKey' => 'sprinttipo_id'
        ]);
        $this->hasMany('Jiraetlversions', [
            'foreignKey' => 'projetossprint_id'
        ]);
        $this->hasMany('Projetossprintsforecasts', [
            'foreignKey' => 'projetossprint_id'
        ]);
        $this->hasMany('Projetossprintsitems', [
            'foreignKey' => 'projetossprint_id'
        ]);
        $this->hasMany('Projetossprintsrealizados', [
            'foreignKey' => 'projetossprint_id'
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

        $validator
            ->date('data')
            ->allowEmptyDate('data');

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
        $rules->add($rules->existsIn(['sprinttipo_id'], 'Sprinttipos'));

        return $rules;
    }
}
