<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemascfgscripts Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\ScriptstiposTable|\Cake\ORM\Association\BelongsTo $Scriptstipos
 * @property \App\Model\Table\DocumentosTable|\Cake\ORM\Association\BelongsTo $Documentos
 *
 * @method \App\Model\Entity\Sistemascfgscript get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemascfgscript newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemascfgscript[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgscript|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgscript saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemascfgscript patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgscript[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemascfgscript findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemascfgscriptsTable extends Table
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

        $this->setTable('sistemascfgscripts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Scriptstipos', [
            'foreignKey' => 'scriptstipo_id'
        ]);
        $this->belongsTo('Documentos', [
            'foreignKey' => 'documento_id'
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
            ->maxLength('descricao', 250)
            ->allowEmptyString('descricao');
        
        $validator
            ->scalar('codenome')
            ->maxLength('codenome', 100)
            ->allowEmptyString('codenome');

        $validator
            ->scalar('scriptaplicado')
            ->maxLength('scriptaplicado', 4294967295)
            ->allowEmptyString('scriptaplicado');

        $validator
            ->integer('versaonumero')
            ->allowEmptyString('versaonumero');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->scalar('autor')
            ->maxLength('autor', 45)
            ->allowEmptyString('autor');

        $validator
            ->date('dataroteiro')
            ->allowEmptyDate('dataroteiro');

        $validator
            ->scalar('instrucaotecnica')
            ->maxLength('instrucaotecnica', 4294967295)
            ->allowEmptyString('instrucaotecnica');

        $validator
            ->scalar('advertencias')
            ->maxLength('advertencias', 4294967295)
            ->allowEmptyString('advertencias');

        $validator
            ->scalar('palavraschave')
            ->maxLength('palavraschave', 200)
            ->allowEmptyString('palavraschave');

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
        $rules->add($rules->existsIn(['scriptstipo_id'], 'Scriptstipos'));
        $rules->add($rules->existsIn(['documento_id'], 'Documentos'));

        return $rules;
    }
}
