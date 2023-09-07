<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasreqsrefsimg Entity
 *
 * @property int $id
 * @property int|null $projetosentregasreqsref_id
 * @property string|null $descricao
 * @property string|null $pathimage
 * @property int|null $imagestipo_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $image
 * @property string|null $imagemid
 * @property string|null $ativo
 *
 * @property \App\Model\Entity\Projetosentregasreqsref $projetosentregasreqsref
 * @property \App\Model\Entity\Imagestipo $imagestipo
 */
class Projetosentregasreqsrefsimg extends Entity
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
        'projetosentregasreqsref_id' => true,
        'descricao' => true,
        'referencia' => true,
        'imagemoriginal' => true,
        'url' => true,
        'imagemoriginalid' => true,
        'imagempath' => true,
        'ordem' => true,
        'imagem'=> true,        
        'pathimage' => true,
        'imagestipo_id' => true,
        'created' => true,
        'modified' => true,
        'image' => true,
        'imagemid' => true,
        'ativo' => true,
        'projetosentregasreqsref' => true,
        'imagestipo' => true
    ];
}
