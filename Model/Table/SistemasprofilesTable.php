<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasprofiles Model
 *
 * @property \App\Model\Table\ResponsabilidadesTable|\Cake\ORM\Association\BelongsTo $Responsabilidades
 * @property \App\Model\Table\SistemasprofilescontractsTable|\Cake\ORM\Association\HasMany $Sistemasprofilescontracts
 *
 * @method \App\Model\Entity\Sistemasprofile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasprofile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasprofile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasprofile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasprofile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasprofile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasprofile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasprofile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasprofilesTable extends Table
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

        $this->setTable('sistemasprofiles');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Responsabilidades', [
            'foreignKey' => 'responsabilidade_id'
        ]);
        $this->hasMany('Sistemasprofilescontracts', [
            'foreignKey' => 'sistemasprofile_id'
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
            ->scalar('objetivos')
            ->maxLength('objetivos', 4294967295)
            ->allowEmptyString('objetivos');

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
        $rules->add($rules->existsIn(['responsabilidade_id'], 'Responsabilidades'));

        return $rules;
    }
}
