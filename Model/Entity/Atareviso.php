<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atareviso Entity
 *
 * @property int $id
 * @property int|null $ata_id
 * @property int|null $participante_id
 * @property string|null $revisao_status
 * @property \Cake\I18n\FrozenTime|null $revisao_data
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $modified
 *
 * @property \App\Model\Entity\Ata $ata
 * @property \App\Model\Entity\Participante $participante
 */
class Atareviso extends Entity
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
        'participante_id' => true,
        'revisao_status' => true,
        'revisao_data' => true,
        'created' => true,
        'modified' => true,
        'ata' => true,
        'participante' => true
    ];
}
