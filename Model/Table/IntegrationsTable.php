<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Integrations Model
 *
 * @property \App\Model\Table\BancosTable|\Cake\ORM\Association\BelongsTo $Bancos
 * @property \App\Model\Table\TecnologiasTable|\Cake\ORM\Association\BelongsTo $Tecnologias
 * @property \App\Model\Table\SistemascfgintegrationsTable|\Cake\ORM\Association\HasMany $Sistemascfgintegrations
 *
 * @method \App\Model\Entity\Integration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Integration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Integration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Integration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Integration saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Integration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Integration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Integration findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IntegrationsTable extends Table
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

        $this->setTable('integrations');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Bancos', [
            'foreignKey' => 'banco_id'
        ]);
        $this->belongsTo('Tecnologias', [
            'foreignKey' => 'tecnologia_id'
        ]);
        $this->hasMany('Sistemascfgintegrations', [
            'foreignKey' => 'integration_id'
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
            ->scalar('referencia')
            ->maxLength('referencia', 20)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('servico')
            ->maxLength('servico', 255)
            ->allowEmptyString('servico');

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
        $rules->add($rules->existsIn(['banco_id'], 'Bancos'));
        $rules->add($rules->existsIn(['tecnologia_id'], 'Tecnologias'));

        return $rules;
    }
}
