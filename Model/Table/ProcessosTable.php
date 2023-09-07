<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Processos Model
 *
 * @property \App\Model\Table\ProcessostiposTable|\Cake\ORM\Association\BelongsTo $Processostipos
 * @property \App\Model\Table\AtasdetalhesTable|\Cake\ORM\Association\HasMany $Atasdetalhes
 * @property |\Cake\ORM\Association\HasMany $Projetosentregasreqs
 * @property |\Cake\ORM\Association\HasMany $Projetosprodutosreqs
 * @property |\Cake\ORM\Association\HasMany $Projetosprodutosruns
 * @property |\Cake\ORM\Association\HasMany $Projetosreqs
 * @property |\Cake\ORM\Association\HasMany $Sistemasprocessos
 * @property |\Cake\ORM\Association\HasMany $Sistemasusuariosprocessos
 *
 * @method \App\Model\Entity\Processo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Processo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Processo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Processo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Processo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Processo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Processo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Processo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProcessosTable extends Table
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

        $this->setTable('processos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Processostipos', [
            'foreignKey' => 'processostipo_id'
        ]);
        $this->hasMany('Atasdetalhes', [
            'foreignKey' => 'processo_id'
        ]);
        $this->hasMany('Projetosentregasreqs', [
            'foreignKey' => 'processo_id'
        ]);
        $this->hasMany('Projetosprodutosreqs', [
            'foreignKey' => 'processo_id'
        ]);
        $this->hasMany('Projetosprodutosruns', [
            'foreignKey' => 'processo_id'
        ]);
        $this->hasMany('Projetosreqs', [
            'foreignKey' => 'processo_id'
        ]);
        $this->hasMany('Sistemasprocessos', [
            'foreignKey' => 'processo_id'
        ]);
        $this->hasMany('Sistemasusuariosprocessos', [
            'foreignKey' => 'processo_id'
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
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('movimento')
            ->maxLength('movimento', 20)
            ->allowEmptyString('movimento');

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
        $rules->add($rules->existsIn(['processostipo_id'], 'Processostipos'));

        return $rules;
    }
}
