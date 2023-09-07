<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasusuarios Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\BelongsTo $Sistemas
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\ResponsabilidadesTable|\Cake\ORM\Association\BelongsTo $Responsabilidades
 * @property \App\Model\Table\KnowhowsTable|\Cake\ORM\Association\BelongsTo $Knowhows
 *
 * @method \App\Model\Entity\Sistemasusuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasusuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasusuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasusuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasusuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasusuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasusuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasusuario findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasusuariosTable extends Table
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

        $this->setTable('sistemasusuarios');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemas', [
            'foreignKey' => 'sistema_id'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->belongsTo('Responsabilidades', [
            'foreignKey' => 'responsabilidade_id'
        ]);
        $this->belongsTo('Knowhows', [
            'foreignKey' => 'knowhow_id'
        ]);

        $this->hasMany('Sistemasusuariosprocessos', [
            'foreignKey' => 'sistemasusuario_id'
        ]);

        // --- novo

        $this->belongsTo('Usuariostipos', [
            'foreignKey' => 'usuariostipo_id'
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
            ->scalar('ramal')
            ->maxLength('ramal', 45)
            ->allowEmptyString('ramal');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 45)
            ->allowEmptyString('empresa');
        
        $validator
            ->scalar('login')
            ->maxLength('login', 45)
            ->allowEmptyString('login');
        
            
        $validator
            ->scalar('passwordapp')
            ->maxLength('passwordapp', 45)
            ->allowEmptyString('passwordapp');

        $validator
            ->scalar('autenticacao')
            ->maxLength('autenticacao', 45)
            ->allowEmptyString('autenticacao');

        $validator
            ->scalar('statususuario')
            ->maxLength('statususuario', 45)
            ->allowEmptyString('statususuario');

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
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['usuariostipo_id'], 'Usuariostipos'));
        $rules->add($rules->existsIn(['responsabilidade_id'], 'Responsabilidades'));
        $rules->add($rules->existsIn(['knowhow_id'], 'Knowhows'));

        return $rules;
    }
}
