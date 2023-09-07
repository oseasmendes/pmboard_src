<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosprodutosentregasflws Model
 *
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 * @property \App\Model\Table\MotivosTable|\Cake\ORM\Association\BelongsTo $Motivos
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 *
 * @method \App\Model\Entity\Projetosprodutosentregasflw get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregasflw newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregasflw[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregasflw|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregasflw saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregasflw patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregasflw[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosprodutosentregasflw findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosprodutosentregasflwsTable extends Table
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

        $this->setTable('projetosprodutosentregasflws');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
        $this->belongsTo('Motivos', [
            'foreignKey' => 'motivo_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);

        $this->belongsTo('Kronusitems', [
            'foreignKey' => 'kronusitem_id'
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
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->scalar('who')
            ->maxLength('who', 45)
            ->allowEmptyString('who');
        
        $validator
            ->scalar('forwho')
            ->maxLength('forwho', 45)
            ->allowEmptyString('forwho');    

        $validator
            ->scalar('actwho')
            ->maxLength('actwho', 45)
            ->allowEmptyString('actwho');    

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

         $validator
            ->scalar('forum')
            ->maxLength('forum', 255)
            ->allowEmptyString('forum');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

        $validator
            ->scalar('encerraevidencia')
            ->maxLength('encerraevidencia', 255)
            ->allowEmptyString('encerraevidencia');
        
        $validator
            ->scalar('encerradopor')
            ->maxLength('encerradopor', 45)
            ->allowEmptyString('encerradopor');

        $validator
            ->boolean('encerraatividade')
            ->allowEmptyString('encerraatividade');

        $validator
            ->boolean('iniciaatividade')
            ->allowEmptyString('iniciaatividade');

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
        $rules->add($rules->existsIn(['motivo_id'], 'Motivos'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['kronusitem_id'], 'Kronusitems'));

        return $rules;
    }
}
