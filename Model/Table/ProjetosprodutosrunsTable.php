<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosruns Model
 *
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ProcessosTable|\Cake\ORM\Association\BelongsTo $Processos
 *
 * @method \App\Model\Entity\Projetosprodutosrun get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosrun newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosrun[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosrun|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosrun saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosrun patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosrun[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosrun findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosrunsTable extends Table
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

        $this->setTable('projetosprodutosruns');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Processos', [
            'foreignKey' => 'processo_id'
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
            ->scalar('partnumber')
            ->maxLength('partnumber', 45)
            ->allowEmptyString('partnumber');

        $validator
            ->integer('codigo')
            ->allowEmptyString('codigo');

        $validator
            ->dateTime('datainicioprevisto')
            ->allowEmptyDateTime('datainicioprevisto');

        $validator
            ->dateTime('datafimprevisto')
            ->allowEmptyDateTime('datafimprevisto');

        $validator
            ->decimal('tempototalprevisto')
            ->allowEmptyString('tempototalprevisto');

        $validator
            ->scalar('resultado')
            ->maxLength('resultado', 45)
            ->allowEmptyString('resultado');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 4294967295)
            ->allowEmptyString('observacao');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 45)
            ->allowEmptyString('responsavel');

        $validator
            ->dateTime('datainicioexecucao')
            ->allowEmptyDateTime('datainicioexecucao');

        $validator
            ->dateTime('datafimexecucao')
            ->allowEmptyDateTime('datafimexecucao');

        $validator
            ->decimal('tempototalexecucao')
            ->allowEmptyString('tempototalexecucao');

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
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['processo_id'], 'Processos'));

        return $rules;
    }
}
