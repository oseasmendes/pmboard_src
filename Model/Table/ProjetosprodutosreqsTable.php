<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosreqs Model
 *
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\EntregastiposTable|\Cake\ORM\Association\BelongsTo $Entregastipos
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\BelongsTo $Processos
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\UnidademedidasTable|\Cake\ORM\Association\BelongsTo $Unidademedidas
 * @property \App\Model\Table\FrentesTable|\Cake\ORM\Association\BelongsTo $Frentes
 * @property \App\Model\Table\ProjetosprodutosreqsrefsTable|\Cake\ORM\Association\HasMany $Projetosprodutosreqsrefs
 *
 * @method \App\Model\Entity\Projetosprodutosreq get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosreq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosreq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosreq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosreq saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosreq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosreq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosreq findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosreqsTable extends Table
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

        $this->setTable('projetosprodutosreqs');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Entregastipos', [
            'foreignKey' => 'entregastipo_id'
        ]);
        $this->belongsTo('Processos', [
            'foreignKey' => 'processo_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Unidademedidas', [
            'foreignKey' => 'unidademedida_id'
        ]);
        $this->belongsTo('Frentes', [
            'foreignKey' => 'frente_id'
        ]);
        $this->hasMany('Projetosprodutosreqsrefs', [
            'foreignKey' => 'projetosprodutosreq_id'
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
            ->date('dataemissao')
            ->allowEmptyDate('dataemissao');

        $validator
            ->scalar('solicitante')
            ->maxLength('solicitante', 255)
            ->allowEmptyString('solicitante');

        $validator
            ->integer('wave')
            ->allowEmptyString('wave');

        $validator
            ->integer('prioridade')
            ->allowEmptyString('prioridade');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('detalhes')
            ->maxLength('detalhes', 4294967295)
            ->allowEmptyString('detalhes');

        $validator
            ->decimal('previsaoanalise')
            ->allowEmptyString('previsaoanalise');

        $validator
            ->integer('previsaosprints')
            ->allowEmptyString('previsaosprints');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 25)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('reqstatus')
            ->maxLength('reqstatus', 45)
            ->allowEmptyString('reqstatus');
        


        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

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
        $rules->add($rules->existsIn(['entregastipo_id'], 'Entregastipos'));
        $rules->add($rules->existsIn(['processo_id'], 'Processos'));
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['unidademedida_id'], 'Unidademedidas'));
        $rules->add($rules->existsIn(['frente_id'], 'Frentes'));

        return $rules;
    }
}
