<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Todosobservadore Entity
 *
 * @property int $id
 * @property int|null $todo_id
 * @property int|null $participante_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $papel
 *
 * @property \App\Model\Entity\Todo $todo
 * @property \App\Model\Entity\Participante $participante
 */
class Todosobservadore extends Entity
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
        'todo_id' => true,
        'participante_id' => true,
        'created' => true,
        'modified' => true,
        'papel' => true,
        'todo' => true,
        'participante' => true
    ];
}
