<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosriscosimpactos Model
 *
 * @property \App\Model\Table\ProjetosprodutosriscosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosriscos
 *
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosriscosimpactosTable extends Table
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

        $this->setTable('projetosprodutosriscosimpactos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutosriscos', [
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
        $rules->add($rules->existsIn(['projetosprodutosrisco_id'], 'Projetosprodutosriscos'));

        return $rules;
    }
}
