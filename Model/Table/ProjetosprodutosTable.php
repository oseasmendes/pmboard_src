<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutos Model
 *
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property |\Cake\ORM\Association\BelongsTo $Frentes
 * @property \App\Model\Table\AgendaanualTable|\Cake\ORM\Association\HasMany $Agendaanual
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\HasMany $Projetosprodutosentregas
 * @property \App\Model\Table\ProjetosprodutosfeedbacksTable|\Cake\ORM\Association\HasMany $Projetosprodutosfeedbacks
 * @property \App\Model\Table\ProjetosprodutosnotasTable|\Cake\ORM\Association\HasMany $Projetosprodutosnotas
 * @property \App\Model\Table\ProjetosprodutosparetosTable|\Cake\ORM\Association\HasMany $Projetosprodutosparetos
 *
 * @method \App\Model\Entity\Projetosproduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosproduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosproduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosproduto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosproduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosproduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosproduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosproduto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosTable extends Table
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

        $this->setTable('projetosprodutos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Frentes', [
            'foreignKey' => 'frente_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'facilitador_id'
        ]);

        $this->belongsTo('Fupqueues', [
            'foreignKey' => 'fupqueue_id'
        ]);

         $this->belongsTo('Participantes', [
            'foreignKey' => 'gerenteprojetocliente_id'
        ]);

        $this->hasMany('Agendas', [
            'foreignKey' => 'projetosproduto_id'
        ]);

        $this->hasMany('Projetosprodutosreqs', [
            'foreignKey' => 'projetosproduto_id'
        ]);

        $this->hasMany('Projetosprodutosalocs', [
            'foreignKey' => 'projetosproduto_id'
        ]);       

        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->hasMany('Projetosprodutosfeedbacks', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->hasMany('Projetosprodutosnotas', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->hasMany('Projetosprodutosparetos', [
            'foreignKey' => 'projetosproduto_id'
        ]);

        $this->hasMany('Projetosprodutosriscos', [
            'foreignKey' => 'projetosproduto_id'
        ]);

        $this->hasMany('Projetosprodutosimgs', [
            'foreignKey' => 'projetosproduto_id'
        ]);

        
        $this->hasMany('Projetosoutofscopes', [
            'foreignKey' => 'projetosproduto_id'
        ]);


        $this->hasMany('Kronusplans', [
            'foreignKey' => 'projeto_id'
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
            ->scalar('produto')
            ->maxLength('produto', 45)
            ->allowEmptyString('produto');

        $validator
            ->scalar('codenome')
            ->maxLength('codenome', 45)
            ->allowEmptyString('codenome');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->integer('prioridade')
            ->allowEmptyString('prioridade');

        $validator
            ->date('dataprevistafim')
            ->allowEmptyDate('dataprevistafim');

        $validator
            ->date('datarealizada')
            ->allowEmptyDate('datarealizada');

         $validator
            ->date('dataprevistainicio')
            ->allowEmptyDate('dataprevistainicio');

        $validator
            ->date('datarealinicio')
            ->allowEmptyDate('datarealinicio');

        $validator
            ->date('datacancelamento')
            ->allowEmptyDate('datacancelamento');

        $validator
            ->date('datasuspensao')
            ->allowEmptyDate('datasuspensao');

         $validator
            ->scalar('escopomacro')
            ->maxLength('escopomacro', 4294967295)
            ->allowEmptyString('escopomacro');

        $validator
            ->scalar('comentarios')
            ->maxLength('comentarios', 4294967295)
            ->allowEmptyString('comentarios');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->boolean('selecionado')
            ->allowEmptyString('selecionado');

        $validator
            ->integer('kpi')
            ->allowEmptyString('kpi');

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
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['frente_id'], 'Frentes'));
        $rules->add($rules->existsIn(['facilitador_id'], 'Participantes'));  
        $rules->add($rules->existsIn(['gerenteprojetocliente_id'], 'Participantes'));        
        $rules->add($rules->existsIn(['fupqueue_id'], 'Fupqueues'));
        return $rules;
    }
}
