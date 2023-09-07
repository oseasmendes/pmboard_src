<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosstatus Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property int|null $statusfuncional_id
 * @property int|null $motivo_id
 * @property string|null $descricao
 * @property string|null $historico
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $responsabilidade_id
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Motivo $motivo
 * @property \App\Model\Entity\Responsabilidade $responsabilidade
 */
class Projetosstatus extends Entity
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
        'projeto_id' => true,
        'statusfuncional_id' => true,
        'motivo_id' => true,
        'descricao' => true,
        'historico' => true,
        'created' => true,
        'modified' => true,
        'responsabilidade_id' => true,
        'projeto' => true,
        'statusfuncional' => true,
        'motivo' => true,
        'responsabilidade' => true
    ];
}
