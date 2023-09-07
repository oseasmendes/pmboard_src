<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Logbook Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $descricao
 * @property int|null $programa_id
 * @property int|null $atividadetipos_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Programa $programa
 * @property \App\Model\Entity\Atividadetipo $atividadetipo
 * @property \App\Model\Entity\Logbooksitem[] $logbooksitems
 */
class Logbook extends Entity
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
        'data' => true,
        'descricao' => true,
        'programa_id' => true,
        'atividadetipos_id' => true,
        'created' => true,
        'modified' => true,
        'programa' => true,
        'atividadetipo' => true,
        'logbooksitems' => true
    ];
}
