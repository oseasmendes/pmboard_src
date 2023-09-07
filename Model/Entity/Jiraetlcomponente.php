<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jiraetlcomponente Entity
 *
 * @property int $id
 * @property string|null $componente
 * @property int|null $projetosproduto_id
 * @property int|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 */
class Jiraetlcomponente extends Entity
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
        'componente' => true,
        'projetosproduto_id' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'projetosproduto' => true
    ];
}
