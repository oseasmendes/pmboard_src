<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banco Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Integration[] $integrations
 * @property \App\Model\Entity\ShAppbanco[] $sh_appbancos
 * @property \App\Model\Entity\Sistemascfgdb[] $sistemascfgdbs
 */
class Banco extends Entity
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
        'integrations' => true,
        'sh_appbancos' => true,
        'sistemascfgdbs' => true
    ];
}
