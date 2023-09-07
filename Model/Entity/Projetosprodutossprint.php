<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutossprint Entity
 *
 * @property int $id
 * @property int|null $projetosproduto_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenDate|null $datainicio
 * @property \Cake\I18n\FrozenDate|null $datafim
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $sprinttipo_id
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Sprinttipo $sprinttipo
 * @property \App\Model\Entity\Projetosprodutosentregassprint[] $projetosprodutosentregassprints
 */
class Projetosprodutossprint extends Entity
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
        'datainicio' => true,
        'datafim' => true,
        'created' => true,
        'modified' => true,
        'sprinttipo_id' => true,
        'projetosproduto' => true,
        'sprinttipo' => true,
        'projetosprodutosentregassprints' => true
    ];
}
