<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosgroomings Model
 *
 * @property \App\Model\Table\ProjetossprintsTable|\Cake\ORM\Association\BelongsTo $Projetossprints
 * @property \App\Model\Table\ProjetosgroomingsitemsTable|\Cake\ORM\Association\HasMany $Projetosgroomingsitems
 *
 * @method \App\Model\Entity\Projetosgrooming get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosgrooming newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosgrooming[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosgrooming|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosgrooming saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosgrooming patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosgrooming[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosgrooming findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosgroomingsTable extends Table
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

        $this->setTable('projetosgroomings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetossprints', [
            'foreignKey' => 'projetossprint_id'
        ]);
        $this->hasMany('Projetosgroomingsitems', [
            'foreignKey' => 'projetosgrooming_id'
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
            ->date('date')
            ->allowEmptyDate('date');

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
        $rules->add($rules->existsIn(['projetossprint_id'], 'Projetossprints'));

        return $rules;
    }
}
