<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ViewProjetotimings Model
 *
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 *
 * @method \App\Model\Entity\ViewProjetotiming get($primaryKey, $options = [])
 * @method \App\Model\Entity\ViewProjetotiming newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ViewProjetotiming[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ViewProjetotiming|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewProjetotiming saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ViewProjetotiming patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ViewProjetotiming[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ViewProjetotiming findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ViewProjetotimingsTable extends Table
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

        $this->setTable('view_projetotimings');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id',
            'joinType' => 'INNER'
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->dateTime('datainicio')
            ->allowEmptyDateTime('datainicio');

        $validator
            ->dateTime('datafim')
            ->allowEmptyDateTime('datafim');

        $validator
            ->decimal('tmpdisponiveldadata')
            ->allowEmptyString('tmpdisponiveldadata');

        $validator
            ->decimal('tmpdisponiveldehoje')
            ->allowEmptyString('tmpdisponiveldehoje');

        $validator
            ->decimal('tmpaberturadadata')
            ->allowEmptyString('tmpaberturadadata');

        $validator
            ->decimal('tmpaberturaddehoje')
            ->allowEmptyString('tmpaberturaddehoje');

        $validator
            ->allowEmptyString('totaldediasuteisdadata');

        $validator
            ->allowEmptyString('totaldediasuteisdehoje');

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
        $rules->add($rules->existsIn(['projeto_id'], 'Projetos'));

        return $rules;
    }
}
