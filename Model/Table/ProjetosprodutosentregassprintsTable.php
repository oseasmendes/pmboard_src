<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosentregassprints Model
 *
 * @property \App\Model\Table\ProjetosprodutossprintsTable|\Cake\ORM\Association\BelongsTo $Projetosprodutossprints
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 *
 * @method \App\Model\Entity\Projetosprodutosentregassprint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregassprint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregassprint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregassprint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregassprint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregassprint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregassprint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregassprint findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosentregassprintsTable extends Table
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

        $this->setTable('projetosprodutosentregassprints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutossprints', [
            'foreignKey' => 'projetosprodutossprint_id'
        ]);
        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
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
        $rules->add($rules->existsIn(['projetosprodutossprint_id'], 'Projetosprodutossprints'));
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));

        return $rules;
    }
}
