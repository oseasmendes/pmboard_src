<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atividades Model
 *
 * @property |\Cake\ORM\Association\HasMany $Apontamentos
 * @property \App\Model\Table\AtasdetalhesTable|\Cake\ORM\Association\HasMany $Atasdetalhes
 * @property |\Cake\ORM\Association\HasMany $Psofficeetlatividades
 *
 * @method \App\Model\Entity\Atividade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atividade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atividade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atividade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atividade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atividade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atividade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atividade findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtividadesTable extends Table
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

        $this->setTable('atividades');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Apontamentos', [
            'foreignKey' => 'atividade_id'
        ]);
        $this->hasMany('Atasdetalhes', [
            'foreignKey' => 'atividade_id'
        ]);
        $this->hasMany('Psofficeetlatividades', [
            'foreignKey' => 'atividade_id'
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

        return $validator;
    }
}
