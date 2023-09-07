<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosriscos Model
 *
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\RiscosTable|\Cake\ORM\Association\BelongsTo $Riscos
 * @property \App\Model\Table\AplicabilidadesTable|\Cake\ORM\Association\BelongsTo $Aplicabilidades
 * @property \App\Model\Table\ProjetosprodutosriscosimpactosTable|\Cake\ORM\Association\HasMany $Projetosprodutosriscosimpactos
 *
 * @method \App\Model\Entity\Projetosprodutosrisco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosrisco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosrisco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosrisco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosrisco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosrisco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosrisco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosrisco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosriscosTable extends Table
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

        $this->setTable('projetosprodutosriscos');
        $this->setDisplayField('detalhes');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Riscos', [
            'foreignKey' => 'risco_id'
        ]);
        $this->belongsTo('Aplicabilidades', [
            'foreignKey' => 'aplicabilidade_id'
        ]);

        $this->belongsTo('Probabilidades', [
            'foreignKey' => 'probabilidade_id'
        ]);

         $this->belongsTo('Severidades', [
            'foreignKey' => 'severidade_id'
        ]);

        $this->hasMany('Projetosprodutosriscosimpactos', [
            'foreignKey' => 'projetosprodutosrisco_id'
        ]);

        $this->hasMany('Projetosprodutosriscoseventos', [
            'foreignKey' => 'projetosprodutosrisco_id'
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
            ->scalar('nivel')
            ->maxLength('nivel', 45)
            ->allowEmptyString('nivel');

        $validator
            ->scalar('detalhes')
            ->maxLength('detalhes', 4294967295)
            ->allowEmptyString('detalhes');

        $validator
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->decimal('probabilidadeindice')
            ->allowEmptyString('probabilidadeindice'); 

        $validator
            ->decimal('tempoprevistoimpacto')
            ->allowEmptyString('tempoprevistoimpacto');

        $validator
            ->decimal('pessoasafetadas')
            ->allowEmptyString('pessoasafetadas');

        $validator
            ->decimal('estimativafinanceiradorisco')
            ->allowEmptyString('estimativafinanceiradorisco');

         $validator
            ->scalar('ativo')
            ->maxLength('ativo', 1)
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
        $rules->add($rules->existsIn(['risco_id'], 'Riscos'));
        $rules->add($rules->existsIn(['aplicabilidade_id'], 'Aplicabilidades'));
        $rules->add($rules->existsIn(['probabilidade_id'], 'Probabilidades'));
        $rules->add($rules->existsIn(['severidade_id'], 'Severidades'));
        return $rules;
    }
}
