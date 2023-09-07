<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasnota Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosentrega_id
 * @property int|null $notatipo_id
 * @property string|null $descricao
 * @property string|null $historico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Notatipo $notatipo
 */
class Projetosentregasnota extends Entity
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
        'notatipo_id' => true,
        'descricao' => true,
        'historico' => true,
        'created' => true,
        'modified' => true,
        'projetosprodutosentrega' => true,
        'notatipo' => true
    ];
}
