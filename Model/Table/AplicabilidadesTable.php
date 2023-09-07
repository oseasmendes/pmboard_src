<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aplicabilidades Model
 *
 * @property \App\Model\Table\SistemasriscosTable|\Cake\ORM\Association\HasMany $Sistemasriscos
 *
 * @method \App\Model\Entity\Aplicabilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aplicabilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aplicabilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aplicabilidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aplicabilidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aplicabilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aplicabilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aplicabilidade findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AplicabilidadesTable extends Table
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

        $this->setTable('aplicabilidades');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sistemasriscos', [
            'foreignKey' => 'aplicabilidade_id'
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
