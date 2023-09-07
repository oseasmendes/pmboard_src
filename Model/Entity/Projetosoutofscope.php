<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosoutofscope Entity
 *
 * @property int $id
 * @property int|null $projetosproduto_id
 * @property string|null $descricao
 * @property string|null $detalhes
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenDate|null $dataemissao
 * @property string|null $responsavel
 * @property int|null $statusfunctional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Statusfunctional $statusfunctional
 */
class Projetosoutofscope extends Entity
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
        'projetosproduto_id' => true,
        'descricao' => true,
        'detalhes' => true,
        'ativo' => true,
        'dataemissao' => true,
        'responsavel' => true,
        'statusfunctional_id' => true,
        'created' => true,
        'modified' => true,
        'projetosproduto' => true,
        'statusfunctional' => true
    ];
}
