<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosfinance Entity
 *
 * @property int $id
 * @property string|null $referenciaproposta
 * @property \Cake\I18n\FrozenDate|null $datapropostaelaborada
 * @property \Cake\I18n\FrozenDate|null $datapropostapublicada
 * @property int|null $projetosproduto_id
 * @property float|null $totalhoras
 * @property float|null $valortotal
 * @property float|null $validadeproposta
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Projetosprodutosfinance extends Entity
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
        'referenciaproposta' => true,
        'datapropostaelaborada' => true,
        'datapropostapublicada' => true,
        'projetosproduto_id' => true,
        'totalhoras' => true,
        'valortotal' => true,
        'validadeproposta' => true,
        'statusfuncional_id' => true,
        'created' => true,
        'modified' => true,
        'projetosproduto' => true,
        'statusfuncional' => true
    ];
}
