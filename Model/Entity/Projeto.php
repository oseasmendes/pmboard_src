<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projeto Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $programa_id
 * @property \Cake\I18n\FrozenDate|null $realizadodatainicio
 * @property \Cake\I18n\FrozenDate|null $realizadodatafim
 * @property int|null $statusfuncional_id
 * @property bool|null $administrativo
 * @property int|null $prioridade
 * @property int|null $fase_id
 * @property string|null $codenome
 * @property bool|null $propostatecnica
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenDate|null $previstodatainicio
 * @property \Cake\I18n\FrozenDate|null $previstodatafim
 * @property \Cake\I18n\FrozenDate|null $datacancelamento
 * @property \Cake\I18n\FrozenDate|null $datasuspensao
 * @property bool|null $arquivo
 * @property \Cake\I18n\FrozenDate|null $dataaprovacao
 * @property int|null $user_id
 *
 * @property \App\Model\Entity\Programa $programa
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Fase $fase
 * @property \App\Model\Entity\Agendaanual[] $agendaanual
 * @property \App\Model\Entity\Projetosaloc[] $projetosalocs
 * @property \App\Model\Entity\Projetosnota[] $projetosnotas
 * @property \App\Model\Entity\Projetospareto[] $projetosparetos
 * @property \App\Model\Entity\Projetosproduto[] $projetosprodutos
 * @property \App\Model\Entity\Projetosstatus[] $projetosstatus
 * @property \App\Model\Entity\ViewKanbanprojeto[] $view_kanbanprojetos
 * @property \App\Model\Entity\ViewProjetotiming[] $view_projetotimings
 */
class Projeto extends Entity
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
        'descricao' => true,
        'programa_id' => true,
        'proposta_id' => true,
        'realizadodatainicio' => true,
        'realizadodatafim' => true,
        'statusfuncional_id' => true,
        'administrativo' => true,
        'prioridade' => true,
        'fase_id' => true,
        'codenome' => true,
        'objetivo' => true,
        'controleagenda' => true,
        'urlreferenciacliente' => true,
        'urlreferenciainterno' => true,
        'propostatecnica' => true,
        'created' => true,
        'modified' => true,
        'ativo' => true,
        'previstodatainicio' => true,
        'previstodatafim' => true,
        'datacancelamento' => true,
        'datasuspensao' => true,
        'arquivo' => true,
        'dataaprovacao' => true,
        'user_id' => true,
        'leadtimeexpected' => true,
        'leadtimeunitexpected' => true,
        'technicalleadtime' => true,
        'technicalunitleadtime' => true,
        'analysisleadtime' => true,
        'analysisunitleadtime' => true,
        'developleadtime' => true,
        'developunitleadtime' => true,
        'userleadtime' => true,
        'userunitleadtime' => true,
        'programa' => true,
        'statusfuncional' => true,
        'fase' => true,
        'agendas' => true,
        'projetosalocs' => true,
        'projetosblockpoints' => true,
        'projetosrestrictions' => true,
        'projetoscutovers' => true,
        'projetosurls' => true,         
        'projetosnotas' => true,
        'projetosparetos' => true,
        'projetosprodutos' => true,
        'projetosstatus' => true,
        'propostas' => true
    ];
}
