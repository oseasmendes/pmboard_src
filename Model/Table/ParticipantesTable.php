<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participantes Model
 *
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\FivewthreehsTable|\Cake\ORM\Association\HasMany $Fivewthreehs
 *
 * @method \App\Model\Entity\Participante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Participante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Participante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Participante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participante saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Participante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Participante findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParticipantesTable extends Table
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

        $this->setTable('participantes');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);         
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Fivewthreehs', [
            'foreignKey' => 'participante_id'
        ]);
        $this->hasMany('Projetosprodutos', [
            'foreignKey' => 'facilitador_id'
        ]);

        $this->hasMany('Fupqueuesdistributions', [
            'foreignKey' => 'participante_id'
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('company')
            ->maxLength('company', 30)
            ->allowEmptyString('company');

        $validator
            ->scalar('cargo')
            ->maxLength('cargo', 255)
            ->allowEmptyString('cargo');

         $validator
            ->scalar('apelido')
            ->maxLength('apelido', 255)
            ->allowEmptyString('apelido');

        $validator
            ->scalar('sigla')
            ->maxLength('sigla', 80)
            ->allowEmptyString('sigla');

        $validator
            ->integer('ramal')
            ->allowEmptyString('ramal');

        $validator
            ->integer('tecnico')
            ->allowEmptyString('tecnico');

        $validator
            ->scalar('telefonecelular')
            ->maxLength('telefonecelular', 20)
            ->allowEmptyString('telefonecelular');

        $validator
            ->scalar('telefonefixo')
            ->maxLength('telefonefixo', 20)
            ->allowEmptyString('telefonefixo');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['facilitador_id'], 'Projetosprodutos'));
        return $rules;
    }
}
