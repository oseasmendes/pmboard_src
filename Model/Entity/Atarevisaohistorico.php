<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atarevisaohistorico Entity
 *
 * @property int $id
 * @property int|null $ata_id
 * @property int|null $atadetalhe_id
 * @property string|null $correcao_solicitado_por
 * @property bool|null $aprovado
 * @property string|null $proposta_alteracao
 * @property \Cake\I18n\FrozenTime|null $datarevisao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Ata $ata
 * @property \App\Model\Entity\Atadetalhe $atadetalhe
 */
class Atarevisaohistorico extends Entity
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
        'atadetalhe_id' => true,
        'correcao_solicitado_por' => true,
        'aprovado' => true,
        'proposta_alteracao' => true,
        'datarevisao' => true,
        'created' => true,
        'modified' => true,
        'ata' => true,
        'atadetalhe' => true
    ];
}
