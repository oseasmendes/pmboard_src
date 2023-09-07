<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departamento Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Agendaanual[] $agendaanual
 * @property \App\Model\Entity\Consultore[] $consultores
 * @property \App\Model\Entity\Projetousuario[] $projetousuarios
 * @property \App\Model\Entity\Sistema[] $sistemas
 * @property \App\Model\Entity\Sistemasarea[] $sistemasareas
 * @property \App\Model\Entity\Sistemasbriefing[] $sistemasbriefings
 */
class Departamento extends Entity
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
        'gerente_id' => true,
        'fupqueue_id' => true,
        'empresasunidade_id' => true,
        'created' => true,
        'modified' => true,
        'agendas' => true,
        'consultores' => true,
        'projetousuarios' => true,
        'projetousuarios' => true,
        'participantes' => true,
        'gerentes' => true,
        'empresasunidades' => true,
        'fupqueues' => true,
        'sistemas' => true,
        'sistemasareas' => true,
        'sistemasbriefings' => true
    ];
}
