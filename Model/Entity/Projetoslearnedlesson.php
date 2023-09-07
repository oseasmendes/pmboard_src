<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetoslearnedlesson Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property int|null $aproach_id
 * @property string|null $resumo
 * @property string|null $historico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $casoreferencia
 * @property int|null $severidade_id
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Aproach $aproach
 * @property \App\Model\Entity\Severidade $severidade
 */
class Projetoslearnedlesson extends Entity
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
        'projeto_id' => true,
        'aproach_id' => true,
        'resumo' => true,
        'historico' => true,
        'created' => true,
        'modified' => true,
        'casoreferencia' => true,
        'severidade_id' => true,
        'projeto' => true,
        'aproach' => true,
        'severidade' => true
    ];
}
