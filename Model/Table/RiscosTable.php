<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Riscos Model
 *
 * @property \App\Model\Table\RiscoscategoriasTable|\Cake\ORM\Association\BelongsTo $Riscoscategorias
 * @property |\Cake\ORM\Association\HasMany $Projetosprodutosriscos
 * @property \App\Model\Table\SistemasriscosTable|\Cake\ORM\Association\HasMany $Sistemasriscos
 *
 * @method \App\Model\Entity\Risco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Risco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Risco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Risco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Risco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Risco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Risco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Risco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RiscosTable extends Table
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

        $this->setTable('riscos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Riscoscategorias', [
            'foreignKey' => 'riscoscategoria_id'
        ]);
        $this->hasMany('Projetosprodutosriscos', [
            'foreignKey' => 'risco_id'
        ]);
        $this->hasMany('Sistemasriscos', [
            'foreignKey' => 'risco_id'
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
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('hora')
            ->maxLength('hora', 45)
            ->allowEmptyString('hora');

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
        $rules->add($rules->existsIn(['riscoscategoria_id'], 'Riscoscategorias'));

        return $rules;
    }
}
