<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \App\Model\Table\ClientesalocsTable|\Cake\ORM\Association\HasMany $Clientesalocs
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientesTable extends Table
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

        $this->setTable('clientes');
        $this->setDisplayField('nomepesquisa');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Clientesalocs', [
            'foreignKey' => 'cliente_id'
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
            ->scalar('nomepesquisa')
            ->maxLength('nomepesquisa', 45)
            ->allowEmptyString('nomepesquisa');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 10)
            ->allowEmptyString('cep')
            ->add('cep', 'validFormat',[
                'rule' => array('custom', '/^[0-9]{2}\.[0-9]{3}\-[0-9]{3}/'),
                'message' => 'Formato do CEP Inválido.'
                ]);            

        $validator
            ->scalar('telefonemovel')
            ->maxLength('telefonemovel', 15)
            ->allowEmptyString('telefonemovel')
            ->add('telefonemovel', 'validFormat',[
                'rule' => array('custom', '/^\([1-9]{2}\) [9]{0,1}[6-9]{1}[0-9]{3}\-[0-9]{4}$/'),
                'message' => 'Formato do Telefone Inválido.'
                ]);            

        $validator
            ->scalar('email')
            ->maxLength('email', 255)
            ->allowEmptyString('email')
            ->add('email', 'validFormat', [
                      'rule' => 'email',
                      'message' => 'Endereço de e-mail precisa ser valido'
                ]);            
    
        return $validator;
    }    
}
