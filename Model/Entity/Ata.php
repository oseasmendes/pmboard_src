<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ata Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $dataemissao
 * @property \Cake\I18n\FrozenDate|null $datareuniao
 * @property int|null $agenda_id
 * @property int|null $relator_id
 * @property int|null $patrocinador_id
 * @property string|null $resumogeral
 * @property string|null $objetivo
 * @property \Cake\I18n\FrozenTime|null $horarioreuniao
 * @property string|null $local
 * @property int|null $coordenadorreuniao_id
 * @property string|null $versao
 * @property \Cake\I18n\FrozenTime|null $proximadatareuniao
 * @property string|null $proximareuniaolocal
 * @property int|null $condition_id
 * @property int|null $pmoprojeto_id
 * @property int|null $tipodocumento_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $horainicio
 * @property \Cake\I18n\FrozenTime|null $horafim
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Condition $condition
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Tipodocumento $tipodocumento
 * @property \App\Model\Entity\Ataaprovadore[] $ataaprovadores
 * @property \App\Model\Entity\Atadetalhe[] $atadetalhes
 * @property \App\Model\Entity\Ataparticipante[] $ataparticipantes
 * @property \App\Model\Entity\Atarevisaohistorico[] $atarevisaohistoricos
 * @property \App\Model\Entity\Atareviso[] $atarevisoes
 */
class Ata extends Entity
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
        'dataemissao' => true,
        'datareuniao' => true,
        'agenda_id' => true,
        'relator_id' => true,
        'patrocinador_id' => true,
        'resumogeral' => true,
        'objetivo' => true,
        'horarioreuniao' => true,
        'local' => true,
        'coordenadorreuniao_id' => true,
        'versao' => true,
        'proximadatareuniao' => true,
        'proximareuniaolocal' => true,
        'condition_id' => true,
        'pmoprojeto_id' => true,
        'tipodocumento_id' => true,
        'departamento_id' => true,
        'created' => true,
        'modified' => true,
        'horainicio' => true,
        'horafim' => true,
        'agendas' => true,
        'participante' => true,
        'departamento' => true,
        'condition' => true,        
        'tipodocumento' => true,
        'ataaprovadores' => true,
        'atadetalhes' => true,
        'ataparticipantes' => true,
        'ataconsultores' => true,
        'atarevisaohistoricos' => true,
        'atarevisoes' => true
    ];
}
