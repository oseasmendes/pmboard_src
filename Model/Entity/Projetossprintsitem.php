<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetossprintsitem Entity
 *
 * @property int $id
 * @property int|null $projetossprint_id
 * @property int|null $projetosprodutosentrega_id
 * @property string|null $referencia
 * @property string|null $taskmain
 * @property string|null $tasksub
 * @property \Cake\I18n\FrozenDate|null $dataplanning
 * @property float|null $storyppoints
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property float|null $storypointsrevised
 * @property \Cake\I18n\FrozenTime|null $datarevised
 * @property int|null $pareto_id
 *
 * @property \App\Model\Entity\Projetossprint $projetossprint
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Pareto $pareto
 */
class Projetossprintsitem extends Entity
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
        'projetosprodutosentrega_id' => true,
        'referencia' => true,
        'taskmain' => true,
        'tasksub' => true,
        'dataplanning' => true,
        'storyppoints' => true,
        'statusfuncional_id' => true,
        'created' => true,
        'modified' => true,
        'storypointsrevised' => true,
        'datarevised' => true,
        'pareto_id' => true,
        'cancelado' => true,
        'canceladomotivo' => true,
        'canceladoem' => true,
        'projetossprint' => true,
        'projetosprodutosentrega' => true,
        'statusfuncional' => true,
        'pareto' => true
    ];
}
