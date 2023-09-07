<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasprocesso Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $sistema_id
 * @property int|null $processo_id
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenDate|null $descontinuadoem
 * @property string|null $descontinuadomotivo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $motivo
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Processo $processo
 */
class Sistemasprocesso extends Entity
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
        'sistema_id' => true,
        'processo_id' => true,
        'ativo' => true,
        'descontinuadoem' => true,
        'descontinuadomotivo' => true,
        'created' => true,
        'modified' => true,
        'motivo' => true,
        'sistema' => true,
        'sistemaproaction' => true,
        'processo' => true
    ];
}
