<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosentrega Entity
 *
 * @property int $id
 * @property string|null $referencia
 * @property string|null $descricao
 * @property int|null $projetosproduto_id
 * @property int|null $sistema_id
 * @property int|null $statusfuncional_id
 * @property int|null $pareto_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property float|null $tmpprevisto
 * @property int|null $unidademedida_id
 * @property \Cake\I18n\FrozenDate|null $dataprevista
 * @property \Cake\I18n\FrozenDate|null $datarealizada
 * @property int|null $prioridade
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Pareto $pareto
 * @property \App\Model\Entity\Unidademedida $unidademedida
 * @property \App\Model\Entity\Agendaanual[] $agendaanual
 * @property \App\Model\Entity\Projetosapontamento[] $projetosapontamentos
 * @property \App\Model\Entity\Projetosentregaspareto[] $projetosentregasparetos
 * @property \App\Model\Entity\ViewKanbanentrega[] $view_kanbanentregas
 */
class Projetosprodutosentrega extends Entity
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
        'referencia' => true,
        'referenciaid' => true,
        'descricao' => true,
        'historico' => true,
        'justificativa' => true,
        'servidor' => true,
        'projetosproduto_id' => true,
        'sprintprevista_id' => true,
        'sistema_id' => true,
        'statusfuncional_id' => true,
        'entregastipo_id' => true,
        'pareto_id' => true,
        'fase_id' => true,
        'empresa_id' => true,
        'consultore_id' => true,
        'ambiente_id' => true,
        'responsavel' => true,
        'created' => true,
        'modified' => true,
        'tmpprevisto' => true,
        'unidademedida_id' => true,        
        'dataprevista' => true,
        'dataatribuicao' => true,
        'datarealizada' => true,
        'prevdatainicio' => true,
        'prevdatafim' => true,        
        'prioridade' => true,
        'ordem' => true,
        'ativo' => true,
        'canal' => true,
        'comentario' => true,
        'escoporemocaodata' => true,
        'escoporemocao' => true,
        'escoporemocaodescricao' => true,
        'projetosproduto' => true,
        'projetosprodutossprint' => true,
        'entregasblockpoint' => true,
        'sistema' => true,
        'statusfuncional' => true,
        'pareto' => true,
        'sprintoriginal' => true,
        'empresa' => true,
        'predecessora' => true,
        'fase' => true,
        'unidademedida' => true,
        'ambiente' => true,
        'agenda' => true,
        'archivestatus' => true,
        'archivedate' => true,        
        'archivereason' => true,
        'projetosapontamentos' => true,
        'consultores' => true,
        'entregastipos' => true,
        'projetosentregasparetos' => true,        
        'projetosprodutosentregasurls' => true,
        'projetosentregasnotas' => true,
        'projetosentregasencerramentos' => true,
        'projetosentregasreqs' => true,
        'kronusitems' => true,
        'todos' => true,
        'view_kanbanentregas' => true
    ];
}
