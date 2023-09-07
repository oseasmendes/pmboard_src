<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fivewthreehs Model
 *
 * @property \App\Model\Table\ProgramasTable|\Cake\ORM\Association\BelongsTo $Programas
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\BelongsTo $Projetos
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\BelongsTo $Projetosprodutos
 * @property \App\Model\Table\ParticipantesTable|\Cake\ORM\Association\BelongsTo $Participantes
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\BelongsTo $Consultores
 * @property \App\Model\Table\AtasTable|\Cake\ORM\Association\BelongsTo $Atas
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property |\Cake\ORM\Association\BelongsTo $Eventos
 * @property \App\Model\Table\FivewthreehstypesTable|\Cake\ORM\Association\BelongsTo $Fivewthreehstypes
 * @property \App\Model\Table\AtasdetalhesTable|\Cake\ORM\Association\HasMany $Atasdetalhes
 * @property \App\Model\Table\FivewthreehsparetosTable|\Cake\ORM\Association\HasMany $Fivewthreehsparetos
 * @property \App\Model\Table\ProjetosprodutosentregasdiariosTable|\Cake\ORM\Association\HasMany $Projetosprodutosentregasdiarios
 *
 * @method \App\Model\Entity\Fivewthreeh get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fivewthreeh newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fivewthreeh[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreeh|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fivewthreeh saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fivewthreeh patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreeh[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fivewthreeh findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FivewthreehsTable extends Table
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

        $this->setTable('fivewthreehs');
        $this->setDisplayField('description');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Programas', [
            'foreignKey' => 'programa_id'
        ]);
        $this->belongsTo('Projetos', [
            'foreignKey' => 'projeto_id'
        ]);
        $this->belongsTo('Projetosprodutos', [
            'foreignKey' => 'projetosproduto_id'
        ]);
        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->belongsTo('Consultores', [
            'foreignKey' => 'consultore_id'
        ]);
        $this->belongsTo('Atas', [
            'foreignKey' => 'ata_id'
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->belongsTo('Eventos', [
            'foreignKey' => 'evento_id'
        ]);
        $this->belongsTo('Fivewthreehstypes', [
            'foreignKey' => 'fivewthreehstype_id'
        ]);

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);    

        $this->hasMany('Atasdetalhes', [
            'foreignKey' => 'fivewthreeh_id'
        ]);
        $this->hasMany('Fivewthreehsparetos', [
            'foreignKey' => 'fivewthreeh_id'
        ]);
        $this->hasMany('Projetosprodutosentregasdiarios', [
            'foreignKey' => 'fivewthreeh_id'
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
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('wwho')
            ->maxLength('wwho', 255)
            ->allowEmptyString('wwho');

        $validator
            ->date('wwhen')
            ->allowEmptyDate('wwhen');

        $validator
            ->scalar('wwhat')
            ->maxLength('wwhat', 4294967295)
            ->allowEmptyString('wwhat');

        $validator
            ->scalar('wwhere')
            ->maxLength('wwhere', 4294967295)
            ->allowEmptyString('wwhere');

        $validator
            ->scalar('wwhy')
            ->maxLength('wwhy', 4294967295)
            ->allowEmptyString('wwhy');

        $validator
            ->scalar('hhow')
            ->maxLength('hhow', 4294967295)
            ->allowEmptyString('hhow');

        $validator
            ->scalar('hhowmany')
            ->maxLength('hhowmany', 45)
            ->allowEmptyString('hhowmany');

        $validator
            ->decimal('hhowmuch')
            ->allowEmptyString('hhowmuch');

        $validator
            ->scalar('hhowlong')
            ->maxLength('hhowlong', 45)
            ->allowEmptyString('hhowlong');

        $validator
            ->integer('fivewthreehpredecessor')
            ->allowEmptyString('fivewthreehpredecessor');

        $validator
            ->scalar('acao')
            ->maxLength('acao', 45)
            ->allowEmptyString('acao');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->date('resolvido')
            ->allowEmptyDate('resolvido');

        $validator
            ->integer('ata_id')
            ->allowEmptyString('ata_id');
        
            
        $validator
            ->integer('empresa_id')
            ->allowEmptyString('empresa_id');
        
        $validator
            ->integer('evento_id')
            ->allowEmptyString('evento_id');
        
        $validator
            ->integer('fivewthreehstype_id')
            ->allowEmptyString('fivewthreehstype_id');
        
        $validator
            ->integer('riskseverity')
            ->allowEmptyString('riskseverity');   
        
        $validator
            ->integer('riskprobability')
            ->allowEmptyString('riskprobability');  
        
        $validator
            ->integer('riskprobability')
            ->allowEmptyString('riskprobability');  
        
        $validator
            ->scalar('riskdescription')
            ->maxLength('riskdescription', 200)
            ->allowEmptyString('riskdescription');
        
        

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
        $rules->add($rules->existsIn(['programa_id'], 'Programas'));
        $rules->add($rules->existsIn(['projeto_id'], 'Projetos'));
        $rules->add($rules->existsIn(['projetosproduto_id'], 'Projetosprodutos'));
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['consultore_id'], 'Consultores'));
        $rules->add($rules->existsIn(['ata_id'], 'Atas'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['evento_id'], 'Eventos'));
        $rules->add($rules->existsIn(['fivewthreehstype_id'], 'Fivewthreehstypes'));
        $rules->add($rules->existsIn(['sistema_id'], 'Sistemas'));

        return $rules;
    }
}
