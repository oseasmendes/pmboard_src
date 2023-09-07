<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calendariosplano Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $calendariostipo_id
 * @property \Cake\I18n\FrozenTime|null $horainicio
 * @property \Cake\I18n\FrozenTime|null $horafim
 * @property \Cake\I18n\FrozenTime|null $horaalmocoinicio
 * @property \Cake\I18n\FrozenTime|null $horaalmocofim
 * @property \Cake\I18n\FrozenTime|null $primeiraparadainicio
 * @property \Cake\I18n\FrozenTime|null $primeiraparadafim
 * @property \Cake\I18n\FrozenTime|null $segundaparadainicio
 * @property \Cake\I18n\FrozenTime|null $segundaparadafim
 * @property \Cake\I18n\FrozenTime|null $terceiraparadainicio
 * @property \Cake\I18n\FrozenTime|null $terceiraparadafim
 * @property \Cake\I18n\FrozenTime|null $quartaparadainicio
 * @property \Cake\I18n\FrozenTime|null $quartaparadafim
 * @property float|null $tempoabertura
 * @property float|null $tempoparadaprogramada
 * @property float|null $tempodisponivel
 * @property bool|null $considerarcrossday
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $empresa_id
 * @property string|null $tempoprimeiraparada
 * @property string|null $temposegundaparada
 * @property string|null $tempoterceiraparada
 * @property string|null $tempoquartaparada
 * @property string|null $tempoalmocoparada
 *
 * @property \App\Model\Entity\Calendariostipo $calendariostipo
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Calendario[] $calendarios
 */
class Calendariosplano extends Entity
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
        'calendariostipo_id' => true,
        'horainicio' => true,
        'horafim' => true,
        'horaalmocoinicio' => true,
        'horaalmocofim' => true,
        'primeiraparadainicio' => true,
        'primeiraparadafim' => true,
        'segundaparadainicio' => true,
        'segundaparadafim' => true,
        'terceiraparadainicio' => true,
        'terceiraparadafim' => true,
        'quartaparadainicio' => true,
        'quartaparadafim' => true,
        'tempoabertura' => true,
        'tempoparadaprogramada' => true,
        'tempodisponivel' => true,
        'considerarcrossday' => true,
        'created' => true,
        'modified' => true,
        'empresa_id' => true,
        'tempoprimeiraparada' => true,
        'temposegundaparada' => true,
        'tempoterceiraparada' => true,
        'tempoquartaparada' => true,
        'tempoalmocoparada' => true,
        'calendariostipo' => true,
        'empresa' => true,
        'calendarios' => true
    ];
}
