<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultorias Model
 *
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\HasMany $Consultores
 *
 * @method \App\Model\Entity\Consultoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultoria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consultoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultoria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoria findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConsultoriasTable extends Table
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

        $this->setTable('consultorias');
        $this->setDisplayField('razaosocial');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Consultores', [
            'foreignKey' => 'consultoria_id'
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
            ->scalar('razaosocial')
            ->maxLength('razaosocial', 255)
            ->allowEmptyString('razaosocial');

        $validator
            ->scalar('site')
            ->maxLength('site', 255)
            ->allowEmptyString('site');

        return $validator;
    }
}
