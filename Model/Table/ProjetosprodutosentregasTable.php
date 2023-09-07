<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosentregas Model
 *
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\BelongsTo $Paretos
 * @property \App\Model\Table\UnidademedidasTable|\Cake\ORM\Association\BelongsTo $Unidademedidas
 * @property \App\Model\Table\AgendaanualTable|\Cake\ORM\Association\HasMany $Agendaanual
 * @property \App\Model\Table\ProjetosapontamentosTable|\Cake\ORM\Association\HasMany $Projetosapontamentos
 * @property \App\Model\Table\ProjetosentregasparetosTable|\Cake\ORM\Association\HasMany $Projetosentregasparetos
 * @property \App\Model\Table\ViewKanbanentregasTable|\Cake\ORM\Association\HasMany $ViewKanbanentregas
 *
 * @method \App\Model\Entity\Projetosprodutosentrega get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentrega newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentrega[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentrega|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentrega saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentrega patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentrega[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentrega findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosentregasTable extends Table
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

        $this->setTable('projetosprodutosentregas');
        $this->setDisplayField('referencia');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Paretos', [
            'foreignKey' => 'pareto_id'
        ]);

         $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);

         $this->belongsTo('Ambientes', [
            'foreignKey' => 'ambiente_id'
        ]);

        $this->belongsTo('Unidademedidas', [
            'foreignKey' => 'unidademedida_id'
        ]);

        $this->belongsTo('Fases', [
            'foreignKey' => 'fase_id'
        ]);

        $this->belongsTo('Entregastipos', [
            'foreignKey' => 'entregastipo_id'
        ]);

        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);

        $this->hasMany('Agendas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
        
        $this->hasMany('Projetosapontamentos', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Entregasblockpoints', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Projetosentregasparetos', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
         $this->hasMany('Apontamentos', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

         $this->hasMany('Projetosprodutosentregasalocs', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Projetosprodutosentregasdiarios', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Projetosprodutosentregasimgs', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Projetosprodutosentregasflws', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Projetosentregasreqs', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Todos', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Projetosprodutosentregasurls', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Projetosentregasnotas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Projetosentregasencerramentos', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);

        $this->hasMany('Kronusitems', [
            'foreignKey' => 'projetosprodutosentrega_id'
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
            ->scalar('referencia')
            ->maxLength('referencia', 255)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');
        
        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');
        
        $validator
            ->scalar('justificativa')
            ->maxLength('justificativa', 4294967295)
            ->allowEmptyString('justificativa');

         $validator
            ->scalar('servidor')
            ->maxLength('servidor', 45)
            ->allowEmptyString('servidor');

        $validator
            ->decimal('tmpprevisto')
            ->allowEmptyString('tmpprevisto');

        $validator
            ->date('dataprevista')
            ->allowEmptyDate('dataprevista');

        $validator
            ->dateTime('datarealizada')
            ->allowEmptyDate('datarealizada');
            

         $validator
            ->date('prevdatainicio')
            ->allowEmptyDate('prevdatainicio');

        $validator
            ->date('prevdatafim')
            ->allowEmptyDate('prevdatafim');

        $validator
            ->date('dataatribuicao')
            ->allowEmptyDate('dataatribuicao');



        $validator
            ->integer('prioridade')
            ->allowEmptyString('prioridade');

        $validator
            ->integer('referenciaid')
            ->allowEmptyString('referenciaid');



        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');


        $validator
            ->date('escoporemocaodata')
            ->allowEmptyDate('escoporemocaodata');


        $validator
            ->boolean('escoporemocao')
            ->allowEmptyString('escoporemocao');    

        $validator
            ->scalar('escoporemocaodescricao')
            ->maxLength('escoporemocaodescricao', 4294967295)
            ->allowEmptyString('escoporemocaodescricao');

        $validator
            ->integer('predecessora')
            ->allowEmptyString('predecessora');

         $validator
            ->scalar('sprintoriginal')
            ->maxLength('sprintoriginal', 255)
            ->allowEmptyString('sprintoriginal');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 255)
            ->allowEmptyString('responsavel');

        $validator
            ->boolean('archivestatus')
            ->allowEmptyString('archivestatus');   

        $validator
            ->date('archivedate')
            ->allowEmptyDate('archivedate');
        
        $validator
            ->scalar('archivereason')
            ->maxLength('archivereason', 255)
            ->allowEmptyString('archivereason');

          $validator
            ->scalar('canal')
            ->maxLength('canal', 45)
            ->allowEmptyString('canal');
            
        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 255)
            ->allowEmptyString('comentario');

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
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['pareto_id'], 'Paretos'));
        $rules->add($rules->existsIn(['unidademedida_id'], 'Unidademedidas'));
        $rules->add($rules->existsIn(['fase_id'], 'Fases'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['ambiente_id'], 'Ambientes'));
        $rules->add($rules->existsIn(['entregastipo_id'], 'Entregastipos'));
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));       

        return $rules;
    }
}
