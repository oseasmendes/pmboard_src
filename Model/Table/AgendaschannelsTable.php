<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendaschannels Model
 *
 * @property \App\Model\Table\AgendasnotesTable|\Cake\ORM\Association\HasMany $Agendasnotes
 *
 * @method \App\Model\Entity\Agendaschannel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agendaschannel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agendaschannel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agendaschannel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agendaschannel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agendaschannel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agendaschannel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agendaschannel findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgendaschannelsTable extends Table
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

        $this->setTable('agendaschannels');
        $this->setDisplayField('description');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Agendasnotes', [
            'foreignKey' => 'agendaschannel_id'
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

        return $validator;
    }
}
