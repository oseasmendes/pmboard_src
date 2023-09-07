<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosentregasflw Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosentrega_id
 * @property int|null $motivo_id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $who
 * @property string|null $descricao
 * @property string|null $historico
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Motivo $motivo
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Projetosprodutosentregasflw extends Entity
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
        'motivo_id' => true,
        'data' => true,
        'who' => true,
        'forwho' => true,
        'actwho' => true,
        'descricao' => true,
        'historico' => true,
        'statusfuncional_id' => true,
        'forum' => true,
        'created' => true,
        'modified' => true,
        'kronusitem_id' => true,
        'encerraatividade' => true,
        'iniciaatividade' => true,
        'encerraevidencia' => true,
        'encerradopor' => true,
        'projetosprodutosentrega' => true,
        'kronusitems' => true,
        'motivo' => true,
        'statusfuncional' => true
    ];
}
