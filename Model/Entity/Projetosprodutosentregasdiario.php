<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosentregasdiario Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosentrega_id
 * @property int|null $consultore_id
 * @property string|null $resumo
 * @property string|null $feitoontem
 * @property string|null $feitohoje
 * @property string|null $impedimento
 * @property int|null $fivewthreeh_id
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenDate|null $data
 *
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Fivewthreeh $fivewthreeh
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Projetosprodutosentregasdiario extends Entity
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
        'projetosprodutosentrega_id' => true,
        'consultore_id' => true,
        'resumo' => true,
        'feitoontem' => true,
        'feitohoje' => true,
        'impedimento' => true,
        'fivewthreeh_id' => true,
        'statusfuncional_id' => true,
        'created' => true,
        'modified' => true,
        'data' => true,
        'projetosprodutosentrega' => true,
        'consultore' => true,
        'fivewthreeh' => true,
        'statusfuncional' => true
    ];
}
