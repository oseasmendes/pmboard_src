<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemaprostepsfiles Model
 *
 * @property \App\Model\Table\SistemaprostepsTable|\Cake\ORM\Association\BelongsTo $Sistemaprosteps
 *
 * @method \App\Model\Entity\Sistemaprostepsfile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemaprostepsfile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemaprostepsfile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostepsfile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemaprostepsfile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemaprostepsfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostepsfile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostepsfile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemaprostepsfilesTable extends Table
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

        $this->setTable('sistemaprostepsfiles');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemaprosteps', [
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
            ->scalar('descricao')
            ->maxLength('descricao', 250)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('nomearquivo')
            ->maxLength('nomearquivo', 150)
            ->allowEmptyString('nomearquivo');

        $validator
            ->scalar('detalhes')
            ->maxLength('detalhes', 4294967295)
            ->allowEmptyString('detalhes');

        $validator
            ->scalar('extensao')
            ->maxLength('extensao', 5)
            ->allowEmptyString('extensao');

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
        $rules->add($rules->existsIn(['sistemaprostep_id'], 'Sistemaprosteps'));

        return $rules;
    }
}
