<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasfaqs Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\EntregasfaqsTable|\Cake\ORM\Association\HasMany $Entregasfaqs
 * @property \App\Model\Table\SistemasfaqsdetalhesTable|\Cake\ORM\Association\HasMany $Sistemasfaqsdetalhes
 *
 * @method \App\Model\Entity\Sistemasfaq get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasfaq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasfaq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasfaq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasfaq saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasfaq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasfaq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasfaq findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasfaqsTable extends Table
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

        $this->setTable('sistemasfaqs');
        $this->setDisplayField('Descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Entregasfaqs', [
            'foreignKey' => 'sistemasfaq_id'
        ]);
        $this->hasMany('Sistemasfaqsdetalhes', [
            'foreignKey' => 'sistemasfaq_id'
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
            ->scalar('Descricao')
            ->maxLength('Descricao', 255)
            ->allowEmptyString('Descricao');

        $validator
            ->scalar('mensagemerro')
            ->maxLength('mensagemerro', 255)
            ->allowEmptyString('mensagemerro');

        $validator
            ->scalar('Historico')
            ->maxLength('Historico', 4294967295)
            ->allowEmptyString('Historico');

        $validator
            ->boolean('FrequentlyAskedQuestions')
            ->allowEmptyString('FrequentlyAskedQuestions');

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
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));

        return $rules;
    }
}
