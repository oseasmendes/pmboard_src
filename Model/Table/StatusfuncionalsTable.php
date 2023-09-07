<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statusfuncionals Model
 *
 * @property \App\Model\Table\FivewthreehsTable|\Cake\ORM\Association\HasMany $Fivewthreehs
 * @property \App\Model\Table\ProjetosTable|\Cake\ORM\Association\HasMany $Projetos
 * @property \App\Model\Table\ProjetosalocsTable|\Cake\ORM\Association\HasMany $Projetosalocs
 * @property \App\Model\Table\ProjetosalocsprofilesTable|\Cake\ORM\Association\HasMany $Projetosalocsprofiles
 * @property \App\Model\Table\ProjetosapontamentosTable|\Cake\ORM\Association\HasMany $Projetosapontamentos
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\HasMany $Projetosprodutos
 * @property \App\Model\Table\ProjetosprodutosentregasTable|\Cake\ORM\Association\HasMany $Projetosprodutosentregas
 * @property \App\Model\Table\ProjetosprodutosfinancesTable|\Cake\ORM\Association\HasMany $Projetosprodutosfinances
 * @property \App\Model\Table\ProjetosprodutosrunsTable|\Cake\ORM\Association\HasMany $Projetosprodutosruns
 * @property \App\Model\Table\ProjetosstatusTable|\Cake\ORM\Association\HasMany $Projetosstatus
 * @property \App\Model\Table\SistemasTable|\Cake\ORM\Association\HasMany $Sistemas
 *
 * @method \App\Model\Entity\Statusfuncional get($primaryKey, $options = [])
 * @method \App\Model\Entity\Statusfuncional newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Statusfuncional[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statusfuncional|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statusfuncional saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statusfuncional patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Statusfuncional[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statusfuncional findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StatusfuncionalsTable extends Table
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

        $this->setTable('statusfuncionals');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Fivewthreehs', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetos', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosalocs', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosalocsprofiles', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosapontamentos', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosprodutos', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosprodutosentregas', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosprodutosfinances', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosprodutosruns', [
            'foreignKey' => 'statusfuncional_id'
        ]);
        $this->hasMany('Projetosstatus', [
            'foreignKey' => 'statusfuncional_id'
        ]);

        $this->hasMany('Projetosoutofscopes', [
            'foreignKey' => 'statusfuncional_id'
         ]);

        $this->hasMany('Sistemas', [
            'foreignKey' => 'statusfuncional_id'
        ]);
       
        $this->hasMany('Fupagendas', [
            'foreignKey' => 'fupagenda_id'
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

   
}
