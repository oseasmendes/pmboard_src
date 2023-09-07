<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasfaqsdetalhes Model
 *
 * @property \App\Model\Table\SistemasfaqsTable|\Cake\ORM\Association\BelongsTo $Sistemasfaqs
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 * @property \App\Model\Table\SistemasfaqsdetalhesimgsTable|\Cake\ORM\Association\HasMany $Sistemasfaqsdetalhesimgs
 *
 * @method \App\Model\Entity\Sistemasfaqsdetalhe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasfaqsdetalhe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasfaqsdetalhe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasfaqsdetalhe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasfaqsdetalhe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasfaqsdetalhe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasfaqsdetalhe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasfaqsdetalhe findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasfaqsdetalhesTable extends Table
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

        $this->setTable('sistemasfaqsdetalhes');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemasfaqs', [
            'foreignKey' => 'sistemasfaq_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id'
        ]);
        $this->hasMany('Sistemasfaqsdetalhesimgs', [
            'foreignKey' => 'sistemasfaqsdetalhe_id'
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
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

        $validator
            ->scalar('contribuicaode')
            ->maxLength('contribuicaode', 45)
            ->allowEmptyString('contribuicaode');

        $validator
            ->integer('faqprecedente')
            ->allowEmptyString('faqprecedente');

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
        $rules->add($rules->existsIn(['sistemasfaq_id'], 'Sistemasfaqs'));
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));

        return $rules;
    }
}
