<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregasreqsrefsents Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Projetosentregasreqsreves
 *
 * @method \App\Model\Entity\Projetosentregasreqsrefsent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsent findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregasreqsrefsentsTable extends Table
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

        $this->setTable('projetosentregasreqsrefsents');
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
            ->scalar('tabela')
            ->maxLength('tabela', 45)
            ->allowEmptyString('tabela');

        $validator
            ->scalar('campo')
            ->maxLength('campo', 45)
            ->allowEmptyString('campo');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 45)
            ->allowEmptyString('tipo');

        $validator
            ->scalar('formato')
            ->maxLength('formato', 45)
            ->allowEmptyString('formato');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 254)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('chave')
            ->maxLength('chave', 2)
            ->allowEmptyString('chave');

        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 4294967295)
            ->allowEmptyString('comentario');
        
        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');

            $validator
            ->boolean('descontinuado')
            ->allowEmptyString('descontinuado');

        $validator
            ->boolean('naoprevisto')
            ->allowEmptyString('descontinuado');
        
        $validator
            ->boolean('original')
            ->allowEmptyString('original');
        
        $validator
            ->boolean('modificado')
            ->allowEmptyString('modificado');



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
