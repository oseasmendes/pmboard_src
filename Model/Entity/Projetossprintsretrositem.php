<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetossprintsretrositem Entity
 *
 * @property int $id
 * @property int|null $projetossprintsretro_id
 * @property int|null $pareto_id
 * @property string|null $descricao
 * @property string|null $detalhes
 * @property string|null $geraplanoacao
 * @property string|null $observacao
 * @property string|null $classificacao
 * @property string|null $referenciaoriginal
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $numerocard
 *
 * @property \App\Model\Entity\Projetossprintsretro $projetossprintsretro
 * @property \App\Model\Entity\Pareto $pareto
 */
class Projetossprintsretrositem extends Entity
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
        'projetossprintsretro_id' => true,
        'pareto_id' => true,
        'descricao' => true,
        'detalhes' => true,
        'geraplanoacao' => true,
        'observacao' => true,
        'classificacao' => true,
        'referenciaoriginal' => true,
        'created' => true,
        'modified' => true,
        'numerocard' => true,
        'projetossprintsretro' => true,
        'pareto' => true
    ];
}
