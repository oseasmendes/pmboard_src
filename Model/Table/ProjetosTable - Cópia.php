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
 * @property \App\Model\Table\AgendaanualTable|\Cake\ORM\Association\HasMany $Agendaanual
 * @property \App\Model\Table\ProjetosalocsTable|\Cake\ORM\Association\HasMany $Projetosalocs
 * @property \App\Model\Table\ProjetosparetosTable|\Cake\ORM\Association\HasMany $Projetosparetos
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\HasMany $Projetosprodutos
 * @property \App\Model\Table\ProjetosstatusTable|\Cake\ORM\Association\HasMany $Projetosstatus
 *
 * @method \App\Model\Entity\Projeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projeto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projeto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projeto findOrCreate($search, callable $callback = null, $options = [])
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

        $this->belongsTo('Programas', [
            'foreignKey' => 'programa_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Fases', [
            'foreignKey' => 'fase_id'
        ]);
        $this->hasMany('Agendaanual', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosalocs', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosparetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosprodutos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->hasMany('Projetosstatus', [
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
            ->allowEmptyString('descricao');

        $validator
            ->dateTime('datainicio')
            ->allowEmptyDateTime('datainicio');

        $validator
            ->dateTime('datafim')
            ->allowEmptyDateTime('datafim');

        $validator
            ->boolean('administrativo')
            ->allowEmptyString('administrativo');

        $validator
            ->integer('prioridade')
            ->allowEmptyString('prioridade');

        $validator
            ->scalar('codenome')
            ->maxLength('codenome', 255)
            ->allowEmptyString('codenome');

        $validator
            ->boolean('propostatecnica')
            ->allowEmptyString('propostatecnica');

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

        return $rules;
    }
}
