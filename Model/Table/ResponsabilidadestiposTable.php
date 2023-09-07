<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Responsabilidadestipos Model
 *
 * @property \App\Model\Table\ResponsabilidadesTable|\Cake\ORM\Association\HasMany $Responsabilidades
 *
 * @method \App\Model\Entity\Responsabilidadestipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Responsabilidadestipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Responsabilidadestipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Responsabilidadestipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsabilidadestipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsabilidadestipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Responsabilidadestipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Responsabilidadestipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ResponsabilidadestiposTable extends Table
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

        $this->setTable('responsabilidadestipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Responsabilidades', [
            'foreignKey' => 'responsabilidadestipo_id'
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
