<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasnotas Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\NotatiposTable|\Cake\ORM\Association\BelongsTo $Notatipos
 *
 * @method \App\Model\Entity\Sistemasnota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasnota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasnota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasnota|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasnota saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasnota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasnota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasnota findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasnotasTable extends Table
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

        $this->setTable('sistemasnotas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Notatipos', [
            'foreignKey' => 'notatipo_id'
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
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

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
        $rules->add($rules->existsIn(['notatipo_id'], 'Notatipos'));

        return $rules;
    }
}
