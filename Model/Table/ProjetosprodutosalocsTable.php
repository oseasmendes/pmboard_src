<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosalocs Model
 *
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\TipoalocsTable|\Cake\ORM\Association\BelongsTo $Tipoalocs
 *
 * @method \App\Model\Entity\Projetosprodutosaloc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosaloc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosaloc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosaloc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosaloc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosaloc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosaloc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosaloc findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosalocsTable extends Table
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

        $this->setTable('projetosprodutosalocs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Tipoalocs', [
            'foreignKey' => 'tipoaloc_id'
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
            ->dateTime('dataalocacao')
            ->allowEmptyDateTime('dataalocacao');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->decimal('percentual')
            ->allowEmptyString('percentual');

        $validator
            ->date('desalocacaoprevista')
            ->allowEmptyDate('desalocacaoprevista');

        $validator
            ->date('desalocacaorealizada')
            ->allowEmptyDate('desalocacaorealizada');

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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['tipoaloc_id'], 'Tipoalocs'));

        return $rules;
    }
}
