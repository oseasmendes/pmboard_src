<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemaprosteps Model
 *
 * @property \App\Model\Table\SistemaproactionsTable|\Cake\ORM\Association\BelongsTo $Sistemaproactions
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\SistemaprostepsfilesTable|\Cake\ORM\Association\HasMany $Sistemaprostepsfiles
 *
 * @method \App\Model\Entity\Sistemaprostep get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemaprostep newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemaprostep[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostep|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemaprostep saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemaprostep patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostep[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostep findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemaprostepsTable extends Table
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

        $this->setTable('sistemaprosteps');
        $this->setDisplayField('description');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemaproactions', [
            'foreignKey' => 'sistemaproaction_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->hasMany('Sistemaprostepsfiles', [
            'foreignKey' => 'sistemaprostep_id'
        ]);

        $this->hasMany('Sistemaprostepsimgs', [
            'foreignKey' => 'sistemaprostep_id'
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
            ->integer('stepaction')
            ->allowEmptyString('stepaction');

        $validator
            ->scalar('description')
            ->maxLength('description', 250)
            ->allowEmptyString('description');

        $validator
            ->scalar('historic')
            ->maxLength('historic', 4294967295)
            ->allowEmptyString('historic');

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
        $rules->add($rules->existsIn(['sistemaproaction_id'], 'Sistemaproactions'));
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));

        return $rules;
    }
}
