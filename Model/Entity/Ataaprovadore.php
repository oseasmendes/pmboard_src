<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ataaprovadore Entity
 *
 * @property int $id
 * @property int|null $ata_id
 * @property int|null $participante_id
 * @property string|null $aprovacao_status
 * @property \Cake\I18n\FrozenTime|null $aprovacao_data
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Ata $ata
 * @property \App\Model\Entity\Participante $participante
 */
class Ataaprovadore extends Entity
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
        'aprovacao_status' => true,
        'aprovacao_data' => true,
        'created' => true,
        'modified' => true,
        'ata' => true,
        'participante' => true
    ];
}
