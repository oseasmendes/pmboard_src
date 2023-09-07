<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fivewthreeh Entity
 *
 * @property int $id
 * @property int|null $programa_id
 * @property int|null $projeto_id
 * @property int|null $projetosproduto_id
 * @property int|null $participante_id
 * @property string|null $description
 * @property string|null $wwho
 * @property \Cake\I18n\FrozenDate|null $wwhen
 * @property string|null $wwhat
 * @property string|null $wwhere
 * @property string|null $wwhy
 * @property string|null $hhow
 * @property string|null $hhowmany
 * @property float|null $hhowmuch
 * @property string|null $hhowlong
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $statusfuncional_id
 * @property int|null $consultore_id
 * @property int|null $fivewthreehpredecessor
 * @property string|null $acao
 * @property \Cake\I18n\FrozenDate|null $resolvido
 * @property int|null $ata_id
 * @property int|null $empresa_id
 * @property int|null $evento_id
 * @property int|null $fivewthreehstype_id
 *
 * @property \App\Model\Entity\Programa $programa
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Ata $ata
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Fivewthreehstype $fivewthreehstype
 * @property \App\Model\Entity\Atasdetalhe[] $atasdetalhes
 * @property \App\Model\Entity\Fivewthreehspareto[] $fivewthreehsparetos
 * @property \App\Model\Entity\Projetosprodutosentregasdiario[] $projetosprodutosentregasdiarios
 */
class Fivewthreeh extends Entity
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
        'programa_id' => true,
        'projeto_id' => true,
        'projetosproduto_id' => true,
        'participante_id' => true,
        'description' => true,
        'wwho' => true,
        'wwhen' => true,
        'wwhat' => true,
        'wwhere' => true,
        'wwhy' => true,
        'hhow' => true,
        'hhowmany' => true,
        'hhowmuch' => true,
        'hhowlong' => true,
        'created' => true,
        'modified' => true,
        'statusfuncional_id' => true,
        'consultore_id' => true,
        'fivewthreehpredecessor' => true,
        'acao' => true,
        'referencia' => true,
        'resolvido' => true,
        'ata_id' => true,
        'empresa_id' => true,
        'evento_id' => true,
        'sistema_id' => true,
        'fivewthreehstype_id' => true,
        'programa' => true,
        'projeto' => true,
        'projetosproduto' => true,
        'sistema' => true,        
        'participante' => true,
        'statusfuncional' => true,
        'consultore' => true,
        'ata' => true,
        'empresa' => true,
        'fivewthreehstype' => true,
        'atasdetalhes' => true,
        'fivewthreehsparetos' => true,
        'projetosprodutosentregasdiarios' => true
    ];
}
