<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atividadetipos Model
 *
 * @property \App\Model\Table\AgendasTable|\Cake\ORM\Association\HasMany $Agendas
 *
 * @method \App\Model\Entity\Atividadetipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atividadetipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atividadetipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atividadetipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atividadetipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atividadetipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atividadetipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atividadetipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtividadetiposTable extends Table
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

        $this->setTable('atividadetipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Agendas', [
            'foreignKey' => 'atividadetipo_id'
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
            ->boolean('notificacao')
            ->allowEmptyString('notificacao');

        $validator
            ->boolean('tecnica')
            ->allowEmptyString('tecnica');

        return $validator;
    }
}
