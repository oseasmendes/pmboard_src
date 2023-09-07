<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosgrooming Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenDate|null $date
 * @property int|null $projetossprint_id
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetossprint $projetossprint
 * @property \App\Model\Entity\Projetosgroomingsitem[] $projetosgroomingsitems
 */
class Projetosgrooming extends Entity
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
        'descricao' => true,
        'date' => true,
        'projetossprint_id' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'projetossprint' => true,
        'projetosgroomingsitems' => true
    ];
}
