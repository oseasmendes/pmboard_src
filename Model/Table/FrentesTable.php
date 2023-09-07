<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Frentes Model
 *
 * @property \App\Model\Table\ProjetosprodutosTable|\Cake\ORM\Association\HasMany $Projetosprodutos
 *
 * @method \App\Model\Entity\Frente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Frente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Frente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Frente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Frente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Frente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Frente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Frente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FrentesTable extends Table
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

        $this->setTable('frentes');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Projetosprodutos', [
            'foreignKey' => 'frente_id'
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
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('analisysslaunitmeasury')
            ->maxLength('analisysslaunitmeasury', 1)
            ->allowEmptyString('analisysslaunitmeasury');

        $validator
            ->decimal('analisysslaexpected')
            ->allowEmptyString('analisysslaexpected');
       

        $validator
            ->scalar('technicalslaunitmeasury')
            ->maxLength('technicalslaunitmeasury', 1)
            ->allowEmptyString('technicalslaunitmeasury');

        $validator
            ->decimal('technicalslaexpected')
            ->allowEmptyString('technicalslaexpected');

        $validator
            ->scalar('managementslaunitmeasury')
            ->maxLength('managementslaunitmeasury', 1)
            ->allowEmptyString('managementslaunitmeasury');

        $validator
            ->decimal('managementslaexpected')
            ->allowEmptyString('managementslaexpected');

        $validator
            ->scalar('totalslaunitmeasury')
            ->maxLength('totalslaunitmeasury', 1)
            ->allowEmptyString('totalslaunitmeasury');

        $validator
            ->decimal('totalslaexpected')
            ->allowEmptyString('totalslaexpected');

        $validator
            ->scalar('userslaunitexpected')
            ->maxLength('userslaunitexpected', 1)
            ->allowEmptyString('userslaunitexpected');

        $validator
            ->decimal('userslaexpected')
            ->allowEmptyString('userslaexpected');

        $validator
            ->boolean('flowcontrol')
            ->allowEmptyString('flowcontrol');


        return $validator;
    }
}
