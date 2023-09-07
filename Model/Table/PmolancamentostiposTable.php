<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pmolancamentostipos Model
 *
 * @property \App\Model\Table\PmocapacitytransactionsTable|\Cake\ORM\Association\HasMany $Pmocapacitytransactions
 *
 * @method \App\Model\Entity\Pmolancamentostipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pmolancamentostipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pmolancamentostipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pmolancamentostipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pmolancamentostipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pmolancamentostipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pmolancamentostipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pmolancamentostipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PmolancamentostiposTable extends Table
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

        $this->setTable('pmolancamentostipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Pmocapacitytransactions', [
            'foreignKey' => 'pmolancamentostipo_id'
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
            ->scalar('resumo')
            ->maxLength('resumo', 255)
            ->allowEmptyString('resumo');

        $validator
            ->scalar('calculacapacidade')
            ->maxLength('calculacapacidade', 1)
            ->allowEmptyString('calculacapacidade');

        $validator
            ->scalar('operacao')
            ->maxLength('operacao', 1)
            ->allowEmptyString('operacao');

        $validator
            ->integer('ativo')
            ->allowEmptyString('ativo');

        return $validator;
    }
}
