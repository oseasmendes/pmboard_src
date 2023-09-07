<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Responsabilidades Model
 *
 * @property \App\Model\Table\ResponsabilidadestiposTable|\Cake\ORM\Association\BelongsTo $Responsabilidadestipos
 * @property \App\Model\Table\MotivosTable|\Cake\ORM\Association\HasMany $Motivos
 * @property \App\Model\Table\SistemasusuariosTable|\Cake\ORM\Association\HasMany $Sistemasusuarios
 *
 * @method \App\Model\Entity\Responsabilidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Responsabilidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Responsabilidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Responsabilidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsabilidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsabilidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Responsabilidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Responsabilidade findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ResponsabilidadesTable extends Table
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

        $this->setTable('responsabilidades');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Responsabilidadestipos', [
            'foreignKey' => 'responsabilidadestipo_id'
        ]);
        $this->hasMany('Motivos', [
            'foreignKey' => 'responsabilidade_id'
        ]);
        $this->hasMany('Sistemasusuarios', [
            'foreignKey' => 'responsabilidade_id'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['responsabilidadestipo_id'], 'Responsabilidadestipos'));

        return $rules;
    }
}
