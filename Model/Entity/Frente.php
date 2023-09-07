<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Frente Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosproduto[] $projetosprodutos
 */
class Frente extends Entity
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
        'analisysslaexpected' => true,
        'analisysslaunitmeasury' => true,
        'technicalslaexpected' => true,
        'technicalslaunitmeasury' => true,
        'managementslaexpected' => true,
        'managementslaunitmeasury' => true,
        'totalslaexpected' => true,
        'totalslaunitmeasury' => true,
        'totalslaexpected' => true,
        'userslaexpected' => true,
        'userslaunitexpected' => true,
        'flowcontrol' => true,
        'created' => true,
        'modified' => true,
        'projetosprodutos' => true
    ];
}
