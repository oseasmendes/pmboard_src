<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Knowhows Model
 *
 * @property \App\Model\Table\ConsultoresvrstecnologiasTable|\Cake\ORM\Association\HasMany $Consultoresvrstecnologias
 * @property \App\Model\Table\SistemasconsultoresTable|\Cake\ORM\Association\HasMany $Sistemasconsultores
 * @property \App\Model\Table\SistemasusuariosTable|\Cake\ORM\Association\HasMany $Sistemasusuarios
 *
 * @method \App\Model\Entity\Knowhow get($primaryKey, $options = [])
 * @method \App\Model\Entity\Knowhow newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Knowhow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Knowhow|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Knowhow saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Knowhow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Knowhow[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Knowhow findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KnowhowsTable extends Table
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

        $this->setTable('knowhows');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Consultoresvrstecnologias', [
            'foreignKey' => 'knowhow_id'
        ]);
        $this->hasMany('Sistemasconsultores', [
            'foreignKey' => 'knowhow_id'
        ]);
        $this->hasMany('Sistemasusuarios', [
            'foreignKey' => 'knowhow_id'
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
            ->decimal('peso')
            ->allowEmptyString('peso');

        return $validator;
    }
}
