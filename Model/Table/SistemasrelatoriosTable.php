<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasrelatorios Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 *
 * @method \App\Model\Entity\Sistemasrelatorio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasrelatorio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasrelatorio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasrelatorio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasrelatorio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasrelatorio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasrelatorio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasrelatorio findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasrelatoriosTable extends Table
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

        $this->setTable('sistemasrelatorios');
        $this->setDisplayField('name');
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
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->date('datacriacao')
            ->allowEmptyDate('datacriacao');

        $validator
            ->scalar('cabnumer')
            ->maxLength('cabnumer', 10)
            ->allowEmptyString('cabnumer');

        $validator
            ->scalar('requestnumber')
            ->maxLength('requestnumber', 10)
            ->allowEmptyString('requestnumber');

        $validator
            ->scalar('objective')
            ->maxLength('objective', 4294967295)
            ->allowEmptyString('objective');

        $validator
            ->scalar('script')
            ->maxLength('script', 4294967295)
            ->allowEmptyString('script');

        $validator
            ->scalar('version')
            ->maxLength('version', 5)
            ->allowEmptyString('version');

        $validator
            ->boolean('descontinuado')
            ->allowEmptyString('descontinuado');

        $validator
            ->date('descontinuadodata')
            ->allowEmptyDate('descontinuadodata');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->scalar('relatoriobase')
            ->maxLength('relatoriobase', 45)
            ->allowEmptyString('relatoriobase');

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
