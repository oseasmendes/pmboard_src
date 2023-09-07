<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemascfgtransaction Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property string|null $nometransacao
 * @property string|null $descricao
 * @property string|null $descricaotecnica
 * @property string|null $urlreferencia
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $modulo
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Sistemascfgintegration[] $sistemascfgintegrations
 */
class Sistemascfgtransaction extends Entity
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
        'nometransacao' => true,
        'descricao' => true,
        'descricaotecnica' => true,
        'urlreferencia' => true,
        'created' => true,
        'modified' => true,
        'modulo' => true,
        'sistema' => true,
        'sistemacfgtransaction_id' => true,
        'sistemacfgtransactions' => true,
        'sistemascfgintegrations' => true
    ];
}
