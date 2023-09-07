<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasbriefing Entity
 *
 * @property int $id
 * @property int $sistema_id
 * @property \Cake\I18n\FrozenTime|null $dataregistro
 * @property int|null $departamento_id
 * @property string|null $objetivo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $smcplan_id
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Smcplan $smcplan
 */
class Sistemasbriefing extends Entity
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
        'sistema_id' => true,
        'dataregistro' => true,
        'departamento_id' => true,
        'objetivo' => true,
        'created' => true,
        'modified' => true,
        'smcplan_id' => true,
        'sistema' => true,
        'departamento' => true,
        'smcplan' => true
    ];
}
