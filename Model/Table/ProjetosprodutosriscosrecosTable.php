<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosriscosrecos Model
 *
 * @property \App\Model\Table\ProjetosprodutosriscosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosriscos
 *
 * @method \App\Model\Entity\Projetosprodutosriscosreco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosreco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosreco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosreco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosreco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosreco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosreco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosriscosreco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosriscosrecosTable extends Table
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

        $this->setTable('projetosprodutosriscosrecos');
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
