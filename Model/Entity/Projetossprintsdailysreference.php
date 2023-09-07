<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetossprintsdailysreference Entity
 *
 * @property int $id
 * @property int|null $projetossprintsdaily_id
 * @property string|null $reference
 * @property string|null $resumo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $cancelado
 * @property int|null $numericreference
 * @property bool|null $done
 * @property bool|null $doing
 * @property bool|null $testing
 * @property bool|null $collaboration
 * @property bool|null $Selected
 * @property bool|null $analysing
 * @property string|null $comments
 * @property bool|null $actionsplans
 * @property bool|null $generatenews
 * @property bool|null $support
 * @property bool|null $risk
 * @property bool|null $customeraction
 * @property bool|null $customeractionflag
 * @property \Cake\I18n\FrozenTime|null $lancadoem
 *
 * @property \App\Model\Entity\Projetossprintsdaily $projetossprintsdaily
 */
class Projetossprintsdailysreference extends Entity
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
        'projetossprintsdaily_id' => true,
        'reference' => true,
        'resumo' => true,
        'created' => true,
        'modified' => true,
        'cancelado' => true,
        'numericreference' => true,
        'done' => true,
        'doing' => true,
        'testing' => true,
        'collaboration' => true,
        'Selected' => true,
        'analysing' => true,
        'comments' => true,
        'actionsplans' => true,
        'generatenews' => true,
        'support' => true,
        'risk' => true,
        'customeraction' => true,
        'customeractionflag' => true,
        'lancadoem' => true,
        'agenda' => true,
        'additionalcomments' => true,
        'projetossprintsdaily' => true
    ];
}
