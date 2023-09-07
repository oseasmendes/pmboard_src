<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosfeedback Entity
 *
 * @property int $id
 * @property int|null $feedbacktipo_id
 * @property string|null $descricao
 * @property string|null $historico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $projetosproduto_id
 *
 * @property \App\Model\Entity\Feedbacktipo $feedbacktipo
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 */
class Projetosprodutosfeedback extends Entity
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
        'feedbacktipo_id' => true,
        'descricao' => true,
        'historico' => true,
        'created' => true,
        'modified' => true,
        'projetosproduto_id' => true,
        'feedbacktipo' => true,
        'projetosproduto' => true
    ];
}
