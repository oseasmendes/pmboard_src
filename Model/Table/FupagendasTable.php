<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fupagendas Model
 *
 * @property \App\Model\Table\FupqueuesTable|\Cake\ORM\Association\BelongsTo $Fupqueues
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\FupdeployedTable|\Cake\ORM\Association\HasMany $Fupdeployed
 * @property \App\Model\Table\FupinprogresTable|\Cake\ORM\Association\HasMany $Fupinprogres
 * @property \App\Model\Table\FupnotstartedTable|\Cake\ORM\Association\HasMany $Fupnotstarted
 *
 * @method \App\Model\Entity\Fupagenda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fupagenda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fupagenda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fupagenda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupagenda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fupagenda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fupagenda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fupagenda findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FupagendasTable extends Table
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

        $this->setTable('fupagendas');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Fupqueues', [
            'foreignKey' => 'fupqueue_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Fupdeployed', [
            'foreignKey' => 'fupagenda_id'
        ]);

        $this->hasMany('Fupchamados', [
            'foreignKey' => 'fupagenda_id'
        ]);

        $this->hasMany('Fupinprogres', [
            'foreignKey' => 'fupagenda_id'
        ]);
        $this->hasMany('Fupnotstarted', [
            'foreignKey' => 'fupagenda_id'
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
            ->date('checkpointdata')
            ->allowEmptyDate('checkpointdata');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 150)
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
        $rules->add($rules->existsIn(['fupqueue_id'], 'Fupqueues'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));

        return $rules;
    }
}
