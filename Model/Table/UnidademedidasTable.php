<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Unidademedidas Model
 *
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\HasMany $Projetosprodutosentregas
 *
 * @method \App\Model\Entity\Unidademedida get($primaryKey, $options = [])
 * @method \App\Model\Entity\Unidademedida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Unidademedida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Unidademedida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Unidademedida saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Unidademedida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Unidademedida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Unidademedida findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UnidademedidasTable extends Table
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

        $this->setTable('unidademedidas');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'unidademedida_id'
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

        return $validator;
    }
}
