<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Probabilidades Model
 *
 * @property \App\Model\Table\ProjetosprodutosriscosTable|\Cake\ORM\Association\HasMany $Projetosprodutosriscos
 *
 * @method \App\Model\Entity\Probabilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Probabilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Probabilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Probabilidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Probabilidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Probabilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Probabilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Probabilidade findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProbabilidadesTable extends Table
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

        $this->setTable('probabilidades');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetosprodutosriscos', [
            'foreignKey' => 'probabilidade_id'
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
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        $validator
            ->integer('valor')
            ->allowEmptyString('valor');

        return $validator;
    }
}
