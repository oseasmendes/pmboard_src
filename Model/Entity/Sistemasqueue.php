<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasqueue Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $ativo
 * @property bool|null $selectedflag
 *
 * @property \App\Model\Entity\Sistema[] $sistemas
 */
class Sistemasqueue extends Entity
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
        'created' => true,
        'modified' => true,
        'ativo' => true,
        'selectedflag' => true,
        'sistemas' => true
    ];
}
