<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosrisco Entity
 *
 * @property int $id
 * @property int|null $projetosproduto_id
 * @property int|null $risco_id
 * @property int|null $aplicabilidade_id
 * @property string|null $nivel
 * @property string|null $detalhes
 * @property float|null $probabilidade
 * @property float|null $tempoprevistoimpacto
 * @property float|null $pessoasafetadas
 * @property float|null $estimativafinanceiradorisco
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Risco $risco
 * @property \App\Model\Entity\Aplicabilidade $aplicabilidade
 * @property \App\Model\Entity\Projetosprodutosriscosimpacto[] $projetosprodutosriscosimpactos
 */
class Projetosprodutosrisco extends Entity
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
        'projetosproduto_id' => true,
        'risco_id' => true,
        'aplicabilidade_id' => true,
        'probabilidade_id' => true,
        'severidade_id' => true,
        'nivel' => true,
        'detalhes' => true,
        'resumo' => true,
        'probabilidadeindice' => true,
        'tempoprevistoimpacto' => true,
        'pessoasafetadas' => true,
        'estimativafinanceiradorisco' => true,
        'created' => true,
        'modified' => true,
        'projetosproduto' => true,
        'risco' => true,
        'aplicabilidade' => true,
        'ativo' => true,
        'projetosprodutosriscosimpactos' => true
    ];
}
