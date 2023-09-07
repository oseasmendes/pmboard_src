<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetoscontato Entity
 *
 * @property int $id
 * @property int|null $projeto_id
 * @property int|null $participante_id
 * @property string|null $nome
 * @property string|null $papel
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenDate|null $dataengajamento
 * @property string|null $representacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Participante $participante
 */
class Projetoscontato extends Entity
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
        'participante_id' => true,
        'nome' => true,
        'papel' => true,
        'descricao' => true,
        'dataengajamento' => true,
        'representacao' => true,
        'created' => true,
        'modified' => true,
        'projeto' => true,
        'participante' => true
    ];
}
