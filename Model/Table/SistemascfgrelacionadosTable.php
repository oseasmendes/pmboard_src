<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgrelacionados Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property |\Cake\ORM\Association\BelongsTo $Sistemarelacionados
 * @property |\Cake\ORM\Association\BelongsTo $Ambientes
 *
 * @method \App\Model\Entity\Sistemascfgrelacionado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgrelacionado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgrelacionado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgrelacionado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgrelacionado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgrelacionado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgrelacionado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgrelacionado findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgrelacionadosTable extends Table
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

        $this->setTable('sistemascfgrelacionados');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
       /* $this->belongsTo('Sistemarelacionados', [
            'foreignKey' => 'sistemarelacionado_id'
        ]); */
        $this->belongsTo('Ambientes', [
            'foreignKey' => 'ambiente_id'
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
            ->scalar('branch')
            ->maxLength('branch', 255)
            ->allowEmptyString('branch');

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
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));
       // $rules->add($rules->existsIn(['sistemarelacionado_id'], 'Sistemarelacionados'));
        $rules->add($rules->existsIn(['ambiente_id'], 'Ambientes'));

        return $rules;
    }
}
