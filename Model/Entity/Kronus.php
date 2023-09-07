<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kronus Entity
 *
 * @property int $id
 * @property int|null $kronusplan_id
 * @property string|null $unidade
 * @property int|null $seq
 * @property string|null $kickoff
 * @property string|null $categoria
 * @property string|null $ordem
 * @property string|null $atividade
 * @property string|null $duracao
 * @property string|null $inicio
 * @property string|null $fim
 * @property string|null $predecessora
 * @property string|null $responsavel
 * @property string|null $milestone
 * @property string|null $flag_id
 * @property string|null $comentarios
 * @property string|null $fasenome
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $fase_id
 *
 * @property \App\Model\Entity\Kronusplan $kronusplan
 * @property \App\Model\Entity\Flag $flag
 * @property \App\Model\Entity\Fase $fase
 */
class Kronus extends Entity
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
        'kronusplan_id' => true,
        'unidade' => true,
        'seq' => true,
        'kickoff' => true,
        'categoria' => true,
        'ordem' => true,
        'atividade' => true,
        'duracao' => true,
        'inicio' => true,
        'fim' => true,
        'predecessora' => true,
        'responsavel' => true,
        'milestone' => true,
        'flag_id' => true,
        'comentarios' => true,
        'fasenome' => true,
        'created' => true,
        'modified' => true,
        'fase_id' => true,
        'kronusplan' => true,
        'flag' => true,
        'fase' => true
    ];
}
