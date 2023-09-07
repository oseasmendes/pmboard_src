<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tecnologias Model
 *
 * @property \App\Model\Table\ConsultoresvrstecnologiasTable|\Cake\ORM\Association\HasMany $Consultoresvrstecnologias
 * @property \App\Model\Table\IntegrationsTable|\Cake\ORM\Association\HasMany $Integrations
 * @property \App\Model\Table\ShApptechnoTable|\Cake\ORM\Association\HasMany $ShApptechno
 * @property \App\Model\Table\SistemascfgfrontsTable|\Cake\ORM\Association\HasMany $Sistemascfgfronts
 * @property \App\Model\Table\SistemascfgintegrationsTable|\Cake\ORM\Association\HasMany $Sistemascfgintegrations
 *
 * @method \App\Model\Entity\Tecnologia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tecnologia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tecnologia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tecnologia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tecnologia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tecnologia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnologia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnologia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TecnologiasTable extends Table
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

        $this->setTable('tecnologias');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Consultoresvrstecnologias', [
            'foreignKey' => 'tecnologia_id'
        ]);
        $this->hasMany('Integrations', [
            'foreignKey' => 'tecnologia_id'
        ]);
        $this->hasMany('ShApptechno', [
            'foreignKey' => 'tecnologia_id'
        ]);
        $this->hasMany('Sistemascfgfronts', [
            'foreignKey' => 'tecnologia_id'
        ]);
        $this->hasMany('Sistemascfgintegrations', [
            'foreignKey' => 'tecnologia_id'
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
