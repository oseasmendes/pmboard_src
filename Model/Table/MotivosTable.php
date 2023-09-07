<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Motivos Model
 *
 * @property \App\Model\Table\ProjetosstatusTable|\Cake\ORM\Association\HasMany $Projetosstatus
 *
 * @method \App\Model\Entity\Motivo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Motivo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Motivo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Motivo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motivo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Motivo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Motivo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Motivo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MotivosTable extends Table
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

        $this->setTable('motivos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Motivostipos', [
            'foreignKey' => 'motivostipo_id'
        ]);


        $this->hasMany('Projetosstatus', [
            'foreignKey' => 'motivo_id'
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
            ->maxLength('descricao', 100)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('indicador')
            ->maxLength('indicador', 45)
            ->allowEmptyString('indicador');

        return $validator;
    }

     public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['motivostipo_id'], 'Motivostipos'));

        return $rules;
    }

}
