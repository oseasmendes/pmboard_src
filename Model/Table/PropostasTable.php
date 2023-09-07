<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Propostas Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\CentrocustosTable|\Cake\ORM\Association\BelongsTo $Centrocustos
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\HasMany $Projetos
 * @property \App\Model\Table\PropostasalocsTable|\Cake\ORM\Association\HasMany $Propostasalocs
 *
 * @method \App\Model\Entity\Proposta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proposta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proposta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proposta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proposta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proposta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proposta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proposta findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PropostasTable extends Table
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

        $this->setTable('propostas');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Centrocustos', [
            'foreignKey' => 'centrocusto_id'
        ]);
        $this->hasMany('Projetos', [
            'foreignKey' => 'proposta_id'
        ]);
        $this->hasMany('Propostasalocs', [
            'foreignKey' => 'proposta_id'
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
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('numerointernoproposta')
            ->maxLength('numerointernoproposta', 45)
            ->allowEmptyString('numerointernoproposta');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->date('datademanda')
            ->allowEmptyDate('datademanda');

        $validator
            ->scalar('numeropo')
            ->maxLength('numeropo', 45)
            ->allowEmptyString('numeropo');

        $validator
            ->scalar('referenciacliente')
            ->maxLength('referenciacliente', 255)
            ->allowEmptyString('referenciacliente');

        $validator
            ->decimal('valortotal')
            ->allowEmptyString('valortotal');

        $validator
            ->decimal('horastotal')
            ->allowEmptyString('horastotal');

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
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['centrocusto_id'], 'Centrocustos'));

        return $rules;
    }
}
