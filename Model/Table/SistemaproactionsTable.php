<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemaproactions Model
 *
 * @property \App\Model\Table\SistemasprocessosTable|\Cake\ORM\Association\BelongsTo $Sistemasprocessos
 * @property \App\Model\Table\EventosTable|\Cake\ORM\Association\BelongsTo $Eventos
 * @property \App\Model\Table\SistemaprostepsTable|\Cake\ORM\Association\HasMany $Sistemaprosteps
 *
 * @method \App\Model\Entity\Sistemaproaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemaproaction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemaproaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaproaction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemaproaction saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemaproaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaproaction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaproaction findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemaproactionsTable extends Table
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

        $this->setTable('sistemaproactions');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemasprocessos', [
            'foreignKey' => 'sistemasprocesso_id'
        ]);
        $this->belongsTo('Eventos', [
            'foreignKey' => 'evento_id'
        ]);
        $this->hasMany('Sistemaprosteps', [
            'foreignKey' => 'sistemaproaction_id'
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
            ->maxLength('descricao', 250)
            ->allowEmptyString('descricao');

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
        $rules->add($rules->existsIn(['sistemasprocesso_id'], 'Sistemasprocessos'));
        $rules->add($rules->existsIn(['evento_id'], 'Eventos'));

        return $rules;
    }
}
