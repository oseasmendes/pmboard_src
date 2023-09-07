<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetoslearnedlessons Model
 *
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\AproachesTable|\Cake\ORM\Association\BelongsTo $Aproaches
 * @property \App\Model\Table\SeveridadesTable|\Cake\ORM\Association\BelongsTo $Severidades
 *
 * @method \App\Model\Entity\Projetoslearnedlesson get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetoslearnedlesson newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetoslearnedlesson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetoslearnedlesson|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetoslearnedlesson saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetoslearnedlesson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetoslearnedlesson[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetoslearnedlesson findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetoslearnedlessonsTable extends Table
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

        $this->setTable('projetoslearnedlessons');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Aproaches', [
            'foreignKey' => 'aproach_id'
        ]);
        $this->belongsTo('Severidades', [
            'foreignKey' => 'severidade_id'
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
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

        $validator
            ->scalar('casoreferencia')
            ->maxLength('casoreferencia', 4294967295)
            ->allowEmptyString('casoreferencia');

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
        $rules->add($rules->existsIn(['aproach_id'], 'Aproaches'));
        $rules->add($rules->existsIn(['severidade_id'], 'Severidades'));

        return $rules;
    }
}
