<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosreq Entity
 *
 * @property int $id
 * @property int|null $projetosproduto_id
 * @property int|null $entregastipo_id
 * @property int|null $processo_id
 * @property int|null $participante_id
 * @property \Cake\I18n\FrozenDate|null $dataemissao
 * @property string|null $solicitante
 * @property int|null $wave
 * @property int|null $prioridade
 * @property string|null $descricao
 * @property string|null $detalhes
 * @property float|null $previsaoanalise
 * @property int|null $previsaosprints
 * @property int|null $statusfuncional_id
 * @property int|null $consultore_id
 * @property int|null $unidademedida_id
 * @property string|null $referencia
 * @property int|null $frente_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Entregastipo $entregastipo
 * @property \App\Model\Entity\Processo $processo
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Unidademedida $unidademedida
 * @property \App\Model\Entity\Frente $frente
 * @property \App\Model\Entity\Projetosprodutosreqsref[] $projetosprodutosreqsrefs
 */
class Projetosprodutosreq extends Entity
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
        'entregastipo_id' => true,
        'processo_id' => true,
        'participante_id' => true,
        'dataemissao' => true,
        'solicitante' => true,
        'outofscope' => true,
        'outofscopedescription' => true,
        'wave' => true,
        'ativo' => true,            
        'prioridade' => true,
        'descricao' => true,
        'detalhes' => true,
        'reqstatus' => true,
        'previsaoanalise' => true,
        'previsaosprints' => true,
        'statusfuncional_id' => true,
        'consultore_id' => true,
        'unidademedida_id' => true,
        'referencia' => true,
        'frente_id' => true,
        'created' => true,
        'modified' => true,
        'projetosproduto' => true,
        'entregastipo' => true,
        'processo' => true,
        'participante' => true,
        'statusfuncional' => true,
        'consultore' => true,
        'unidademedida' => true,
        'frente' => true,
        'projetosprodutosreqsrefs' => true
    ];
}
