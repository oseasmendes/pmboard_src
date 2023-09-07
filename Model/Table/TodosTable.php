<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Todos Model
 *
 * @property \App\Model\Table\ProgramasTable|\Cake\ORM\Association\BelongsTo $Programas
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\NaturezasTable|\Cake\ORM\Association\BelongsTo $Naturezas
 * @property \App\Model\Table\ParetosTable|\Cake\ORM\Association\BelongsTo $Paretos
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 * @property \App\Model\Table\RequisitantesTable|\Cake\ORM\Association\BelongsTo $Requisitantes
 * @property \App\Model\Table\TodoseventosTable|\Cake\ORM\Association\HasMany $Todoseventos
 * @property \App\Model\Table\TodosobservadoresTable|\Cake\ORM\Association\HasMany $Todosobservadores
 *
 * @method \App\Model\Entity\Todo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Todo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Todo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Todo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Todo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Todo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Todo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Todo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TodosTable extends Table
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

        $this->setTable('todos');
        $this->setDisplayField('assunto');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Programas', [
            'foreignKey' => 'programa_id'
        ]);
        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Naturezas', [
            'foreignKey' => 'natureza_id'
        ]);
        $this->belongsTo('Paretos', [
            'foreignKey' => 'pareto_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'requisitante_id'
        ]);
        $this->hasMany('Todoseventos', [
            'foreignKey' => 'todo_id'
        ]);
        $this->hasMany('Todosobservadores', [
            'foreignKey' => 'todo_id'
        ]);

        $this->belongsTo('Projetosprodutosentregas', [
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
            ->scalar('requisitante')
            ->maxLength('requisitante', 45)
            ->allowEmptyString('requisitante');

        $validator
            ->scalar('assunto')
            ->maxLength('assunto', 255)
            ->allowEmptyString('assunto');

        $validator
            ->scalar('resumotecnico')
            ->maxLength('resumotecnico', 4294967295)
            ->allowEmptyString('resumotecnico');

        $validator
            ->integer('nrorequisicao')
            ->allowEmptyString('nrorequisicao');

        $validator
            ->date('dataprevistaentrega')
            ->allowEmptyDate('dataprevistaentrega');

        $validator
            ->date('dataapresentacao')
            ->allowEmptyDate('dataapresentacao');

        $validator
            ->scalar('patrocinador')
            ->maxLength('patrocinador', 200)
            ->allowEmptyString('patrocinador');
        
            $validator
            ->scalar('idinc')
            ->maxLength('idinc', 45)
            ->allowEmptyString('idinc');

        $validator
            ->integer('prioridade')
            ->allowEmptyString('prioridade');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 4294967295)
            ->allowEmptyString('observacao');

        $validator
            ->scalar('atribuidopara')
            ->maxLength('atribuidopara', 45)
            ->allowEmptyString('atribuidopara');

        $validator
            ->date('dataexecucao')
            ->allowEmptyDate('dataexecucao');

        $validator
            ->date('dataentrega')
            ->allowEmptyDate('dataentrega');

        $validator
            ->dateTime('datareconhecimento')
            ->allowEmptyDateTime('datareconhecimento');

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
        $rules->add($rules->existsIn(['programa_id'], 'Programas'));
        $rules->add($rules->existsIn(['projeto_id'], 'Projetos'));
        $rules->add($rules->existsIn(['projetosproduto_id'], 'Projetosprodutos'));
        $rules->add($rules->existsIn(['natureza_id'], 'Naturezas'));
        $rules->add($rules->existsIn(['pareto_id'], 'Paretos'));
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));
        $rules->add($rules->existsIn(['requisitante_id'], 'Participantes'));
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));

        return $rules;
    }
}
