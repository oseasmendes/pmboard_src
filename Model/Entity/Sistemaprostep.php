<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemaprostep Entity
 *
 * @property int $id
 * @property int|null $sistemaproaction_id
 * @property int|null $stepaction
 * @property string|null $description
 * @property string|null $historic
 * @property int|null $participante_id
 * @property int|null $consultore_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistemaproaction $sistemaproaction
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Sistemaprostepsfile[] $sistemaprostepsfiles
 */
class Sistemaprostep extends Entity
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
        'sistemaproaction_id' => true,
        'stepaction' => true,
        'description' => true,
        'historic' => true,
        'participante_id' => true,
        'consultore_id' => true,
        'created' => true,
        'modified' => true,
        'sistemaproaction' => true,        
        'sistemaprostepsimg' => true,
        'participante' => true,
        'consultore' => true,
        'sistemaprostepsfiles' => true
    ];
}
