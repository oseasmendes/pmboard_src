<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregasopprespostas Model
 *
 * @property \App\Model\Table\ProjetosentregasopenpointsTable|\Cake\ORM\Association\BelongsTo $Projetosentregasopenpoints
 *
 * @method \App\Model\Entity\Projetosentregasoppresposta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregasoppresposta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregasoppresposta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasoppresposta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasoppresposta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasoppresposta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasoppresposta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasoppresposta findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregasopprespostasTable extends Table
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

        $this->setTable('projetosentregasopprespostas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosentregasopenpoints', [
            'foreignKey' => 'projetosentregasopenpoint_id'
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
            ->scalar('respondidopor')
            ->maxLength('respondidopor', 80)
            ->allowEmptyString('respondidopor');

        $validator
            ->scalar('respondidopara')
            ->maxLength('respondidopara', 80)
            ->allowEmptyString('respondidopara');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('resumo')
            ->maxLength('resumo', 4294967295)
            ->allowEmptyString('resumo');

        $validator
            ->scalar('docreferencia')
            ->maxLength('docreferencia', 255)
            ->allowEmptyString('docreferencia');

        $validator
            ->date('docdata')
            ->allowEmptyDate('docdata');

        $validator
            ->scalar('doccanal')
            ->maxLength('doccanal', 45)
            ->allowEmptyString('doccanal');

        $validator
            ->scalar('docassunto')
            ->maxLength('docassunto', 255)
            ->allowEmptyString('docassunto');

        $validator
            ->boolean('planoacao')
            ->allowEmptyString('planoacao');

        $validator
            ->boolean('validado')
            ->allowEmptyString('validado');

        $validator
            ->scalar('conclusao')
            ->maxLength('conclusao', 4294967295)
            ->allowEmptyString('conclusao');

        $validator
            ->scalar('statusprojeto')
            ->maxLength('statusprojeto', 45)
            ->allowEmptyString('statusprojeto');

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
        $rules->add($rules->existsIn(['projetosentregasopenpoint_id'], 'Projetosentregasopenpoints'));

        return $rules;
    }
}
