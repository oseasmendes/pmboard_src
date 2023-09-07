<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasareas Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 *
 * @method \App\Model\Entity\Sistemasarea get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasarea newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasarea[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasarea|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasarea saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasarea patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasarea[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasarea findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasareasTable extends Table
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

        $this->setTable('sistemasareas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
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
            ->scalar('contato')
            ->maxLength('contato', 255)
            ->allowEmptyString('contato');

        $validator
            ->integer('quantidadeusuarios')
            ->allowEmptyString('quantidadeusuarios');

        $validator
            ->integer('quantidadelicencas')
            ->allowEmptyString('quantidadelicencas');

        $validator
            ->scalar('tipolicenca')
            ->maxLength('tipolicenca', 45)
            ->allowEmptyString('tipolicenca');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('papeldocontato')
            ->maxLength('papeldocontato', 255)
            ->allowEmptyString('papeldocontato');

        $validator
            ->scalar('contatoramal')
            ->maxLength('contatoramal', 45)
            ->allowEmptyString('contatoramal');

        $validator
            ->scalar('contatoemail')
            ->maxLength('contatoemail', 255)
            ->allowEmptyString('contatoemail');

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
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));

        return $rules;
    }
}
