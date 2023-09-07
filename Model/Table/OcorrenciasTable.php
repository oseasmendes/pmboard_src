<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ocorrencias Model
 *
 * @property \App\Model\Table\OcorrenciastiposTable|\Cake\ORM\Association\BelongsTo $Ocorrenciastipos
 * @property \App\Model\Table\ConsultoresnotasTable|\Cake\ORM\Association\HasMany $Consultoresnotas
 *
 * @method \App\Model\Entity\Ocorrencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ocorrencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ocorrencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ocorrencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ocorrencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OcorrenciasTable extends Table
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

        $this->setTable('ocorrencias');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Ocorrenciastipos', [
            'foreignKey' => 'ocorrenciastipo_id'
        ]);
        $this->hasMany('Consultoresnotas', [
            'foreignKey' => 'ocorrencia_id'
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
        $rules->add($rules->existsIn(['ocorrenciastipo_id'], 'Ocorrenciastipos'));

        return $rules;
    }
}
