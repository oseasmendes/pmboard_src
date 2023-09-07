<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasfaqsdetalhesimg Entity
 *
 * @property int $id
 * @property int|null $sistemasfaqsdetalhe_id
 * @property string|null $referencia
 * @property string|null $descricao
 * @property string|null $pathimage
 * @property int|null $imagestipo_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $image
 * @property string|null $imagemid
 * @property bool|null $ativo
 * @property string|null $imagemoriginal
 * @property string|null $url
 * @property int|null $imagemoriginalid
 * @property string|null $imagempath
 * @property int|null $ordem
 * @property string|null $imagem
 *
 * @property \App\Model\Entity\Sistemasfaqsdetalhe $sistemasfaqsdetalhe
 * @property \App\Model\Entity\Imagestipo $imagestipo
 */
class Sistemasfaqsdetalhesimg extends Entity
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
        'sistemasfaqsdetalhe_id' => true,
        'referencia' => true,
        'descricao' => true,
        'pathimage' => true,
        'imagestipo_id' => true,
        'created' => true,
        'modified' => true,
        'image' => true,
        'imagemid' => true,
        'ativo' => true,
        'imagemoriginal' => true,
        'url' => true,
        'imagemoriginalid' => true,
        'imagempath' => true,
        'ordem' => true,
        'imagem' => true,
        'sistemasfaqsdetalhe' => true,
        'imagestipo' => true
    ];
}
