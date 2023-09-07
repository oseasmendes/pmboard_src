<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Todosevento Entity
 *
 * @property int $id
 * @property string|null $historico
 * @property \Cake\I18n\FrozenDate|null $data
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $todo_id
 * @property \Cake\I18n\FrozenTime|null $horainicial
 * @property \Cake\I18n\FrozenTime|null $horafinal
 * @property string|null $ticketid
 * @property int|null $tecnico_id
 * @property string|null $resumo
 * @property string|null $numerochamado
 * @property int|null $consultore_id
 *
 * @property \App\Model\Entity\Todo $todo
 * @property \App\Model\Entity\Tecnico $tecnico
 * @property \App\Model\Entity\Consultore $consultore
 */
class Todosevento extends Entity
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
        'historico' => true,
        'data' => true,
        'created' => true,
        'modified' => true,
        'todo_id' => true,
        'horainicial' => true,
        'horafinal' => true,
        'hrinicial' => true,
        'hrfinal' => true,
        'ticketid' => true,       
        'resumo' => true,
        'numerochamado' => true,
        'consultore_id' => true,
        'todo' => true,        
        'consultore' => true
    ];
}
