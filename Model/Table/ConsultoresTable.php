<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultores Model
 *
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\SuperiorimediatosTable|\Cake\ORM\Association\BelongsTo $Superiorimediatos
 * @property \App\Model\Table\ConsultoriasTable|\Cake\ORM\Association\BelongsTo $Consultorias
 * @property |\Cake\ORM\Association\HasMany $Ataparticipantes
 * @property |\Cake\ORM\Association\HasMany $Consultoresnotas
 * @property \App\Model\Table\FivewthreehsTable|\Cake\ORM\Association\HasMany $Fivewthreehs
 * @property \App\Model\Table\ProjetosalocsTable|\Cake\ORM\Association\HasMany $Projetosalocs
 * @property \App\Model\Table\ProjetosapontamentosTable|\Cake\ORM\Association\HasMany $Projetosapontamentos
 * @property \App\Model\Table\SistemasconsultoresTable|\Cake\ORM\Association\HasMany $Sistemasconsultores
 *
 * @method \App\Model\Entity\Consultore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consultore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConsultoresTable extends Table
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

        $this->setTable('consultores');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->belongsTo('Superiorimediatos', [
            'foreignKey' => 'superiorimediato_id'
        ]);
        $this->belongsTo('Consultorias', [
            'foreignKey' => 'consultoria_id'
        ]);
        $this->hasMany('Ataparticipantes', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->hasMany('Consultoresnotas', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->hasMany('Fivewthreehs', [
            'foreignKey' => 'consultore_id'
        ]);
        
        $this->hasMany('Consultoresferias', [
            'foreignKey' => 'consultore_id'
        ]);

         $this->hasMany('Projetosalocs', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->hasMany('Projetosprodutosentregasalocs', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->hasMany('Projetosapontamentos', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->hasMany('Sistemasconsultores', [
            'foreignKey' => 'consultore_id'
        ]);

         $this->hasMany('Portfolios', [
            'foreignKey' => 'gerenteportfolio_id'
        ]);

        $this->hasMany('Apontamentos', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->hasMany('Todoseventos', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->hasMany('Esupportsetlagentes', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->hasMany('Agendas', [
            'foreignKey' => 'consultore_id'
        ]);

        $this->hasMany('Sistemasqueuesconsultores', [
            'foreignKey' => 'consultore_id'
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
            ->scalar('telefone')
            ->maxLength('telefone', 45)
            ->allowEmptyString('telefone');

        $validator
            ->scalar('cargo')
            ->maxLength('cargo', 200)
            ->allowEmptyString('cargo');

        $validator
            ->scalar('responsabilidade')
            ->maxLength('responsabilidade', 255)
            ->allowEmptyString('responsabilidade');

        $validator
            ->scalar('chapa')
            ->maxLength('chapa', 45)
            ->allowEmptyString('chapa');

         $validator
            ->scalar('codenome')
            ->maxLength('codenome', 45)
            ->allowEmptyString('codenome');

        $validator
            ->scalar('login')
            ->maxLength('login', 45)
            ->allowEmptyString('login');

        $validator
            ->boolean('selecionar')
            ->allowEmptyString('selecionar');

        $validator
            ->boolean('engajado')
            ->allowEmptyString('engajado');

         $validator
            ->date('datanascimento')
            ->allowEmptyDate('datanascimento');

        $validator
            ->date('datadesligamento')
            ->allowEmptyDate('datadesligamento');

        $validator
            ->date('dataliberacaoacessos')
            ->allowEmptyDate('dataliberacaoacessos');            

         $validator
            ->date('dataengajamento')
            ->allowEmptyDate('dataengajamento');

        $validator
            ->date('datacontratacao')
            ->allowEmptyDate('datacontratacao');
        
        $validator
            ->date('dataintegracao')
            ->allowEmptyDate('dataintegracao');

         $validator
            ->scalar('regimecontratacao')
            ->maxLength('regimecontratacao', 45)
            ->allowEmptyString('regimecontratacao');
        
         $validator
            ->scalar('cpf')
            ->maxLength('cpf', 45)
            ->allowEmptyString('cpf');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 45)
            ->allowEmptyString('rg');

        $validator
            ->boolean('duplacidadania')
            ->allowEmptyString('duplacidadania');
        
        $validator
            ->scalar('cidadania1')
            ->maxLength('cidadania1', 45)
            ->allowEmptyString('cidadania1');
        
        $validator
            ->scalar('cidadania2')
            ->maxLength('cidadania2', 45)
            ->allowEmptyString('cidadania2');
        
        $validator
            ->scalar('cidadania3')
            ->maxLength('cidadania3', 45)
            ->allowEmptyString('cidadania3');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 250)
            ->allowEmptyString('endereco');
        
        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 100)
            ->allowEmptyString('bairro');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 100)
            ->allowEmptyString('cidade');
        
        $validator
            ->scalar('complemento')
            ->maxLength('complemento', 150)
            ->allowEmptyString('complemento');


        $validator
            ->scalar('cep')
            ->maxLength('cep', 45)
            ->allowEmptyString('cep');
        
        $validator
            ->integer('prio')
            ->allowEmptyString('prio');
        
        $validator
            ->integer('ativo')
            ->allowEmptyString('ativo');

        $validator
            ->scalar('sigla')
            ->maxLength('sigla', 3)
            ->allowEmptyString('sigla');


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
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));
        $rules->add($rules->existsIn(['superiorimediato_id'], 'Superiorimediatos'));
        $rules->add($rules->existsIn(['consultoria_id'], 'Consultorias'));

        return $rules;
    }
}
