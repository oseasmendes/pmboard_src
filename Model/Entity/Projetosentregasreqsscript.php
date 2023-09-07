<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasreqsscript Entity
 *
 * @property int $id
 * @property string|null $referencia
 * @property string|null $descricao
 * @property int|null $projetosentregasreqsref_id
 * @property string|null $scriptsemantic
 * @property string|null $observacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosentregasreqsref $projetosentregasreqsref
 */
class Projetosentregasreqsscript extends Entity
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
        'referencia' => true,
        'descricao' => true,
        'projetosentregasreqsref_id' => true,
        'scriptsemantic' => true,
        'observacao' => true,
        'created' => true,
        'modified' => true,
        'projetosentregasreqsrefs' => true
        
    ];
}
