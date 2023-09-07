<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atarevisaohistoricos Model
 *
 * @property \App\Model\Table\AtasTable|\Cake\ORM\Association\BelongsTo $Atas
 * @property \App\Model\Table\AtadetalhesTable|\Cake\ORM\Association\BelongsTo $Atadetalhes
 *
 * @method \App\Model\Entity\Atarevisaohistorico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atarevisaohistorico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atarevisaohistorico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atarevisaohistorico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atarevisaohistorico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atarevisaohistorico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atarevisaohistorico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atarevisaohistorico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtarevisaohistoricosTable extends Table
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

        $this->setTable('atarevisaohistoricos');
        $this->setDisplayField('proposta_alteracao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Atas', [
            'foreignKey' => 'ata_id'
        ]);
        $this->belongsTo('Atadetalhes', [
            'foreignKey' => 'atadetalhe_id'
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
            ->scalar('correcao_solicitado_por')
            ->maxLength('correcao_solicitado_por', 255)
            ->allowEmptyString('correcao_solicitado_por');

        $validator
            ->boolean('aprovado')
            ->allowEmptyString('aprovado');

        $validator
            ->scalar('proposta_alteracao')
            ->maxLength('proposta_alteracao', 4294967295)
            ->allowEmptyString('proposta_alteracao');

        $validator
            ->dateTime('datarevisao')
            ->allowEmptyDateTime('datarevisao');

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
        $rules->add($rules->existsIn(['ata_id'], 'Atas'));
        $rules->add($rules->existsIn(['atadetalhe_id'], 'Atadetalhes'));

        return $rules;
    }
}
