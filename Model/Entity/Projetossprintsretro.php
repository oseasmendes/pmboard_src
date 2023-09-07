<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetossprintsretro Entity
 *
 * @property int $id
 * @property int|null $projetossprint_id
 * @property int|null $pareto_id
 * @property string|null $descricao
 * @property string|null $observacao
 * @property string|null $referenciaboard
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetossprint $projetossprint
 * @property \App\Model\Entity\Pareto $pareto
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Projetossprintsretrosaction[] $projetossprintsretrosactions
 * @property \App\Model\Entity\Projetossprintsretrositem[] $projetossprintsretrositems
 */
class Projetossprintsretro extends Entity
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
        'projetossprint_id' => true,
        'pareto_id' => true,
        'descricao' => true,
        'observacao' => true,
        'referenciaboard' => true,
        'statusfuncional_id' => true,
        'created' => true,
        'modified' => true,
        'projetossprint' => true,
        'pareto' => true,
        'dataretro' => true,
        'statusfuncional' => true,
        'projetossprintsretrosactions' => true,
        'projetossprintsretrositems' => true
    ];
}
