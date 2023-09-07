<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Competencias Model
 *
 * @property \App\Model\Table\ProjetosalocacoespapeisTable|\Cake\ORM\Association\HasMany $Projetosalocacoespapeis
 *
 * @method \App\Model\Entity\Competencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Competencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Competencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Competencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Competencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Competencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Competencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Competencia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompetenciasTable extends Table
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

        $this->setTable('competencias');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetosalocacoespapeis', [
            'foreignKey' => 'competencia_id'
        ]);

        $this->hasMany('Projetosprodutosentregasalocs', [
            'foreignKey' => 'competencia_id'
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
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('resumo')
            ->maxLength('resumo', 45)
            ->allowEmptyString('resumo');
        
        
        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');


        return $validator;
    }
}
