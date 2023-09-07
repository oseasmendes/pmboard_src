<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasdoc Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property int|null $documento_id
 * @property \Cake\I18n\FrozenTime|null $criadoem
 * @property \Cake\I18n\FrozenTime|null $atualizadoem
 * @property string|null $documentourl
 * @property string|null $documentonome
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Documento $documento
 */
class Sistemasdoc extends Entity
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
        'sistema_id' => true,
        'documento_id' => true,
        'criadoem' => true,
        'atualizadoem' => true,
        'documentourl' => true,
        'documentonome' => true,
        'created' => true,
        'modified' => true,
        'sistema' => true,
        'documento' => true
    ];
}
