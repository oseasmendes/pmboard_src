<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregasnotas Model
 *
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 * @property \App\Model\Table\NotatiposTable|\Cake\ORM\Association\BelongsTo $Notatipos
 *
 * @method \App\Model\Entity\Projetosentregasnota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregasnota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregasnota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasnota|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasnota saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasnota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasnota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasnota findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregasnotasTable extends Table
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

        $this->setTable('projetosentregasnotas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
        $this->belongsTo('Notatipos', [
            'foreignKey' => 'notatipo_id'
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
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

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
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));
        $rules->add($rules->existsIn(['notatipo_id'], 'Notatipos'));

        return $rules;
    }
}
