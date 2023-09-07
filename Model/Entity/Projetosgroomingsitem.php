<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosgroomingsitem Entity
 *
 * @property int $id
 * @property int|null $projetosgrooming_id
 * @property int|null $projetosprodutosentrega_id
 * @property int|null $referencianumerica
 * @property string|null $referencia
 * @property float|null $estimado
 * @property float|null $quebrado
 * @property string|null $descricao
 * @property string|null $comentario
 * @property int|null $statusfuntional_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosgrooming $projetosgrooming
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Statusfuntional $statusfuntional
 */
class Projetosgroomingsitem extends Entity
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
        'projetosgrooming_id' => true,
        'projetosprodutosentrega_id' => true,
        'referencianumerica' => true,
        'referencia' => true,
        'estimado' => true,
        'quebrado' => true,
        'descricao' => true,
        'comentario' => true,
        'statusfuntional_id' => true,
        'created' => true,
        'modified' => true,
        'projetosgrooming' => true,
        'projetosprodutosentrega' => true,
        'statusfuntional' => true
    ];
}
