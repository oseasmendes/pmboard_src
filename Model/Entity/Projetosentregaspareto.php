<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregaspareto Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosentrega_id
 * @property int|null $pareto_id
 * @property string|null $descricao
 * @property string|null $historico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $motivo_id
 * @property int|null $responsabilidade_id
 *
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Pareto $pareto
 * @property \App\Model\Entity\Motivo $motivo
 * @property \App\Model\Entity\Responsabilidade $responsabilidade
 */
class Projetosentregaspareto extends Entity
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
        'projetosprodutosentrega_id' => true,
        'pareto_id' => true,
        'descricao' => true,
        'referencia' => true,
        'historico' => true,
        'dataorigem' => true,
        'canal' => true,        
        'created' => true,
        'modified' => true,
        'motivo_id' => true,
        'projetossprint_id' => true,
        'entregastipo_id' => true,       
        'responsabilidade_id' => true,
        'projetosprodutosentrega' => true,       
        'projetossprint' => true,
        'entregastipo' => true,
        'pareto' => true,
        'motivo' => true,
        'responsabilidade' => true
    ];
}
