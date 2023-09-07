<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemasupdatesflows Model
 *
 * @property \App\Model\Table\SistemasupdatesTable|\Cake\ORM\Association\BelongsTo $Sistemasupdates
 * @property \App\Model\Table\MotivosTable|\Cake\ORM\Association\BelongsTo $Motivos
 * @property \App\Model\Table\AmbientesTable|\Cake\ORM\Association\BelongsTo $Ambientes
 * @property \App\Model\Table\StatusfuncionalsTable|\Cake\ORM\Association\BelongsTo $Statusfuncionals
 *
 * @method \App\Model\Entity\Sistemasupdatesflow get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemasupdatesflow newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemasupdatesflow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasupdatesflow|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasupdatesflow saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemasupdatesflow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasupdatesflow[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemasupdatesflow findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemasupdatesflowsTable extends Table
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

        $this->setTable('sistemasupdatesflows');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemasupdates', [
            'foreignKey' => 'sistemasupdate_id'
        ]);
        $this->belongsTo('Motivos', [
            'foreignKey' => 'motivo_id'
        ]);
        $this->belongsTo('Ambientes', [
            'foreignKey' => 'ambiente_id'
        ]);
        $this->belongsTo('Statusfuncionals', [
            'foreignKey' => 'statusfuncional_id'
        ]);

        $this->belongsTo('Projetosprodutosentregas', [
            'foreignKey' => 'projetosprodutosentrega_id'
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
            ->scalar('who')
            ->maxLength('who', 45)
            ->allowEmptyString('who');

        $validator
            ->scalar('forwho')
            ->maxLength('forwho', 45)
            ->allowEmptyString('forwho');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('historico')
            ->maxLength('historico', 4294967295)
            ->allowEmptyString('historico');

        $validator
            ->date('data')
            ->allowEmptyDate('data');

        $validator
            ->date('dataprevistaretorno')
            ->allowEmptyDate('dataprevistaretorno');

        $validator
            ->date('dataprevistarelizacao')
            ->allowEmptyDate('dataprevistarelizacao');

        $validator
            ->date('datarealizadaretorno')
            ->allowEmptyDate('datarealizadaretorno');

        $validator
            ->date('datarealizadaoficial')
            ->allowEmptyDate('datarealizadaoficial');


        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

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
        $rules->add($rules->existsIn(['sistemasupdate_id'], 'Sistemasupdates'));
        $rules->add($rules->existsIn(['motivo_id'], 'Motivos'));
        $rules->add($rules->existsIn(['ambiente_id'], 'Ambientes'));
        $rules->add($rules->existsIn(['statusfuncional_id'], 'Statusfuncionals'));
        $rules->add($rules->existsIn(['projetosprodutosentrega_id'], 'Projetosprodutosentregas'));

        return $rules;
    }
}
