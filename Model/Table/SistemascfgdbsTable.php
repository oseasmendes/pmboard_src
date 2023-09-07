<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgdbs Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\BancosTable|\Cake\ORM\Association\BelongsTo $Bancos
 * @property \App\Model\Table\SistemascfgdbdetsTable|\Cake\ORM\Association\HasMany $Sistemascfgdbdets
 *
 * @method \App\Model\Entity\Sistemascfgdb get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgdb newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgdb[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgdb|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgdb saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgdb patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgdb[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgdb findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgdbsTable extends Table
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

        $this->setTable('sistemascfgdbs');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Bancos', [
            'foreignKey' => 'banco_id'
        ]);

        $this->belongsTo('Ambientes', [
            'foreignKey' => 'ambiente_id'
        ]);

        $this->hasMany('Sistemascfgdbdets', [
            'foreignKey' => 'sistemascfgdb_id'
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
            ->scalar('contato')
            ->maxLength('contato', 45)
            ->allowEmptyString('contato');

        $validator
            ->scalar('ipaddress')
            ->maxLength('ipaddress', 45)
            ->allowEmptyString('ipaddress');

        $validator
            ->scalar('conn')
            ->maxLength('conn', 255)
            ->allowEmptyString('conn');
        
        $validator
            ->scalar('host')
            ->maxLength('host', 45)
            ->allowEmptyString('host');


        $validator
            ->scalar('urlresumida')
            ->maxLength('urlresumida', 255)
            ->allowEmptyString('urlresumida');


        $validator
            ->scalar('url')
            ->maxLength('url', 4294967295)
            ->allowEmptyString('url');           
        

        $validator
            ->scalar('versao')
            ->maxLength('versao', 45)
            ->allowEmptyString('versao');

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
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));
        $rules->add($rules->existsIn(['banco_id'], 'Bancos'));
        $rules->add($rules->existsIn(['ambiente_id'], 'Ambientes'));
        return $rules;
    }
}
