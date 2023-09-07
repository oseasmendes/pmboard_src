<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetoscutoversflw Entity
 *
 * @property int $id
 * @property int|null $projetoscutover_id
 * @property \Cake\I18n\FrozenDate|null $dataemissao
 * @property string|null $descricao
 * @property string|null $detalhes
 * @property string|null $responsavel
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetoscutover $projetoscutover
 */
class Projetoscutoversflw extends Entity
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
        'projetoscutover_id' => true,
        'dataemissao' => true,
        'descricao' => true,
        'detalhes' => true,
        'responsavel' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'projetoscutover' => true
    ];
}
