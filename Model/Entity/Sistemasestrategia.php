<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasestrategia Entity
 *
 * @property int $id
 * @property int|null $estrategia_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $ativo
 *
 * @property \App\Model\Entity\Estrategia $estrategia
 * @property \App\Model\Entity\Sistema[] $sistemas
 */
class Sistemasestrategia extends Entity
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
        'estrategia_id' => true,
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'ativo' => true,
        'estrategia' => true,
        'sistemas' => true
    ];
}
