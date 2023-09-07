<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sprinttipos Model
 *
 * @property |\Cake\ORM\Association\HasMany $Projetosprodutosbugs
 * @property \App\Model\Table\ProjetosprodutossprintsTable|\Cake\ORM\Association\HasMany $Projetosprodutossprints
 * @property |\Cake\ORM\Association\HasMany $Projetossprints
 *
 * @method \App\Model\Entity\Sprinttipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sprinttipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sprinttipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sprinttipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sprinttipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sprinttipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sprinttipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sprinttipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SprinttiposTable extends Table
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

        $this->setTable('sprinttipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetosprodutosbugs', [
            'foreignKey' => 'sprinttipo_id'
        ]);
        $this->hasMany('Projetosprodutossprints', [
            'foreignKey' => 'sprinttipo_id'
        ]);
        $this->hasMany('Projetossprints', [
            'foreignKey' => 'sprinttipo_id'
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
