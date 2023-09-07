<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fupagenda Entity
 *
 * @property int $id
 * @property int|null $fupqueue_id
 * @property \Cake\I18n\FrozenDate|null $checkpointdata
 * @property string|null $descricao
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Fupqueue $fupqueue
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Fupdeployed[] $fupdeployed
 * @property \App\Model\Entity\Fupinprogre[] $fupinprogres
 * @property \App\Model\Entity\Fupnotstarted[] $fupnotstarted
 */
class Fupagenda extends Entity
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
        'fupqueue_id' => true,
        'checkpointdata' => true,
        'descricao' => true,
        'statusfuncional_id' => true,
        'created' => true,
        'modified' => true,
        'fupqueue' => true,
        'statusfuncional' => true,
        'fupdeployed' => true,
        'fupinprogres' => true,
        'fupnotstarted' => true
    ];
}
