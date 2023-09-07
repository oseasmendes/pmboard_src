<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Poolingsmember Entity
 *
 * @property int $id
 * @property int|null $consultore_id
 * @property int|null $pooling_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Pooling $pooling
 */
class Poolingsmember extends Entity
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
        'consultore_id' => true,
        'pooling_id' => true,
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'consultore' => true,
        'pooling' => true
    ];
}
