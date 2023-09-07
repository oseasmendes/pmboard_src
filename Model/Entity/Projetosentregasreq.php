<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasreq Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosentrega_id
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
 * @property bool|null $ativo
 * @property string|null $reqstatus
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $ordem
 *
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Entregastipo $entregastipo
 * @property \App\Model\Entity\Processo $processo
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Unidademedida $unidademedida
 * @property \App\Model\Entity\Frente $frente
 * @property \App\Model\Entity\Projetosentregasreqsref[] $projetosentregasreqsrefs
 */
class Projetosentregasreq extends Entity
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
        'projetosprodutosentrega_id' => true,
        'entregastipo_id' => true,
        'docversion' => true,
        'docreference' => true,
        'docchangereference' => true,
        'processo_id' => true,
        'participante_id' => true,
        'dataemissao' => true,
        'solicitante' => true,
        'wave' => true,
        'prioridade' => true,
        'descricao' => true,
        'detalhes' => true,
        'previsaoanalise' => true,
        'previsaosprints' => true,
        'statusfuncional_id' => true,
        'consultore_id' => true,
        'developer_id' => true,
        'unidademedida_id' => true,
        'referencia' => true,
        'frente_id' => true,
        'ativo' => true,
        'reqstatus' => true,
        'created' => true,
        'modified' => true,
        'ordem' => true,
        'objetivo' => true,
        'origem' => true,
        'sample' => true,
        'regradenegocio' => true,
        'projetosprodutosentrega' => true,
        'entregastipo' => true,
        'processo' => true,
        'participante' => true,
        'statusfuncional' => true,
        'consultore' => true,
        'unidademedida' => true,
        'frente' => true,
        'projetosentregasreqsrefs' => true
    ];
}
