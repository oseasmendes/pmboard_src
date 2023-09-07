<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetossprint Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenDate|null $datainicio
 * @property \Cake\I18n\FrozenDate|null $datafim
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $sprinttipo_id
 * @property \Cake\I18n\FrozenDate|null $data
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Sprinttipo $sprinttipo
 * @property \App\Model\Entity\Jiraetlversion[] $jiraetlversions
 * @property \App\Model\Entity\Projetossprintsforecast[] $projetossprintsforecasts
 * @property \App\Model\Entity\Projetossprintsitem[] $projetossprintsitems
 * @property \App\Model\Entity\Projetossprintsrealizado[] $projetossprintsrealizados
 */
class Projetossprint extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'projeto_id' => true,
        'descricao' => true,
        'datainicio' => true,
        'datafim' => true,
        'created' => true,
        'modified' => true,
        'sprinttipo_id' => true,
        'data' => true,
        'projeto' => true,
        'sprinttipo' => true,
        'jiraetlversions' => true,
        'projetossprintsforecasts' => true,
        'projetossprintsitems' => true,
        'projetossprintsrealizados' => true
    ];
}
