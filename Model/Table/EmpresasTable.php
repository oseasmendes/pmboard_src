<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\HasMany $Sistemas
 *
 * @method \App\Model\Entity\Empresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empresa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Empresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresasTable extends Table
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

        $this->setTable('empresas');
        $this->setDisplayField('fantasia');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sistemas', [
            'foreignKey' => 'empresa_id'
        ]);

        $this->hasMany('Fivewthreehs', [
            'foreignKey' => 'empresa_id'
        ]);

         $this->hasMany('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);

        $this->hasMany('Empresasunidades', [
            'foreignKey' => 'empresa_id'
        ]);

        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'empresa_id'
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
            ->scalar('fantasia')
            ->maxLength('fantasia', 255)
            ->allowEmptyString('fantasia');

        $validator
            ->scalar('razaosocial')
            ->maxLength('razaosocial', 255)
            ->allowEmptyString('razaosocial');

        $validator
            ->scalar('cnpj')
            ->maxLength('cnpj', 45)
            ->allowEmptyString('cnpj');

        $validator
            ->scalar('inscmunicipal')
            ->maxLength('inscmunicipal', 45)
            ->allowEmptyString('inscmunicipal');

        $validator
            ->scalar('ie')
            ->maxLength('ie', 45)
            ->allowEmptyString('ie');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 255)
            ->allowEmptyString('endereco');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 150)
            ->allowEmptyString('bairro');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 45)
            ->allowEmptyString('cidade');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 12)
            ->allowEmptyString('cep');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 15)
            ->allowEmptyString('telefone');

        $validator
            ->scalar('contato')
            ->maxLength('contato', 255)
            ->allowEmptyString('contato');

        $validator
            ->date('datafundacao')
            ->allowEmptyDate('datafundacao');

        return $validator;
    }
}
