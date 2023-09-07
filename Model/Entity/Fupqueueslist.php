<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fupqueueslist Entity
 *
 * @property int $id
 * @property int|null $fupqueue_id
 * @property string|null $lista
 * @property string|null $emaillist
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Fupqueue $fupqueue
 */
class Fupqueueslist extends Entity
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
        'lista' => true,
        'emaillist' => true,
        'created' => true,
        'modified' => true,
        'fupqueue' => true
    ];
}
