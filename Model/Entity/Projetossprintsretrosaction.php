<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetossprintsretrosaction Entity
 *
 * @property int $id
 * @property int|null $projetossprintsretrositem_id
 * @property string|null $descricao
 * @property string|null $propostopor
 * @property int|null $consultore_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $pillar_id
 * @property int|null $pillarsarea_id
 * @property int|null $pillarsresponsabilitie_id
 * @property int|null $statusfuncional_id
 *
 * @property \App\Model\Entity\Projetossprintsretrositem $projetossprintsretrositem
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Pillar $pillar
 * @property \App\Model\Entity\Pillarsarea $pillarsarea
 * @property \App\Model\Entity\Pillarsresponsability $pillarsresponsability
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Projetossprintsretrosaction extends Entity
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
        'projetossprintsretrositem_id' => true,
        'descricao' => true,
        'propostopor' => true,
        'consultore_id' => true,
        'created' => true,
        'modified' => true,
        'pillar_id' => true,
        'pillarsarea_id' => true,
        'pillarsresponsabilitie_id' => true,
        'statusfuncional_id' => true,
        'projetossprintsretrositem' => true,
        'consultore' => true,
        'pillar' => true,
        'pillarsarea' => true,
        'pillarsresponsability' => true,
        'statusfuncional' => true
    ];
}
