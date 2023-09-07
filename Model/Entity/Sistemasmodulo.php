<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasmodulo Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property string|null $nome
 * @property string|null $versao
 * @property string|null $descricao
 * @property string|null $historico
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Sistemasmodulo extends Entity
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
        'nome' => true,
        'codenome' => true,
        'versao' => true,
        'descricao' => true,
        'historico' => true,
        'statusfuncional_id' => true,
        'prio' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'sistemascfgtables' => true,       
        'statusfuncional' => true
    ];
}
