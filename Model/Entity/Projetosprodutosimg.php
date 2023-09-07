<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosimg Entity
 *
 * @property int $id
 * @property int|null $projetosproduto_id
 * @property string|null $referencia
 * @property string|null $descricao
 * @property string|null $imagemoriginal
 * @property string|null $url
 * @property float|null $imagemoriginalid
 * @property string|null $imagempath
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $ordem
 * @property string|null $imagem
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 */
class Projetosprodutosimg extends Entity
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
        'referencia' => true,
        'descricao' => true,
        'imagemoriginal' => true,
        'url' => true,
        'imagemoriginalid' => true,
        'imagempath' => true,
        'created' => true,
        'modified' => true,
        'ordem' => true,
        'imagem' => true,
        'projetosproduto' => true
    ];
}
