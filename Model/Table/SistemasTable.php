<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemas Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\DepartamentosTable|\Cake\ORM\Association\BelongsTo $Departamentos
 * @property |\Cake\ORM\Association\BelongsTo $Statusfuncionals
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\HasMany $Projetosprodutosentregas
 * @property \App\Model\Table\SistemasareasTable|\Cake\ORM\Association\HasMany $Sistemasareas
 * @property \App\Model\Table\SistemasbriefingsTable|\Cake\ORM\Association\HasMany $Sistemasbriefings
 * @property \App\Model\Table\SistemascfgdbsTable|\Cake\ORM\Association\HasMany $Sistemascfgdbs
 * @property \App\Model\Table\SistemascfgfrontsTable|\Cake\ORM\Association\HasMany $Sistemascfgfronts
 * @property \App\Model\Table\SistemascfgintegrationsTable|\Cake\ORM\Association\HasMany $Sistemascfgintegrations
 * @property \App\Model\Table\SistemascfgrelacionadosTable|\Cake\ORM\Association\HasMany $Sistemascfgrelacionados
 * @property \App\Model\Table\SistemasconsultoresTable|\Cake\ORM\Association\HasMany $Sistemasconsultores
 * @property \App\Model\Table\SistemasdocsTable|\Cake\ORM\Association\HasMany $Sistemasdocs
 * @property \App\Model\Table\SistemashistoricosTable|\Cake\ORM\Association\HasMany $Sistemashistoricos
 * @property \App\Model\Table\SistemasriscosTable|\Cake\ORM\Association\HasMany $Sistemasriscos
 * @property \App\Model\Table\SistemasusuariosTable|\Cake\ORM\Association\HasMany $Sistemasusuarios
 *
 * @method \App\Model\Entity\Sistema get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistema newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistema[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistema|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistema saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistema patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistema[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistema findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasTable extends Table
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

        $this->setTable('sistemas');
        $this->setDisplayField('codenome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);

        $this->belongsTo('Empresasunidades', [
            'foreignKey' => 'empresasunidade_id'
        ]);

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);

        $this->belongsTo('Sistemasestrategias', [
            'foreignKey' => 'sistemasestrategia_id'
        ]);   
        
        $this->belongsTo('Sistemasqueues', [
            'foreignKey' => 'sistemasqueue_id'
        ]);     

        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemasareas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemasbriefings', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemascfgdbs', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemascfgfronts', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemascfgintegrations', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemascfgrelacionados', [
            'foreignKey' => 'sistema_id'
        ]);

        // 08-04-2022 - Oséas 
        $this->hasMany('Sistemascfgscripts', [
            'foreignKey' => 'sistema_id'
        ]);       

        // 22-04-2022 - Oséas 
        $this->hasMany('Sistemascfgurls', [
            'foreignKey' => 'sistema_id'
        ]);

        // 17-10-2022 - Oséas 
        $this->hasMany('Sistemascfgtables', [
            'foreignKey' => 'sistema_id'
        ]);        

        $this->hasMany('Sistemasrelatorios', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->hasMany('Sistemasconsultores', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemasdocs', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemashistoricos', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemasriscos', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->hasMany('Sistemasusuarios', [
            'foreignKey' => 'sistema_id'
        ]);
         $this->hasMany('Sistemasnotas', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->hasMany('Sistemasmodulos', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->hasMany('Sistemasprocessos', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->hasMany('Fivewthreehs', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->hasMany('Sistemasdepartamentos', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->hasMany('Sistemasfaqs', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->hasMany('Sistemasupdates', [
            'foreignKey' => 'sistema_id'
        ]);

        $this->hasMany('Sistemasobjetos', [
            'foreignKey' => 'sistema_id'
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
            ->dateTime('dataregistro')
            ->allowEmptyDateTime('dataregistro');

        $validator
            ->scalar('codenome')
            ->maxLength('codenome', 255)
            ->allowEmptyString('codenome');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 40)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('objetivo')
            ->maxLength('objetivo', 4294967295)
            ->allowEmptyString('objetivo');

        $validator
            ->dateTime('dataimplantacao')
            ->allowEmptyDateTime('dataimplantacao');

        $validator
            ->dateTime('dataultimaatualizacao')
            ->allowEmptyDateTime('dataultimaatualizacao');

        $validator
            ->integer('bookmarked')
            ->allowEmptyString('bookmarked');

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');
        
        $validator
            ->scalar('urlprincipal')
            ->maxLength('urlprincipal', 255)
            ->allowEmptyString('urlprincipal');

        $validator
            ->scalar('urlteste')
            ->maxLength('urlteste', 255)
            ->allowEmptyString('urlteste');

        $validator
            ->scalar('urlqualidade')
            ->maxLength('urlqualidade', 255)
            ->allowEmptyString('urlqualidade');

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
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['empresasunidade_id'], 'Empresasunidades'));
        $rules->add($rules->existsIn(['departamento_id'], 'Departamentos'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['sistemasestrategia_id'], 'Sistemasestrategias'));
        $rules->add($rules->existsIn(['sistemasqueue_id'], 'Sistemasqueues'));
        
        return $rules;
    }
}

