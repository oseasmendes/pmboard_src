<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entregasblockpoint Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosentrega_id
 * @property string|null $descricao
 * @property string|null $detalhes
 * @property int|null $statusfuncional_id
 * @property int|null $consultore_id
 * @property string|null $responsavel
 * @property \Cake\I18n\FrozenDate|null $resolvidoem
 * @property bool|null $planoacao
 * @property bool|null $ativo
 * @property bool|null $risco
 * @property int|null $flag
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Entregasblockpointsfl[] $entregasblockpointsfls
 */
class Entregasblockpoint extends Entity
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
        'descricao' => true,
        'detalhes' => true,
        'statusfuncional_id' => true,
        'consultore_id' => true,
        'responsavel' => true,
        'resolvidoem' => true,
        'planoacao' => true,
        'ativo' => true,
        'risco' => true,
        'flag' => true,
        'created' => true,
        'modified' => true,
        'projetosprodutosentrega' => true,
        'statusfuncional' => true,
        'consultore' => true,
        'entregasblockpointsfls' => true
    ];
}
