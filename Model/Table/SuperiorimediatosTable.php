<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Superiorimediatos Model
 *
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\HasMany $Consultores
 * @property \App\Model\Table\ProjetousuariosTable|\Cake\ORM\Association\HasMany $Projetousuarios
 *
 * @method \App\Model\Entity\Superiorimediato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Superiorimediato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Superiorimediato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Superiorimediato|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Superiorimediato saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Superiorimediato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Superiorimediato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Superiorimediato findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SuperiorimediatosTable extends Table
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

        $this->setTable('superiorimediatos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Consultores', [
            'foreignKey' => 'superiorimediato_id'
        ]);
        $this->hasMany('Projetousuarios', [
            'foreignKey' => 'superiorimediato_id'
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        return $validator;
    }
}
