<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosriscosevento Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosrisco_id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $resumo
 * @property string|null $historico
 * @property int|null $statusfuncional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosprodutosrisco $projetosprodutosrisco
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Projetosprodutosriscosevento extends Entity
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
        'projetosprodutosrisco_id' => true,
        'data' => true,
        'resumo' => true,
        'historico' => true,
        'statusfuncional_id' => true,
        'created' => true,
        'modified' => true,
        'projetosprodutosrisco' => true,
        'statusfuncional' => true
    ];
}
