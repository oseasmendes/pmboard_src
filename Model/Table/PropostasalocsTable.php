<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Propostasalocs Model
 *
 * @property \App\Model\Table\PropostasTable|\Cake\ORM\Association\BelongsTo $Propostas
 * @property \App\Model\Table\CompetenciasTable|\Cake\ORM\Association\BelongsTo $Competencias
 * @property \App\Model\Table\PeriodotiposTable|\Cake\ORM\Association\BelongsTo $Periodotipos
 * @property \App\Model\Table\PropostasalocsagendasTable|\Cake\ORM\Association\HasMany $Propostasalocsagendas
 *
 * @method \App\Model\Entity\Propostasaloc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Propostasaloc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Propostasaloc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Propostasaloc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Propostasaloc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Propostasaloc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Propostasaloc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Propostasaloc findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PropostasalocsTable extends Table
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

        $this->setTable('propostasalocs');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Propostas', [
            'foreignKey' => 'proposta_id'
        ]);
        $this->belongsTo('Competencias', [
            'foreignKey' => 'competencia_id'
        ]);
        $this->belongsTo('Periodotipos', [
            'foreignKey' => 'periodotipo_id'
        ]);
        $this->hasMany('Propostasalocsagendas', [
            'foreignKey' => 'propostasaloc_id'
        ]);

         $this->hasMany('Projetosalocsprofiles', [
            'foreignKey' => 'propostasaloc_id'
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
            ->scalar('grade')
            ->maxLength('grade', 45)
            ->allowEmptyString('grade');

        $validator
            ->decimal('totalhoras')
            ->allowEmptyString('totalhoras');

        $validator
            ->date('dataprevistainicio')
            ->allowEmptyDate('dataprevistainicio');

        $validator
            ->date('dataprevistafim')
            ->allowEmptyDate('dataprevistafim');

        $validator
            ->scalar('hrinicio')
            ->maxLength('hrinicio', 5)
            ->allowEmptyString('hrinicio');

        $validator
            ->scalar('hrfim')
            ->maxLength('hrfim', 5)
            ->allowEmptyString('hrfim');

        $validator
            ->decimal('jornadatrabalho')
            ->allowEmptyString('jornadatrabalho');

        $validator
            ->decimal('tempototalintervalos')
            ->allowEmptyString('tempototalintervalos');

        $validator
            ->scalar('aprovadohoraextra')
            ->maxLength('aprovadohoraextra', 1)
            ->allowEmptyString('aprovadohoraextra');

        $validator
            ->boolean('considerarsabadototal')
            ->allowEmptyString('considerarsabadototal');

        $validator
            ->boolean('considerardomingo')
            ->allowEmptyString('considerardomingo');

        $validator
            ->boolean('considerarferiado')
            ->allowEmptyString('considerarferiado');

        $validator
            ->boolean('considerarsabadoparcial')
            ->allowEmptyString('considerarsabadoparcial');

        $validator
            ->decimal('jornadatrabalholiquido')
            ->allowEmptyString('jornadatrabalholiquido');

        $validator
            ->decimal('periodoqte')
            ->allowEmptyString('periodoqte');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

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
        $rules->add($rules->existsIn(['proposta_id'], 'Propostas'));
        $rules->add($rules->existsIn(['competencia_id'], 'Competencias'));
        $rules->add($rules->existsIn(['periodotipo_id'], 'Periodotipos'));

        return $rules;
    }
}
