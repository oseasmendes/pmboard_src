<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosalocsnotas Model
 *
 * @property \App\Model\Table\NotatiposTable|\Cake\ORM\Association\BelongsTo $Notatipos
 * @property \App\Model\Table\ProjetosalocsTable|\Cake\ORM\Association\BelongsTo $Projetosalocs
 *
 * @method \App\Model\Entity\Projetosalocsnota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosalocsnota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosalocsnota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosalocsnota|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosalocsnota saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosalocsnota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosalocsnota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosalocsnota findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosalocsnotasTable extends Table
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

        $this->setTable('projetosalocsnotas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Notatipos', [
            'foreignKey' => 'notatipo_id'
        ]);
        $this->belongsTo('Projetosalocs', [
            'foreignKey' => 'projetosaloc_id'
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
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

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
        $rules->add($rules->existsIn(['notatipo_id'], 'Notatipos'));
        $rules->add($rules->existsIn(['projetosaloc_id'], 'Projetosalocs'));

        return $rules;
    }
}
