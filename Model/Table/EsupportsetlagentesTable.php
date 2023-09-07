<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Esupportsetlagentes Model
 *
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 *
 * @method \App\Model\Entity\Esupportsetlagente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Esupportsetlagente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Esupportsetlagente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Esupportsetlagente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Esupportsetlagente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Esupportsetlagente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Esupportsetlagente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Esupportsetlagente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EsupportsetlagentesTable extends Table
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

        $this->setTable('esupportsetlagentes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
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
            ->scalar('canal')
            ->maxLength('canal', 20)
            ->allowEmptyString('canal');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 250)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 200)
            ->allowEmptyString('referencia');

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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));

        return $rules;
    }
}
