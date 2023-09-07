<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetos Model
 *
 * @property \App\Model\Table\ProgramasTable|\Cake\ORM\Association\BelongsTo $Programas
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\FasesTable|\Cake\ORM\Association\BelongsTo $Fases
 * @property |\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AgendaanualTable|\Cake\ORM\Association\HasMany $Agendaanual
 * @property \App\Model\Table\ProjetosalocsTable|\Cake\ORM\Association\HasMany $Projetosalocs
 * @property \App\Model\Table\ProjetosnotasTable|\Cake\ORM\Association\HasMany $Projetosnotas
 * @property \App\Model\Table\ProjetosparetosTable|\Cake\ORM\Association\HasMany $Projetosparetos
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\HasMany $Projetosprodutos
 * @property \App\Model\Table\ProjetosstatusTable|\Cake\ORM\Association\HasMany $Projetosstatus
 * @property \App\Model\Table\ViewKanbanprojetosTable|\Cake\ORM\Association\HasMany $ViewKanbanprojetos
 * @property \App\Model\Table\ViewProjetotimingsTable|\Cake\ORM\Association\HasMany $ViewProjetotimings
 *
 * @method \App\Model\Entity\Projeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projeto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projeto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projeto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosTable extends Table
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

        $this->setTable('projetos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Programas', [
            'foreignKey' => 'programa_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Fases', [
            'foreignKey' => 'fase_id'
        ]);


        $this->belongsTo('Fases', [
            'foreignKey' => 'fase_id'
        ]);

        $this->belongsTo('Propostas', [
            'foreignKey' => 'proposta_id'
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);

         $this->hasMany('Projetosblockpoints', [
            'foreignKey' => 'projeto_id'
        ]);

        $this->hasMany('Agendas', [
            'foreignKey' => 'projeto_id'
        ]);
         $this->hasMany('Fivewthreehs', [
            'foreignKey' => 'projeto_id'
        ]);

        $this->hasMany('Kronusplans', [
            'foreignKey' => 'projeto_id'
        ]);

        $this->hasMany('Projetosalocs', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosnotas', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosparetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosprodutosruns', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosprodutos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosstatus', [
            'foreignKey' => 'projeto_id'
        ]);

        $this->hasMany('Projetoscutovers', [
            'foreignKey' => 'projeto_id'
        ]);

        $this->hasMany('Projetosrestrictions', [
            'foreignKey' => 'projeto_id'
        ]);

         $this->hasMany('Projetosurls', [
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->date('realizadodatainicio')
            ->allowEmptyDate('realizadodatainicio');

        $validator
            ->date('realizadodatafim')
            ->allowEmptyDate('realizadodatafim');

        $validator
            ->boolean('administrativo')
            ->allowEmptyString('administrativo');

        $validator
            ->integer('prioridade')
            ->allowEmptyString('prioridade');

        $validator
            ->integer('engajado')
            ->allowEmptyString('engajado');

        $validator
            ->scalar('codenome')
            ->maxLength('codenome', 255)
             ->requirePresence('codenome', 'create')
            ->notEmpty('codenome');
            //->allowEmptyString('codenome');

        $validator
            ->boolean('propostatecnica')
            ->allowEmptyString('propostatecnica');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->date('previstodatainicio')
            ->allowEmptyDate('previstodatainicio');

        $validator
            ->date('previstodatafim')
            ->allowEmptyDate('previstodatafim');

        $validator
            ->date('datacancelamento')
            ->allowEmptyDate('datacancelamento');

        $validator
            ->date('datasuspensao')
            ->allowEmptyDate('datasuspensao');

        $validator
            ->boolean('arquivo')
            ->allowEmptyString('arquivo');

        $validator
            ->date('dataaprovacao')
            ->allowEmptyDate('dataaprovacao');

        $validator
            ->scalar('urlreferenciacliente')
            ->maxLength('urlreferenciacliente', 255)
            ->allowEmptyString('urlreferenciacliente');

        $validator
            ->scalar('urlreferenciainterno')
            ->maxLength('urlreferenciainterno', 255)
            ->allowEmptyString('urlreferenciainterno');

        $validator
            ->boolean('controleagenda')
            ->allowEmptyString('controleagenda');

        $validator
            ->scalar('objetivo')
            ->maxLength('objetivo', 4294967295)
            ->allowEmptyString('objetivo');
    
        $validator
            ->scalar('leadtimeunitexpected')
            ->maxLength('leadtimeunitexpected', 1)
            ->allowEmptyString('leadtimeunitexpected');

        $validator
            ->integer('leadtimeexpected')
            ->allowEmptyString('leadtimeexpected');

        $validator
            ->scalar('leadtimeunitexpected')
            ->maxLength('leadtimeunitexpected', 1)
            ->allowEmptyString('leadtimeunitexpected');

        $validator
            ->integer('technicalleadtime')
            ->allowEmptyString('technicalleadtime');


        $validator
            ->scalar('technicalunitleadtime')
            ->maxLength('technicalunitleadtime', 1)
            ->allowEmptyString('technicalunitleadtime');

        $validator
            ->integer('analysisleadtime')
            ->allowEmptyString('analysisleadtime');


        $validator
            ->scalar('analysisunitleadtime')
            ->maxLength('analysisunitleadtime', 1)
            ->allowEmptyString('analysisunitleadtime');


        $validator
            ->integer('developleadtime')
            ->allowEmptyString('developleadtime');


        $validator
            ->scalar('developunitleadtime')
            ->maxLength('developunitleadtime', 1)
            ->allowEmptyString('developunitleadtime');


        $validator
            ->integer('userleadtime')
            ->allowEmptyString('userleadtime');


        $validator
            ->scalar('userunitleadtime')
            ->maxLength('userunitleadtime', 1)
            ->allowEmptyString('userunitleadtime');


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
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['fase_id'], 'Fases'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['proposta_id'], 'Propostas'));

        return $rules;
    }
}
