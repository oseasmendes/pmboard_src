<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kronusitems Model
 *
 * @property \App\Model\Table\KronusplansTable|\Cake\ORM\Association\BelongsTo $Kronusplans
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\BelongsTo $Paretos
 * @property \App\Model\Table\FlagsTable|\Cake\ORM\Association\BelongsTo $Flags
 * @property \App\Model\Table\FasesTable|\Cake\ORM\Association\BelongsTo $Fases
 *
 * @method \App\Model\Entity\Kronusitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kronusitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kronusitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kronusitem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kronusitem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kronusitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kronusitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kronusitem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KronusitemsTable extends Table
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

        $this->setTable('kronusitems');
        $this->setDisplayField('atividade');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Kronusplans', [
            'foreignKey' => 'kronusplan_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Paretos', [
            'foreignKey' => 'pareto_id'
        ]);

        $this->belongsTo('Flags', [
            'foreignKey' => 'flag_id'
        ]);

        $this->belongsTo('Fases', [
            'foreignKey' => 'fase_id'
        ]);

        $this->hasMany('Projetosprodutosentregasflws', [
            'foreignKey' => 'kronusitem_id'
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
            ->date('kickoff')
            ->allowEmptyDate('kickoff');

        $validator
            ->integer('seq')
            ->allowEmptyString('seq');

        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');

        $validator
            ->scalar('edt')
            ->maxLength('edt', 15)
            ->allowEmptyString('edt');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 45)
            ->allowEmptyString('categoria');

        $validator
            ->scalar('nometarefa')
            ->maxLength('nometarefa', 255)
            ->allowEmptyString('nometarefa');

        $validator
            ->scalar('etapa')
            ->maxLength('etapa', 10)
            ->allowEmptyString('etapa');

        $validator
            ->decimal('percconcluido')
            ->allowEmptyString('percconcluido');

        $validator
            ->decimal('duracao')
            ->allowEmptyString('duracao');

        $validator
            ->scalar('unidademedida')
            ->maxLength('unidademedida', 45)
            ->allowEmptyString('unidademedida');

        $validator
            ->date('inicio')
            ->allowEmptyDate('inicio');

        $validator
            ->date('termino')
            ->allowEmptyDate('termino');

        $validator
            ->integer('predecessora')
            ->allowEmptyString('predecessora');

        $validator
            ->scalar('nomerecurso')
            ->maxLength('nomerecurso', 150)
            ->allowEmptyString('nomerecurso');

        $validator
            ->integer('idexclusivo')
            ->allowEmptyString('idexclusivo');

        $validator
            ->date('dataatualizacao')
            ->allowEmptyDate('dataatualizacao');

        $validator
            ->integer('versao')
            ->allowEmptyString('versao');

        $validator
            ->integer('nivel1')
            ->allowEmptyString('nivel1');

        $validator
            ->integer('nivel2')
            ->allowEmptyString('nivel2');

        $validator
            ->integer('nivel3')
            ->allowEmptyString('nivel3');

        $validator
            ->integer('nivel4')
            ->allowEmptyString('nivel4');

        $validator
            ->integer('nivel5')
            ->allowEmptyString('nivel5');

        $validator
            ->integer('nivel6')
            ->allowEmptyString('nivel6');

        $validator
            ->integer('nivel7')
            ->allowEmptyString('nivel7');

        $validator
            ->integer('nivel8')
            ->allowEmptyString('nivel8');

        $validator
            ->integer('nivel9')
            ->allowEmptyString('nivel9');

        $validator
            ->integer('nivel10')
            ->allowEmptyString('nivel10');

        $validator
            ->integer('apontamento')
            ->allowEmptyString('apontamento');

        $validator
            ->scalar('milestone')
            ->maxLength('milestone', 10)
            ->allowEmptyString('milestone');

        $validator
            ->integer('decisorio')
            ->allowEmptyString('decisorio');

        $validator
            ->integer('selecao')
            ->allowEmptyString('selecao');

        $validator
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->scalar('objetivo')
            ->maxLength('objetivo', 4294967295)
            ->allowEmptyString('objetivo');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('flagname')
            ->maxLength('flagname', 45)
            ->allowEmptyString('flagname');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 45)
            ->allowEmptyString('responsavel');

        $validator
            ->scalar('atividade')
            ->maxLength('atividade', 255)
            ->allowEmptyString('atividade');

        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 255)
            ->allowEmptyString('comentario');

        $validator
            ->scalar('criticidade')
            ->maxLength('criticidade', 45)
            ->allowEmptyString('criticidade');

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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['projetosproduto_id'], 'Projetosprodutos'));
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));
        $rules->add($rules->existsIn(['projeto_id'], 'Projetos'));
        $rules->add($rules->existsIn(['pareto_id'], 'Paretos'));
        $rules->add($rules->existsIn(['flag_id'], 'Flags'));
        $rules->add($rules->existsIn(['fase_id'], 'Fases'));

        return $rules;
    }
}
