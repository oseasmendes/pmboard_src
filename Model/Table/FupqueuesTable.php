<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fupqueues Model
 *
 * @property \App\Model\Table\FupagendasTable|\Cake\ORM\Association\HasMany $Fupagendas
 * @property \App\Model\Table\FupqueuesdistributionsTable|\Cake\ORM\Association\HasMany $Fupqueuesdistributions
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\HasMany $Projetosprodutos
 *
 * @method \App\Model\Entity\Fupqueue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fupqueue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fupqueue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupqueue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupqueue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fupqueue findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FupqueuesTable extends Table
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

        $this->setTable('fupqueues');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Fupagendas', [
            'foreignKey' => 'fupqueue_id'
        ]);
        $this->hasMany('Departamentos', [
            'foreignKey' => 'fupqueue_id'
        ]);
        $this->hasMany('Fupqueuesdistributions', [
            'foreignKey' => 'fupqueue_id'
        ]);
        $this->hasMany('Projetosprodutos', [
            'foreignKey' => 'fupqueue_id'
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
            ->maxLength('descricao', 250)
            ->allowEmptyString('descricao');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 250)
            ->allowEmptyString('observacao');
        
        $validator
            ->boolean('tickets')
            ->allowEmptyString('tickets');

        $validator
            ->boolean('improvements')
            ->allowEmptyString('improvements');

        $validator
            ->boolean('projects')
            ->allowEmptyString('projects');
        
        $validator
            ->boolean('fup')
            ->allowEmptyString('fup');


        return $validator;
    }
}
