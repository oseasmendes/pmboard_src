<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetossprintsdaily Entity
 *
 * @property int $id
 * @property int|null $projetossprint_id
 * @property int|null $consultore_id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $referencia
 * @property string|null $comentario
 * @property int|null $projetosprodutosentrega_id
 * @property \Cake\I18n\FrozenDate|null $agenda_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetossprint $projetossprint
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Agenda $agenda
 */
class Projetossprintsdaily extends Entity
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
        'projetossprint_id' => true,
        'consultore_id' => true,
        'data' => true,
        'referencia' => true,
        'comentario' => true,
        'projetosprodutosentrega_id' => true,
        'agenda_id' => true,
        'created' => true,
        'modified' => true,
        'projetossprint' => true,
        'projetossprintsdailysreferences' => true,
        'consultore' => true,
        'projetosprodutosentrega' => true,
        'agenda' => true
    ];
}
