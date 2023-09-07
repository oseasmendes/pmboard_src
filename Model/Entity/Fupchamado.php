<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fupchamado Entity
 *
 * @property int $id
 * @property int|null $fupagenda_id
 * @property string|null $departamento
 * @property string|null $kanban
 * @property string|null $chamadonr
 * @property string|null $titulo
 * @property int|null $prio
 * @property string|null $requisitante
 * @property string|null $statusdetalhado
 * @property string|null $analista
 * @property string|null $comentario
 * @property \Cake\I18n\FrozenDate|null $lastupdate
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Fupagenda $fupagenda
 */
class Fupchamado extends Entity
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
        'fupagenda_id' => true,
        'departamento' => true,
        'kanban' => true,
        'chamadonr' => true,
        'titulo' => true,
        'prio' => true,
        'requisitante' => true,
        'statusdetalhado' => true,
        'analista' => true,
        'comentario' => true,
        'lastupdate' => true,
        'created' => true,
        'modified' => true,
        'fupagenda' => true
    ];
}
