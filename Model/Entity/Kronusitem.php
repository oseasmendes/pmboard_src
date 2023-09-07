<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kronusitem Entity
 *
 * @property int $id
 * @property int|null $kronusplan_id
 * @property \Cake\I18n\FrozenDate|null $kickoff
 * @property int|null $seq
 * @property int|null $ordem
 * @property string|null $edt
 * @property int|null $consultore_id
 * @property string|null $categoria
 * @property string|null $nometarefa
 * @property string|null $etapa
 * @property float|null $percconcluido
 * @property float|null $duracao
 * @property string|null $unidademedida
 * @property \Cake\I18n\FrozenDate|null $inicio
 * @property \Cake\I18n\FrozenDate|null $termino
 * @property int|null $predecessora
 * @property string|null $nomerecurso
 * @property int|null $idexclusivo
 * @property \Cake\I18n\FrozenDate|null $dataatualizacao
 * @property int|null $versao
 * @property int|null $nivel1
 * @property int|null $nivel2
 * @property int|null $nivel3
 * @property int|null $nivel4
 * @property int|null $nivel5
 * @property int|null $nivel6
 * @property int|null $nivel7
 * @property int|null $nivel8
 * @property int|null $nivel9
 * @property int|null $nivel10
 * @property int|null $projetosproduto_id
 * @property int|null $projetosprodutosentrega_id
 * @property int|null $projeto_id
 * @property int|null $apontamento
 * @property int|null $pareto_id
 * @property string|null $milestone
 * @property int|null $decisorio
 * @property int|null $selecao
 * @property string|null $resumo
 * @property string|null $objetivo
 * @property string|null $referencia
 * @property string|null $flagname
 * @property int|null $flag_id
 * @property int|null $fase_id
 * @property string|null $responsavel
 * @property string|null $atividade
 * @property string|null $comentario
 * @property string|null $criticidade
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $fasenome
 *
 * @property \App\Model\Entity\Kronusplan $kronusplan
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Pareto $pareto
 * @property \App\Model\Entity\Flag $flag
 * @property \App\Model\Entity\Fase $fase
 */
class Kronusitem extends Entity
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
        'kickoff' => true,
        'seq' => true,
        'ordem' => true,
        'edt' => true,
        'consultore_id' => true,
        'categoria' => true,
        'nometarefa' => true,
        'etapa' => true,
        'percconcluido' => true,
        'duracao' => true,
        'unidademedida' => true,
        'inicio' => true,
        'termino' => true,
        'predecessora' => true,
        'nomerecurso' => true,
        'idexclusivo' => true,
        'dataatualizacao' => true,
        'versao' => true,
        'nivel1' => true,
        'nivel2' => true,
        'nivel3' => true,
        'nivel4' => true,
        'nivel5' => true,
        'nivel6' => true,
        'nivel7' => true,
        'nivel8' => true,
        'nivel9' => true,
        'nivel10' => true,
        'projetosproduto_id' => true,
        'projetosprodutosentrega_id' => true,
        'projeto_id' => true,
        'apontamento' => true,
        'pareto_id' => true,
        'milestone' => true,
        'decisorio' => true,
        'selecao' => true,
        'resumo' => true,
        'objetivo' => true,
        'referencia' => true,
        'flagname' => true,
        'flag_id' => true,
        'fase_id' => true,
        'responsavel' => true,
        'atividade' => true,
        'comentario' => true,
        'criticidade' => true,
        'created' => true,
        'modified' => true,
        'fasenome' => true,
        'kronusplan' => true,
        'consultore' => true,
        'projetosproduto' => true,
        'projetosprodutosentrega' => true,
        'projeto' => true,
        'pareto' => true,
        'flag' => true,
        'fase' => true
    ];
}
