<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendas Model
 *
 * @property \App\Model\Table\AtividadetiposTable|\Cake\ORM\Association\BelongsTo $Atividadetipos
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 *
 * @method \App\Model\Entity\Agenda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agenda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agenda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agenda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agenda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agenda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agenda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agenda findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgendasTable extends Table
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

        $this->setTable('agendas');
        $this->setDisplayField('etiquetaadicional');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Atividadetipos', [
            'foreignKey' => 'atividadetipo_id'
        ]);
        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);

         $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
          $this->hasMany('Atas', [
            'foreignKey' => 'agenda_id'
        ]);
           $this->hasMany('Agendasnotes', [
            'foreignKey' => 'agenda_id'
        ]);

        $this->hasMany('Projetossprintsdailysreferences', [
            'foreignKey' => 'agenda_id'
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
            ->scalar('tipoagenda')
            ->maxLength('tipoagenda', 45)
            ->allowEmptyString('tipoagenda');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 255)
            ->allowEmptyString('observacao');

        $validator
            ->date('dataagenda')
            ->allowEmptyDate('dataagenda');

        $validator
            ->dateTime('horainicio')
            ->allowEmptyDateTime('horainicio');

        $validator
            ->dateTime('horafim')
            ->allowEmptyDateTime('horafim');

        $validator
            ->scalar('local')
            ->maxLength('local', 255)
            ->allowEmptyString('local');

        $validator
            ->scalar('etiquetaadicional')
            ->maxLength('etiquetaadicional', 255)
            ->allowEmptyString('etiquetaadicional');

        $validator
            ->scalar('diadasemana')
            ->maxLength('diadasemana', 45)
            ->allowEmptyString('diadasemana');

        $validator
            ->integer('localdiferente')
            ->allowEmptyString('localdiferente');

        $validator
            ->integer('Periodicidade')
            ->allowEmptyString('Periodicidade');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('referenciadia')
            ->maxLength('referenciadia', 10)
            ->allowEmptyString('referenciadia');

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
        $rules->add($rules->existsIn(['atividadetipo_id'], 'Atividadetipos'));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));
        $rules->add($rules->existsIn(['projeto_id'], 'Projetos'));
        $rules->add($rules->existsIn(['projetosproduto_id'], 'Projetosprodutos'));
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        return $rules;
    }
}
