<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bancos Model
 *
 * @property \App\Model\Table\IntegrationsTable|\Cake\ORM\Association\HasMany $Integrations
 * @property \App\Model\Table\ShAppbancosTable|\Cake\ORM\Association\HasMany $ShAppbancos
 * @property \App\Model\Table\SistemascfgdbsTable|\Cake\ORM\Association\HasMany $Sistemascfgdbs
 *
 * @method \App\Model\Entity\Banco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Banco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Banco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Banco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Banco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Banco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Banco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Banco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BancosTable extends Table
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

        $this->setTable('bancos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Integrations', [
            'foreignKey' => 'banco_id'
        ]);
        $this->hasMany('ShAppbancos', [
            'foreignKey' => 'banco_id'
        ]);
        $this->hasMany('Sistemascfgdbs', [
            'foreignKey' => 'banco_id'
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
