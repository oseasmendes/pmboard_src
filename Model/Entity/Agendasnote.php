<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agendasnote Entity
 *
 * @property int $id
 * @property int|null $agendaschannel_id
 * @property int|null $agenda_id
 * @property string|null $timeinformed
 * @property string|null $description
 * @property string|null $comments
 * @property int|null $statusfuncional_id
 * @property string|null $keywords
 * @property bool|null $actionplan
 * @property bool|null $selection
 * @property bool|null $beshared
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Agendaschannel $agendaschannel
 * @property \App\Model\Entity\Agenda $agenda
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Agendasnote extends Entity
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
        'agendaschannel_id' => true,
        'agenda_id' => true,
        'timeinformed' => true,
        'description' => true,
        'comments' => true,
        'statusfuncional_id' => true,
        'keywords' => true,
        'actionplan' => true,
        'selection' => true,
        'beshared' => true,
        'created' => true,
        'modified' => true,
        'agendaschannel' => true,
        'agenda' => true,
        'statusfuncional' => true
    ];
}
