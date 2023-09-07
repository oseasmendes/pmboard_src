<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosgroomingsitems Model
 *
 * @property \App\Model\Table\ProjetosgroomingsTable|\Cake\ORM\Association\BelongsTo $Projetosgroomings
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\BelongsTo $Projetosprodutosentregas
 * @property \App\Model\Table\StatusfuntionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuntionals
 *
 * @method \App\Model\Entity\Projetosgroomingsitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosgroomingsitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosgroomingsitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosgroomingsitem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosgroomingsitem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosgroomingsitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosgroomingsitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosgroomingsitem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosgroomingsitemsTable extends Table
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

        $this->setTable('projetosgroomingsitems');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosgroomings', [
            'foreignKey' => 'projetosgrooming_id'
        ]);
        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
        ]);
        $this->belongsTo('Statusfuntionals', [
            'foreignKey' => 'statusfuntional_id'
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
            ->integer('referencianumerica')
            ->allowEmptyString('referencianumerica');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->decimal('estimado')
            ->allowEmptyString('estimado');

        $validator
            ->decimal('quebrado')
            ->allowEmptyString('quebrado');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 4294967295)
            ->allowEmptyString('comentario');

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
        $rules->add($rules->existsIn(['projetosgrooming_id'], 'Projetosgroomings'));
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));
        $rules->add($rules->existsIn(['statusfuntional_id'], 'Statusfuntionals'));

        return $rules;
    }
}
