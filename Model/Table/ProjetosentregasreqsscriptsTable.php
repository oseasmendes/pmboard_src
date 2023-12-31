<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregasreqsscripts Model
 *
 * @property \App\Model\Table\ProjetosentregasreqsrevesTable|\Cake\ORM\Association\BelongsTo $Projetosentregasreqsreves
 *
 * @method \App\Model\Entity\Projetosentregasreqsscript get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsscript newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsscript[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsscript|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsscript saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsscript patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsscript[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsscript findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregasreqsscriptsTable extends Table
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

        $this->setTable('projetosentregasreqsscripts');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosentregasreqsrefs', [
            'foreignKey' => 'projetosentregasreqsref_id'
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('scriptsemantic')
            ->maxLength('scriptsemantic', 4294967295)
            ->allowEmptyString('scriptsemantic');

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
        
        $rules->add($rules->existsIn(['projetosentregasreqsref_id'], 'Projetosentregasreqsrefs'));
        return $rules;
    }
}
