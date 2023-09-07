<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasqueuesconsultore Entity
 *
 * @property int $id
 * @property string|null $desricao
 * @property int|null $sistemasqueue_id
 * @property int|null $consultore_id
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistemasqueue $sistemasqueue
 * @property \App\Model\Entity\Consultore $consultore
 */
class Sistemasqueuesconsultore extends Entity
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
        'desricao' => true,
        'sistemasqueue_id' => true,
        'consultore_id' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'sistemasqueue' => true,
        'consultore' => true
    ];
}
