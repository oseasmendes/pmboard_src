<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departamentos Model
 *
 * @property \App\Model\Table\AgendaanualTable|\Cake\ORM\Association\HasMany $Agendaanual
 * @property \App\Model\Table\ConsultoresTable|\Cake\ORM\Association\HasMany $Consultores
 * @property \App\Model\Table\ProjetousuariosTable|\Cake\ORM\Association\HasMany $Projetousuarios
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\HasMany $Sistemas
 * @property \App\Model\Table\SistemasareasTable|\Cake\ORM\Association\HasMany $Sistemasareas
 * @property \App\Model\Table\SistemasbriefingsTable|\Cake\ORM\Association\HasMany $Sistemasbriefings
 *
 * @method \App\Model\Entity\Departamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Departamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Departamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Departamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departamento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DepartamentosTable extends Table
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

        $this->setTable('departamentos');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Agendas', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->hasMany('Consultores', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->hasMany('Projetousuarios', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->hasMany('Sistemas', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->hasMany('Sistemasareas', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->hasMany('Sistemasbriefings', [
            'foreignKey' => 'departamento_id'
        ]);
        $this->hasMany('Participantes', [
            'foreignKey' => 'departamento_id'
        ]);

        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'departamento_id'
        ]);

        $this->belongsTo('Gerentes', [
            'foreignKey' => 'gerente_id'
        ]);
        $this->belongsTo('Fupqueues', [
            'foreignKey' => 'fupqueue_id'
        ]);
        $this->belongsTo('Empresasunidades', [
            'foreignKey' => 'empresasunidade_id'
        ]);

        $this->hasMany('Sistemasdepartamentos', [
            'foreignKey' => 'departamento_id'
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
            ->maxLength('descricao', 45)
            ->allowEmptyString('descricao');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['gerente_id'], 'Gerentes'));
        $rules->add($rules->existsIn(['fupqueue_id'], 'Fupqueues'));
        $rules->add($rules->existsIn(['empresasunidade_id'], 'Empresasunidades'));

        return $rules;
    }
}
