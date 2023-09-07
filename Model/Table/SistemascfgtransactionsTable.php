<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgtransactions Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\SistemascfgintegrationsTable|\Cake\ORM\Association\HasMany $Sistemascfgintegrations
 *
 * @method \App\Model\Entity\Sistemascfgtransaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgtransaction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgtransaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgtransaction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgtransaction saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgtransaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgtransaction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgtransaction findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgtransactionsTable extends Table
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

        $this->setTable('sistemascfgtransactions');
        $this->setDisplayField('nometransacao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemascfgintegrations', [
            'foreignKey' => 'sistemascfgtransaction_id'
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
            ->scalar('nometransacao')
            ->maxLength('nometransacao', 45)
            ->allowEmptyString('nometransacao')
            ->add('nometransacao', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('descricaotecnica')
            ->maxLength('descricaotecnica', 4294967295)
            ->allowEmptyString('descricaotecnica');

        $validator
            ->scalar('urlreferencia')
            ->maxLength('urlreferencia', 255)
            ->allowEmptyString('urlreferencia');

        $validator
            ->scalar('modulo')
            ->maxLength('modulo', 45)
            ->allowEmptyString('modulo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nometransacao']));
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));

        return $rules;
    }
}
