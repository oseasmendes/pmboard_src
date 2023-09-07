<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paretos Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\ParetosmestresTable|\Cake\ORM\Association\BelongsTo $Paretosmestres
 * @property |\Cake\ORM\Association\HasMany $Fivewthreehsparetos
 * @property |\Cake\ORM\Association\HasMany $Integrationdatas
 * @property |\Cake\ORM\Association\HasMany $Jiraetlparetos
 * @property \App\Model\Table\ProjetosentregasparetosTable|\Cake\ORM\Association\HasMany $Projetosentregasparetos
 * @property \App\Model\Table\ProjetosparetosTable|\Cake\ORM\Association\HasMany $Projetosparetos
 * @property |\Cake\ORM\Association\HasMany $Projetosprodutosbugsparetos
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\HasMany $Projetosprodutosentregas
 * @property |\Cake\ORM\Association\HasMany $Projetosprodutosentregasalocs
 * @property \App\Model\Table\ProjetosprodutosparetosTable|\Cake\ORM\Association\HasMany $Projetosprodutosparetos
 * @property |\Cake\ORM\Association\HasMany $Projetossprintsitems
 * @property |\Cake\ORM\Association\HasMany $Projetossprintsitemsoutofscope
 * @property |\Cake\ORM\Association\HasMany $Projetossprintsrealizados
 * @property |\Cake\ORM\Association\HasMany $Todos
 * @property |\Cake\ORM\Association\HasMany $VParetosentregas
 * @property \App\Model\Table\ViewKanbanentregasTable|\Cake\ORM\Association\HasMany $ViewKanbanentregas
 * @property |\Cake\ORM\Association\HasMany $ViewParetosentregas
 *
 * @method \App\Model\Entity\Pareto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pareto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pareto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pareto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pareto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pareto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pareto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pareto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParetosTable extends Table
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

        $this->setTable('paretos');
        $this->setDisplayField('Kanban');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Paretosmestres', [
            'foreignKey' => 'paretosmestre_id'
        ]);
        $this->hasMany('Fivewthreehsparetos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Integrationdatas', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Jiraetlparetos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetosentregasparetos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetosparetos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetosprodutosbugsparetos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetosprodutosentregasalocs', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetosprodutosparetos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetossprintsitems', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetossprintsitemsoutofscope', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Projetossprintsrealizados', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('Todos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('VParetosentregas', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('ViewKanbanentregas', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->hasMany('ViewParetosentregas', [
            'foreignKey' => 'pareto_id'
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
            ->scalar('Kanban')
            ->maxLength('Kanban', 255)
            ->allowEmptyString('Kanban');

        $validator
            ->integer('Workload')
            ->allowEmptyString('Workload');

        $validator
            ->scalar('Unidade')
            ->maxLength('Unidade', 3)
            ->allowEmptyString('Unidade');

        $validator
            ->integer('prioridade')
            ->allowEmptyString('prioridade');

        $validator
            ->scalar('cor')
            ->maxLength('cor', 255)
            ->allowEmptyString('cor');

        $validator
            ->integer('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->scalar('rotulo')
            ->maxLength('rotulo', 45)
            ->allowEmptyString('rotulo');

        $validator
            ->scalar('semaforo')
            ->maxLength('semaforo', 1)
            ->allowEmptyString('semaforo');

        $validator
            ->scalar('responsabilidade')
            ->maxLength('responsabilidade', 45)
            ->allowEmptyString('responsabilidade');

        $validator
            ->scalar('fechamento')
            ->maxLength('fechamento', 1)
            ->allowEmptyString('fechamento');

        $validator
            ->scalar('prefechamento')
            ->maxLength('prefechamento', 1)
            ->allowEmptyString('prefechamento');

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
        $rules->add($rules->existsIn(['paretosmestre_id'], 'Paretosmestres'));

        return $rules;
    }
}
