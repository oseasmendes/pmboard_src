<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Programasnota Entity
 *
 * @property int $id
 * @property int|null $notatipo_id
 * @property string|null $descricao
 * @property string|null $historico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $programa_id
 * @property string|null $referencia
 *
 * @property \App\Model\Entity\Notatipo $notatipo
 * @property \App\Model\Entity\Programa $programa
 */
class Programasnota extends Entity
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
        'notatipo_id' => true,
        'descricao' => true,
        'historico' => true,
        'created' => true,
        'modified' => true,
        'programa_id' => true,
        'referencia' => true,
        'notatipo' => true,
        'ativo' => true,
        'programa' => true
    ];
}
