<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgurls Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\SistemasdocsTable|\Cake\ORM\Association\BelongsTo $Sistemasdocs
 *
 * @method \App\Model\Entity\Sistemascfgurl get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgurl newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgurl[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgurl|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgurl saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgurl patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgurl[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgurl findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgurlsTable extends Table
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

        $this->setTable('sistemascfgurls');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Sistemasdocs', [
            'foreignKey' => 'sistemasdoc_id'
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
            ->maxLength('descricao', 200)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('detalhes')
            ->maxLength('detalhes', 4294967295)
            ->allowEmptyString('detalhes');
        
        $validator
            ->scalar('url')
            ->maxLength('url', 4294967295)
            ->allowEmptyString('url');

        $validator
            ->scalar('urlresumida')
            ->maxLength('urlresumida', 255)
            ->allowEmptyString('urlresumida');

        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 45)
            ->allowEmptyString('observacao');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');



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
        $rules->add($rules->existsIn(['sistemasdoc_id'], 'Sistemasdocs'));

        return $rules;
    }
}
