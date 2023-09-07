<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pillarsareas Model
 *
 * @property \App\Model\Table\ProjetossprintsretrosactionsTable|\Cake\ORM\Association\HasMany $Projetossprintsretrosactions
 *
 * @method \App\Model\Entity\Pillarsarea get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pillarsarea newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pillarsarea[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pillarsarea|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pillarsarea saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pillarsarea patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pillarsarea[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pillarsarea findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PillarsareasTable extends Table
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

        $this->setTable('pillarsareas');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetossprintsretrosactions', [
            'foreignKey' => 'pillarsarea_id'
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
