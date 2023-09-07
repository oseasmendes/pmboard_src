<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgintegrations Model
 *
 * @property \App\Model\Table\TecnologiasTable|\Cake\ORM\Association\BelongsTo $Tecnologias
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\IntegrationsTable|\Cake\ORM\Association\BelongsTo $Integrations
 *
 * @method \App\Model\Entity\Sistemascfgintegration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgintegration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgintegration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgintegration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgintegration saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgintegration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgintegration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgintegration findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgintegrationsTable extends Table
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

        $this->setTable('sistemascfgintegrations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tecnologias', [
            'foreignKey' => 'tecnologia_id'
        ]);
      
        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistemaorigem_id'
        ]);


        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistemadestino_id'
        ]);

        $this->belongsTo('Integrations', [
            'foreignKey' => 'integration_id'
        ]);

        $this->belongsTo('Sistemascfgtransactions', [
            'foreignKey' => 'sistemacfgtransaction_id'
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
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('referenciadirecao')
            ->maxLength('referenciadirecao', 255)
            ->allowEmptyString('referenciadirecao');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('contato')
            ->maxLength('contato', 255)
            ->allowEmptyString('contato');

        $validator
            ->scalar('transacao')
            ->maxLength('transacao', 55)
            ->allowEmptyString('transacao');

        $validator
            ->scalar('transacaodescricao')
            ->maxLength('transacaodescricao', 255)
            ->allowEmptyString('transacaodescricao');


        $validator
            ->scalar('observacao')
            ->maxLength('observacao', 4294967295)
            ->allowEmptyString('observacao');

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
        $rules->add($rules->existsIn(['tecnologia_id'], 'Tecnologias'));
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));
        $rules->add($rules->existsIn(['sistemaorigem_id'], 'Sistemas'));
        $rules->add($rules->existsIn(['sistemadestino_id'], 'Sistemas'));
        $rules->add($rules->existsIn(['integration_id'], 'Integrations'));
         $rules->add($rules->existsIn(['sistemacfgtransaction_id'], 'Sistemascfgtransactions'));

        return $rules;
    }
}
