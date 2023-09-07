<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Programasplanotaxas Model
 *
 * @property \App\Model\Table\CompetenciasTable|\Cake\ORM\Association\BelongsTo $Competencias
 * @property \App\Model\Table\ProgramasTable|\Cake\ORM\Association\BelongsTo $Programas
 *
 * @method \App\Model\Entity\Programasplanotaxa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Programasplanotaxa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Programasplanotaxa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Programasplanotaxa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programasplanotaxa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programasplanotaxa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Programasplanotaxa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Programasplanotaxa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProgramasplanotaxasTable extends Table
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

        $this->setTable('programasplanotaxas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Competencias', [
            'foreignKey' => 'competencia_id'
        ]);
        $this->belongsTo('Programas', [
            'foreignKey' => 'programa_id'
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
            ->decimal('valor')
            ->allowEmptyString('valor');

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
        $rules->add($rules->existsIn(['competencia_id'], 'Competencias'));
        $rules->add($rules->existsIn(['programa_id'], 'Programas'));

        return $rules;
    }
}
