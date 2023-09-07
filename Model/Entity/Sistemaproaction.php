<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemaproaction Entity
 *
 * @property int $id
 * @property int|null $sistemasprocesso_id
 * @property int|null $evento_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistemasprocesso $sistemasprocesso
 * @property \App\Model\Entity\Evento $evento
 * @property \App\Model\Entity\Sistemaprostep[] $sistemaprosteps
 */
class Sistemaproaction extends Entity
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
        'sistemasprocesso_id' => true,
        'evento_id' => true,
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'sistemasprocesso' => true,
        'evento' => true,
        'sistemaprosteps' => true
    ];
}
