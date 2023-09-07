<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Superiorimediato Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Consultore[] $consultores
 * @property \App\Model\Entity\Projetousuario[] $projetousuarios
 */
class Superiorimediato extends Entity
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
        'nome' => true,
        'created' => true,
        'modified' => true,
        'consultores' => true,
        'projetousuarios' => true
    ];
}
