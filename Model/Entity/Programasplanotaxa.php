<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Programasplanotaxa Entity
 *
 * @property int $id
 * @property int|null $competencia_id
 * @property int|null $programa_id
 * @property float|null $valor
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Competencia $competencia
 * @property \App\Model\Entity\Programa $programa
 */
class Programasplanotaxa extends Entity
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
        'competencia_id' => true,
        'programa_id' => true,
        'valor' => true,
        'created' => true,
        'modified' => true,
        'competencia' => true,
        'programa' => true
    ];
}
