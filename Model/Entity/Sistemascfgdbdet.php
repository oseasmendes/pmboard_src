<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgdbdet Entity
 *
 * @property int $id
 * @property int|null $sistemascfgdb_id
 * @property \Cake\I18n\FrozenTime|null $datainventario
 * @property float|null $tamanho
 * @property float|null $qtetabelas
 * @property float|null $qtecolunas
 * @property float|null $qteregistros
 * @property float|null $qtestoreprocedures
 * @property float|null $qtetriggers
 * @property float|null $espacoemdisco
 * @property string|null $responsavelinventario
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistemascfgdb $sistemascfgdb
 */
class Sistemascfgdbdet extends Entity
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
        'sistemascfgdb_id' => true,
        'datainventario' => true,
        'tamanho' => true,
        'qtetabelas' => true,
        'qtecolunas' => true,
        'qteregistros' => true,
        'qtestoreprocedures' => true,
        'qtetriggers' => true,
        'espacoemdisco' => true,
        'responsavelinventario' => true,
        'created' => true,
        'modified' => true,
        'sistemascfgdb' => true
    ];
}
