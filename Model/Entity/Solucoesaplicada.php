<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Solucoesaplicada Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property int|null $solucoestipo_id
 * @property string|null $detalhestecnico
 * @property int|null $prio
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Solucoestipo $solucoestipo
 * @property \App\Model\Entity\Projetosentregasencerramento[] $projetosentregasencerramentos
 */
class Solucoesaplicada extends Entity
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
        'solucoestipo_id' => true,
        'detalhestecnico' => true,
        'prio' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'solucoestipo' => true,
        'projetosentregasencerramentos' => true
    ];
}
