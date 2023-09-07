<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Centrocustos Model
 *
 * @property \App\Model\Table\PropostasTable|\Cake\ORM\Association\HasMany $Propostas
 *
 * @method \App\Model\Entity\Centrocusto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Centrocusto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Centrocusto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Centrocusto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Centrocusto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Centrocusto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Centrocusto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Centrocusto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CentrocustosTable extends Table
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

        $this->setTable('centrocustos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Propostas', [
            'foreignKey' => 'centrocusto_id'
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
            ->scalar('codigoexterno')
            ->maxLength('codigoexterno', 10)
            ->allowEmptyString('codigoexterno');

        return $validator;
    }
}
