<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Etapas Model
 *
 * @property |\Cake\ORM\Association\HasMany $Atasdetalhes
 *
 * @method \App\Model\Entity\Etapa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Etapa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Etapa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Etapa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Etapa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Etapa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Etapa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Etapa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EtapasTable extends Table
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

        $this->setTable('etapas');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Atasdetalhes', [
            'foreignKey' => 'etapa_id'
        ]);

        $this->hasMany('Projetoscutovers', [
            'foreignKey' => 'etapa_id'
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
            ->maxLength('descricao', 150)
            ->allowEmptyString('descricao');

        return $validator;
    }
}
