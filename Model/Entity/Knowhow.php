<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Knowhow Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property float|null $peso
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Consultoresvrstecnologia[] $consultoresvrstecnologias
 * @property \App\Model\Entity\Sistemasconsultore[] $sistemasconsultores
 * @property \App\Model\Entity\Sistemasusuario[] $sistemasusuarios
 */
class Knowhow extends Entity
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
        'descricao' => true,
        'peso' => true,
        'created' => true,
        'modified' => true,
        'consultoresvrstecnologias' => true,
        'sistemasconsultores' => true,
        'sistemasusuarios' => true
    ];
}
