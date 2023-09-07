<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Riscoscategorias Model
 *
 * @property \App\Model\Table\RiscosTable|\Cake\ORM\Association\HasMany $Riscos
 *
 * @method \App\Model\Entity\Riscoscategoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Riscoscategoria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Riscoscategoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Riscoscategoria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Riscoscategoria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Riscoscategoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Riscoscategoria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Riscoscategoria findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RiscoscategoriasTable extends Table
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

        $this->setTable('riscoscategorias');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Riscos', [
            'foreignKey' => 'riscoscategoria_id'
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
