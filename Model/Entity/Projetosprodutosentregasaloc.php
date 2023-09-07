<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosentregasaloc Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $consultore_id
 * @property int|null $projetosprodutosentrega_id
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Projetosprodutosentregasaloc extends Entity
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
        'consultore_id' => true,
        'competencia_id' => true,
        'projetosprodutosentrega_id' => true,
        'statusfuncional_id' => true,
        'horasnumtotal' => true,
        'created' => true,
        'modified' => true,
        'consultore' => true,
        'projetosprodutosentrega' => true,        
        'competencia' => true,
        'statusfuncional' => true
    ];
}
