<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosalocsprofiles Model
 *
 * @property \App\Model\Table\ProjetosalocsTable|\Cake\ORM\Association\BelongsTo $Projetosalocs
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\CompetenciasTable|\Cake\ORM\Association\BelongsTo $Competencias
 *
 * @method \App\Model\Entity\Projetosalocsprofile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosalocsprofile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosalocsprofile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosalocsprofile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosalocsprofile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosalocsprofile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosalocsprofile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosalocsprofile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosalocsprofilesTable extends Table
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

        $this->setTable('projetosalocsprofiles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosalocs', [
            'foreignKey' => 'projetosaloc_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Competencias', [
            'foreignKey' => 'competencia_id'
        ]);

         $this->belongsTo('Propostasalocs', [
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
            ->decimal('percentual')
            ->allowEmptyString('percentual');

        $validator
            ->dateTime('dataalocacao')
            ->allowEmptyDateTime('dataalocacao');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');


         $validator
            ->scalar('consideracalculocapacidade')
            ->maxLength('consideracalculocapacidade', 1)
            ->allowEmptyString('consideracalculocapacidade');

        $validator
            ->decimal('horasdia')
            ->allowEmptyString('horasdia');

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
        $rules->add($rules->existsIn(['projetosaloc_id'], 'Projetosalocs'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['competencia_id'], 'Competencias'));
        $rules->add($rules->existsIn(['propostasaloc_id'], 'Propostasalocs'));
        return $rules;
    }
}
