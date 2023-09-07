<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasobjetos Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\ProjetosentregasreqsrefsobjsTable|\Cake\ORM\Association\HasMany $Projetosentregasreqsrefsobjs
 *
 * @method \App\Model\Entity\Sistemasobjeto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasobjeto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasobjeto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasobjeto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasobjeto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasobjeto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasobjeto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasobjeto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasobjetosTable extends Table
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

        $this->setTable('sistemasobjetos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->belongsTo('Objetostipos', [
            'foreignKey' => 'objetostipo_id'
        ]);

        $this->hasMany('Projetosentregasreqsrefsobjs', [
            'foreignKey' => 'sistemasobjeto_id'
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome')
            ->add('nome', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('objetivo')
            ->maxLength('objetivo', 4294967295)
            ->allowEmptyString('objetivo');

      
        $validator
            ->scalar('lastversion')
            ->maxLength('lastversion', 5)
            ->allowEmptyString('lastversion');

        $validator
            ->scalar('analisepor')
            ->maxLength('analisepor', 45)
            ->allowEmptyString('analisepor');

        $validator
            ->date('desenvolvidoem')
            ->allowEmptyDate('desenvolvidoem');

        $validator
            ->scalar('desenvolvidopor')
            ->maxLength('desenvolvidopor', 45)
            ->allowEmptyString('desenvolvidopor');

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
        $rules->add($rules->isUnique(['nome']));
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));
        $rules->add($rules->existsIn(['objetostipo_id'], 'Objetostipos'));

        return $rules;
    }
}
