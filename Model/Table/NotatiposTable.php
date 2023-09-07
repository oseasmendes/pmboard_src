<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notatipos Model
 *
 * @property |\Cake\ORM\Association\HasMany $Programasnotas
 * @property \App\Model\Table\ProjetosprodutosnotasTable|\Cake\ORM\Association\HasMany $Projetosprodutosnotas
 *
 * @method \App\Model\Entity\Notatipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Notatipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Notatipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notatipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notatipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notatipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Notatipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notatipo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NotatiposTable extends Table
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

        $this->setTable('notatipos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Programasnotas', [
            'foreignKey' => 'notatipo_id'
        ]);
        $this->hasMany('Projetosprodutosnotas', [
            'foreignKey' => 'notatipo_id'
        ]);

        $this->hasMany('Projetosentregasnotas', [
            'foreignKey' => 'notatipo_id'
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
