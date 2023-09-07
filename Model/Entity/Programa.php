<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Programa Entity
 *
 * @property int $id
 * @property int|null $portfolio_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $ativo
 *
 * @property \App\Model\Entity\Portfolio $portfolio
 * @property \App\Model\Entity\Programasnota[] $programasnotas
 * @property \App\Model\Entity\Programasplanotaxa[] $programasplanotaxas
 * @property \App\Model\Entity\Projeto[] $projetos
 */
class Programa extends Entity
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
        'portfolio_id' => true,
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'ativo' => true,
        'portfolio' => true,
        'programasnotas' => true,
        'programasplanotaxas' => true,
        'projetos' => true
    ];
}
