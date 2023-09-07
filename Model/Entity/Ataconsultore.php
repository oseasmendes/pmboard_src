<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ataconsultore Entity
 *
 * @property int $id
 * @property int|null $ata_id
 * @property int|null $consultore_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Ata $ata
 * @property \App\Model\Entity\Consultore $consultore
 */
class Ataconsultore extends Entity
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
        'ata_id' => true,
        'consultore_id' => true,
        'nome' => true,
        'created' => true,
        'modified' => true,
        'ata' => true,
        'consultore' => true
    ];
}
