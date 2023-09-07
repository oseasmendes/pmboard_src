<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgfronts Model
 *
 * @property \App\Model\Table\TecnologiasTable|\Cake\ORM\Association\BelongsTo $Tecnologias
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 *
 * @method \App\Model\Entity\Sistemascfgfront get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgfront newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgfront[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgfront|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgfront saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgfront patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgfront[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgfront findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgfrontsTable extends Table
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

        $this->setTable('sistemascfgfronts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tecnologias', [
            'foreignKey' => 'tecnologia_id'
        ]);
        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
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
            ->decimal('percentual')
            ->allowEmptyString('percentual');

        $validator
            ->scalar('versao')
            ->maxLength('versao', 45)
            ->allowEmptyString('versao');

        $validator
            ->dateTime('ultimaatualizacao')
            ->allowEmptyDateTime('ultimaatualizacao');

        $validator
            ->scalar('motivoatualizacao')
            ->maxLength('motivoatualizacao', 255)
            ->allowEmptyString('motivoatualizacao');

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
        $rules->add($rules->existsIn(['tecnologia_id'], 'Tecnologias'));
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));

        return $rules;
    }
}
