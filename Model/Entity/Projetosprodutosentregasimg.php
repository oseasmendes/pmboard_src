<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosentregasimg Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosentrega_id
 * @property string|null $referencia
 * @property string|null $descricao
 * @property string|null $imagemoriginal
 * @property string|null $url
 * @property float|null $imagemoriginalid
 * @property string|null $imagempath
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $ordem
 *
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 */
class Projetosprodutosentregasimg extends Entity
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
        'referencia' => true,
        'descricao' => true,
        'imagemoriginal' => true,
        'url' => true,
        'imagemoriginalid' => true,
        'imagempath' => true,
        'created' => true,
        'modified' => true,
        'ordem' => true,
        'projetosprodutosentrega' => true
    ];
}
