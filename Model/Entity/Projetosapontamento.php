<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosapontamento Entity
 *
 * @property int $id
 * @property int|null $consultore_id
 * @property int|null $projetosprodutosentrega_id
 * @property \Cake\I18n\FrozenTime|null $data
 * @property \Cake\I18n\FrozenTime|null $horainicio
 * @property \Cake\I18n\FrozenTime|null $horafim
 * @property float|null $temporealizado
 * @property int|null $statusfuncional_id
 * @property string|null $descricao
 * @property string|null $historico
 * @property string|null $canal
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 */
class Projetosapontamento extends Entity
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
        'consultore_id' => true,
        'projetosprodutosentrega_id' => true,
        'data' => true,
        'horainicio' => true,
        'horafim' => true,
        'temporealizado' => true,
        'statusfuncional_id' => true,
        'descricao' => true,
        'historico' => true,
        'canal' => true,
        'created' => true,
        'modified' => true,
        'consultore' => true,
        'projetosprodutosentrega' => true,
        'statusfuncional' => true
    ];
}
