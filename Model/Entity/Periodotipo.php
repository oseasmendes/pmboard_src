<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Periodotipo Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $dias
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Propostasaloc[] $propostasalocs
 */
class Periodotipo extends Entity
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
        'dias' => true,
        'created' => true,
        'modified' => true,
        'propostasalocs' => true
    ];
}
