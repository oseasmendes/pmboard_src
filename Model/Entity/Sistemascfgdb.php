<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgdb Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property int|null $banco_id
 * @property string|null $descricao
 * @property string|null $contato
 * @property string|null $ipaddress
 * @property string|null $conn
 * @property string|null $versao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Banco $banco
 * @property \App\Model\Entity\Sistemascfgdbdet[] $sistemascfgdbdets
 */
class Sistemascfgdb extends Entity
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
        'sistema_id' => true,
        'banco_id' => true,
        'descricao' => true,
        'contato' => true,
        'ipaddress' => true,
        'conn' => true,
        'host' => true,
        'url' => true,
        'urlresumida' => true,
        'ambiente_id' => true,
        'versao' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'banco' => true,
        'ambiente' => true,
        'sistemascfgdbdets' => true
    ];
}
