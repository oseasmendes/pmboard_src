<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logbooksitems Model
 *
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\LogbooksTable|\Cake\ORM\Association\BelongsTo $Logbooks
 *
 * @method \App\Model\Entity\Logbooksitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Logbooksitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Logbooksitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logbooksitem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logbooksitem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logbooksitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Logbooksitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logbooksitem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LogbooksitemsTable extends Table
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

        $this->setTable('logbooksitems');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Logbooks', [
            'foreignKey' => 'logbook_id'
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
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('hora')
            ->maxLength('hora', 5)
            ->allowEmptyString('hora')
           /* ->add('hora', 'validFormat',[
                'rule' => array('custom', '/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/'),
                'message' => 'Please enter a valid time.'
            ])*/;

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 250)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

        $validator
            ->boolean('notificacao')
            ->allowEmptyString('notificacao');

        $validator
            ->scalar('notificarcontato')
            ->maxLength('notificarcontato', 200)
            ->allowEmptyString('notificarcontato');

        $validator
            ->scalar('responsavel')
            ->maxLength('responsavel', 80)
            ->allowEmptyString('responsavel');
        
        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

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
        $rules->add($rules->existsIn(['projeto_id'], 'Projetos'));
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['logbook_id'], 'Logbooks'));

        return $rules;
    }
}
