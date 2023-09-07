<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetossprintsallocation Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $projetossprint_id
 * @property int|null $consultore_id
 * @property int|null $competencia_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetossprint $projetossprint
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Competencia $competencia
 */
class Projetossprintsallocation extends Entity
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
        'projetossprint_id' => true,
        'consultore_id' => true,
        'competencia_id' => true,
        'created' => true,
        'modified' => true,
        'projetossprint' => true,
        'consultore' => true,
        'competencia' => true
    ];
}
