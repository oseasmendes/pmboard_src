<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosproduto Entity
 *
 * @property int $id
 * @property string|null $produto
 * @property int|null $projeto_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $codenome
 * @property string|null $referencia
 * @property int|null $statusfuncional_id
 * @property string|null $descricao
 * @property int|null $prioridade
 * @property \Cake\I18n\FrozenDate|null $dataprevista
 * @property \Cake\I18n\FrozenDate|null $datarealizada
 * @property int|null $frente_id
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Agendaanual[] $agendaanual
 * @property \App\Model\Entity\Projetosprodutosentrega[] $projetosprodutosentregas
 * @property \App\Model\Entity\Projetosprodutosfeedback[] $projetosprodutosfeedbacks
 * @property \App\Model\Entity\Projetosprodutosnota[] $projetosprodutosnotas
 * @property \App\Model\Entity\Projetosprodutospareto[] $projetosprodutosparetos
 */
class Projetosproduto extends Entity
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
        'produto' => true,
        'projeto_id' => true,
        'created' => true,
        'modified' => true,
        'codenome' => true,
        'referencia' => true,
        'statusfuncional_id' => true,
        'descricao' => true,
        'kpi' => true,
        'escopomacro' => true,
        'comentarios' => true,
        'prioridade' => true,
        'dataprevistafim' => true,
        'datarealizada' => true,
        'dataprevistainicio' => true,
        'datarealinicio' => true,
        'datacancelamento' => true,
        'datasuspensao' => true,
        'ativo' => true,
        'selecionado' => true,
        'frente_id' => true,
        'facilitador_id' => true,
        'fupqueue_id' => true,
        'gerenteprojetocliente_id' => true,
        'projeto' => true,        
        'statusfuncional' => true,
        'agendas' => true,
        'frentes' => true,
        'participantes' => true,
        'fupqueues' => true,        
        'projetosprodutosentregas' => true,
        'projetosprodutosfeedbacks' => true,
        'projetosoutofscopes' => true,
        'projetosprodutosimgs' => true,
        'projetosprodutosriscos' => true,
        'projetosprodutosnotas' => true,
        'projetosprodutosreqs' => true,
        'projetosprodutosalocs' => true,
        'projetosprodutosparetos' => true
    ];
}
