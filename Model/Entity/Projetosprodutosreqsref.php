<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosreqsref Entity
 *
 * @property int $id
 * @property string|null $referencia
 * @property string|null $description
 * @property int|null $projetosprodutosreq_id
 * @property int|null $projetosprodutosentrega_id
 * @property bool|null $cancelled
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosprodutosreq $projetosprodutosreq
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 */
class Projetosprodutosreqsref extends Entity
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
        'description' => true,
        'projetosprodutosreq_id' => true,
        'projetosprodutosentrega_id' => true,
        'cancelled' => true,
        'created' => true,
        'modified' => true,
        'projetosprodutosreq' => true,
        'projetosprodutosentrega' => true
    ];
}
