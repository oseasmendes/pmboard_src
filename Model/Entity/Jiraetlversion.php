<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jiraetlversion Entity
 *
 * @property int $id
 * @property string|null $versao
 * @property int|null $projetossprint_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetossprint $projetossprint
 */
class Jiraetlversion extends Entity
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
        'versao' => true,
        'projetossprint_id' => true,
        'created' => true,
        'modified' => true,
        'projetossprint' => true
    ];
}
