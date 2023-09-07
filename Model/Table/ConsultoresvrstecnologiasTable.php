<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultoresvrstecnologias Model
 *
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\TecnologiasTable|\Cake\ORM\Association\BelongsTo $Tecnologias
 * @property \App\Model\Table\KnowhowsTable|\Cake\ORM\Association\BelongsTo $Knowhows
 *
 * @method \App\Model\Entity\Consultoresvrstecnologia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultoresvrstecnologia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consultoresvrstecnologia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresvrstecnologia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoresvrstecnologia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoresvrstecnologia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresvrstecnologia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoresvrstecnologia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConsultoresvrstecnologiasTable extends Table
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

        $this->setTable('consultoresvrstecnologias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Tecnologias', [
            'foreignKey' => 'tecnologia_id'
        ]);
        $this->belongsTo('Knowhows', [
            'foreignKey' => 'knowhow_id'
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
        $rules->add($rules->existsIn(['tecnologia_id'], 'Tecnologias'));
        $rules->add($rules->existsIn(['knowhow_id'], 'Knowhows'));

        return $rules;
    }
}
