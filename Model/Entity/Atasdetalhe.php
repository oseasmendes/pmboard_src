<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atasdetalhe Entity
 *
 * @property int $id
 * @property int|null $ata_id
 * @property string|null $resumo
 * @property string|null $detalhamento
 * @property int|null $responsavel_id
 * @property \Cake\I18n\FrozenTime|null $dataprevista
 * @property string|null $statusacao
 * @property \Cake\I18n\FrozenTime|null $dataexecutada
 * @property int|null $atadetallheordem
 * @property \Cake\I18n\FrozenTime|null $horaexecutada
 * @property int|null $etapa_id
 * @property int|null $atividade_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $horainicio
 * @property \Cake\I18n\FrozenTime|null $horafim
 * @property int|null $fivewthreeh_id
 * @property int|null $processo_id
 *
 * @property \App\Model\Entity\Ata $ata
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Etapa $etapa
 * @property \App\Model\Entity\Atividade $atividade
 * @property \App\Model\Entity\Fivewthreeh $fivewthreeh
 * @property \App\Model\Entity\Processo $processo
 */
class Atasdetalhe extends Entity
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
        'ata_id' => true,
        'resumo' => true,
        'detalhamento' => true,
        'responsavel_id' => true,
        'dataprevista' => true,
        'statusacao' => true,
        'dataexecutada' => true,
        'atadetallheordem' => true,
        'horaexecutada' => true,
        'etapa_id' => true,
        'atividade_id' => true,
        'created' => true,
        'modified' => true,
        'horainicio' => true,
        'horafim' => true,
        'fivewthreeh_id' => true,
        'processo_id' => true,
        'ata' => true,
        'participante' => true,
        'etapa' => true,
        'atividade' => true,
        'fivewthreeh' => true,
        'processo' => true
    ];
}
