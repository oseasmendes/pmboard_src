<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemaprostepsimgs Model
 *
 * @property \App\Model\Table\SistemaprostepsTable|\Cake\ORM\Association\BelongsTo $Sistemaprosteps
 *
 * @method \App\Model\Entity\Sistemaprostepsimg get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistemaprostepsimg newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistemaprostepsimg[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostepsimg|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemaprostepsimg saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistemaprostepsimg patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostepsimg[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistemaprostepsimg findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SistemaprostepsimgsTable extends Table
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

        $this->setTable('sistemaprostepsimgs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sistemaprosteps', [
            'foreignKey' => 'sistemaprostep_id'
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
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->scalar('imagemoriginal')
            ->maxLength('imagemoriginal', 255)
            ->allowEmptyFile('imagemoriginal');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmptyString('url');

        $validator
            ->decimal('imagemoriginalid')
            ->allowEmptyFile('imagemoriginalid');

        $validator
            ->scalar('imagempath')
            ->maxLength('imagempath', 255)
            ->allowEmptyFile('imagempath');

        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');

        $validator
            ->scalar('imagem')
            ->maxLength('imagem', 4294967295)
            ->allowEmptyFile('imagem');

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
        $rules->add($rules->existsIn(['sistemaprostep_id'], 'Sistemaprosteps'));

        return $rules;
    }
}
