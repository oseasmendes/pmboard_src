<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosalocs Model
 *
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ProjetosalocsnotasTable|\Cake\ORM\Association\HasMany $Projetosalocsnotas
 * @property \App\Model\Table\ProjetosalocsprofilesTable|\Cake\ORM\Association\HasMany $Projetosalocsprofiles
 *
 * @method \App\Model\Entity\Projetosaloc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosaloc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosaloc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosaloc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosaloc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosaloc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosaloc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosaloc findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosalocsTable extends Table
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

        $this->setTable('projetosalocs');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosalocsnotas', [
            'foreignKey' => 'projetosaloc_id'
        ]);
        $this->hasMany('Projetosalocsprofiles', [
            'foreignKey' => 'projetosaloc_id'
        ]);

        $this->belongsTo('Tipoalocs', [
            'foreignKey' => 'tipoaloc_id'
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
            ->dateTime('dataalocacao')
            ->allowEmptyDateTime('dataalocacao');

        $validator
            ->date('desalocacaoprevista')
            ->allowEmptyDate('desalocacaoprevista');

        $validator
            ->date('desalocacaorealizada')
            ->allowEmptyDate('desalocacaorealizada');


         $validator
            ->dateTime('dataalocacao')
            ->allowEmptyDateTime('dataalocacao');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');
        
        $validator
            ->decimal('percentual')
            ->allowEmptyString('percentual');

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
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['tipoaloc_id'], 'Tipoalocs'));

        return $rules;
    }
}
