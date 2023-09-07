<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projetosentregasreqsrefsimgs Model
 *
 * @property \App\Model\Table\ProjetosentregasreqsrevesTable|\Cake\ORM\Association\BelongsTo $Projetosentregasreqsreves
 * @property \App\Model\Table\ImagestiposTable|\Cake\ORM\Association\BelongsTo $Imagestipos
 *
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjetosentregasreqsrefsimgsTable extends Table
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

        $this->setTable('projetosentregasreqsrefsimgs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projetosentregasreqsrefs', [
            'foreignKey' => 'projetosentregasreqsref_id'
        ]);
        $this->belongsTo('Imagestipos', [
            'foreignKey' => 'imagestipo_id'
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
            ->scalar('referencia')
            ->maxLength('referencia', 45)
            ->allowEmptyString('referencia');

        $validator
            ->scalar('pathimage')
            ->maxLength('pathimage', 255)
            ->allowEmptyFile('pathimage');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyFile('image');

        $validator
            ->scalar('imagemid')
            ->maxLength('imagemid', 255)
            ->allowEmptyFile('imagemid');
       

        $validator
            ->boolean('ativo')
            ->allowEmptyString('ativo');
        
        $validator
            ->integer('ordem')
            ->allowEmptyString('ordem');
        
        $validator
            ->integer('imagemoriginalid')
            ->allowEmptyString('imagemoriginalid');

        $validator
            ->scalar('imagemoriginal')
            ->maxLength('imagemoriginal', 100)
            ->allowEmptyFile('imagemoriginal');

        $validator
            ->scalar('url')
            ->maxLength('url', 4294967295)
            ->allowEmptyString('url');

        $validator
            ->scalar('imagempath')
            ->maxLength('imagempath', 255)
            ->allowEmptyFile('imagempath');
        
        $validator
            ->scalar('imagem')
            ->maxLength('imagem', 255)
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
        $rules->add($rules->existsIn(['projetosentregasreqsref_id'], 'Projetosentregasreqsrefs'));
        $rules->add($rules->existsIn(['imagestipo_id'], 'Imagestipos'));

        return $rules;
    }
}
