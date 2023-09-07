<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasriscosimpactos Model
 *
 * @property \App\Model\Table\SistemariscosTable|\Cake\ORM\Association\BelongsTo $Sistemariscos
 *
 * @method \App\Model\Entity\Sistemasriscosimpacto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasriscosimpacto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasriscosimpacto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasriscosimpacto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasriscosimpacto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasriscosimpacto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasriscosimpacto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasriscosimpacto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasriscosimpactosTable extends Table
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

        $this->setTable('sistemasriscosimpactos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemariscos', [
            'foreignKey' => 'sistemarisco_id'
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

        $validator
            ->scalar('detalhamento')
            ->maxLength('detalhamento', 4294967295)
            ->allowEmptyString('detalhamento');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 45)
            ->allowEmptyString('tipo');

        $validator
            ->scalar('nivel')
            ->maxLength('nivel', 45)
            ->allowEmptyString('nivel');

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
        $rules->add($rules->existsIn(['sistemarisco_id'], 'Sistemariscos'));

        return $rules;
    }
}
