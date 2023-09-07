<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Programas Model
 *
 * @property \App\Model\Table\PortfoliosTable|\Cake\ORM\Association\BelongsTo $Portfolios
 * @property |\Cake\ORM\Association\HasMany $Fivewthreehs
 * @property \App\Model\Table\ProgramasnotasTable|\Cake\ORM\Association\HasMany $Programasnotas
 * @property \App\Model\Table\ProgramasplanotaxasTable|\Cake\ORM\Association\HasMany $Programasplanotaxas
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\HasMany $Projetos
 * @property |\Cake\ORM\Association\HasMany $Todos
 *
 * @method \App\Model\Entity\Programa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Programa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Programa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Programa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Programa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Programa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProgramasTable extends Table
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

        $this->setTable('programas');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Portfolios', [
            'foreignKey' => 'portfolio_id'
        ]);
        $this->hasMany('Fivewthreehs', [
            'foreignKey' => 'programa_id'
        ]);
        $this->hasMany('Programasnotas', [
            'foreignKey' => 'programa_id'
        ]);
        $this->hasMany('Programasplanotaxas', [
            'foreignKey' => 'programa_id'
        ]);
        $this->hasMany('Projetos', [
            'foreignKey' => 'programa_id'
        ]);
        $this->hasMany('Todos', [
            'foreignKey' => 'programa_id'
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
            ->boolean('ativo')
            ->allowEmptyString('ativo');

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
        $rules->add($rules->existsIn(['portfolio_id'], 'Portfolios'));

        return $rules;
    }
}
