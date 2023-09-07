<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosentregassprint Entity
 *
 * @property int $id
 * @property int|null $projetosprodutossprint_id
 * @property int|null $projetosprodutosentrega_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosprodutossprint $projetosprodutossprint
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 */
class Projetosprodutosentregassprint extends Entity
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
        'projetosprodutossprint_id' => true,
        'projetosprodutosentrega_id' => true,
        'created' => true,
        'modified' => true,
        'projetosprodutossprint' => true,
        'projetosprodutosentrega' => true
    ];
}
