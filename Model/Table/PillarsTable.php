<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pillars Model
 *
 * @property \App\Model\Table\ProjetossprintsretrosactionsTable|\Cake\ORM\Association\HasMany $Projetossprintsretrosactions
 *
 * @method \App\Model\Entity\Pillar get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pillar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pillar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pillar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pillar saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pillar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pillar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pillar findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PillarsTable extends Table
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

        $this->setTable('pillars');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetossprintsretrosactions', [
            'foreignKey' => 'pillar_id'
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
            ->scalar('aplicacao')
            ->maxLength('aplicacao', 45)
            ->allowEmptyString('aplicacao');

        return $validator;
    }
}
