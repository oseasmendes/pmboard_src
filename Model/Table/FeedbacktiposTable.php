<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Feedbacktipos Model
 *
 * @property \App\Model\Table\ProjetosprodutosfeedbacksTable|\Cake\ORM\Association\HasMany $Projetosprodutosfeedbacks
 *
 * @method \App\Model\Entity\Feedbacktipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feedbacktipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Feedbacktipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feedbacktipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feedbacktipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feedbacktipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feedbacktipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feedbacktipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FeedbacktiposTable extends Table
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

        $this->setTable('feedbacktipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetosprodutosfeedbacks', [
            'foreignKey' => 'feedbacktipo_id'
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
