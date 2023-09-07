<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Apontamentos Model
 *
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\AtividadesTable|\Cake\ORM\Association\BelongsTo $Atividades
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 *
 * @method \App\Model\Entity\Apontamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Apontamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Apontamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Apontamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Apontamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Apontamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Apontamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Apontamento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ApontamentosTable extends Table
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

        $this->setTable('apontamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Atividades', [
            'foreignKey' => 'atividade_id'
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
            ->scalar('data')
            ->maxLength('data', 14)
            ->allowEmptyString('data');

        $validator
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->integer('registro')
            ->allowEmptyString('registro');

        $validator
            ->scalar('inicio')
            ->maxLength('inicio', 5)
            ->allowEmptyString('inicio');

        $validator
            ->scalar('fim')
            ->maxLength('fim', 5)
            ->allowEmptyString('fim');

        $validator
            ->boolean('integrado')
            ->allowEmptyString('integrado');

        $validator
            ->decimal('tempo')
            ->allowEmptyString('tempo');

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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['atividade_id'], 'Atividades'));
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));

        return $rules;
    }
}
