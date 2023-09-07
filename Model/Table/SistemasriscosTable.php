<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasriscos Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\RiscosTable|\Cake\ORM\Association\BelongsTo $Riscos
 * @property \App\Model\Table\AplicabilidadesTable|\Cake\ORM\Association\BelongsTo $Aplicabilidades
 *
 * @method \App\Model\Entity\Sistemasrisco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasrisco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasrisco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasrisco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasrisco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasrisco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasrisco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasrisco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasriscosTable extends Table
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

        $this->setTable('sistemasriscos');
        $this->setDisplayField('nivel');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Riscos', [
            'foreignKey' => 'risco_id'
        ]);
        $this->belongsTo('Aplicabilidades', [
            'foreignKey' => 'aplicabilidade_id'
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
            ->decimal('probabilidade')
            ->allowEmptyString('probabilidade');

        $validator
            ->decimal('tempoprevistoimpacto')
            ->allowEmptyString('tempoprevistoimpacto');

        $validator
            ->decimal('pessoasafetadas')
            ->allowEmptyString('pessoasafetadas');

        $validator
            ->decimal('estimativafinanceiradorisco')
            ->allowEmptyString('estimativafinanceiradorisco');

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
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));
        $rules->add($rules->existsIn(['risco_id'], 'Riscos'));
        $rules->add($rules->existsIn(['aplicabilidade_id'], 'Aplicabilidades'));

        return $rules;
    }
}
