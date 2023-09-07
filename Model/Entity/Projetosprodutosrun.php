<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosprodutosrun Entity
 *
 * @property int $id
 * @property int|null $projetosproduto_id
 * @property string|null $descricao
 * @property string|null $partnumber
 * @property int|null $codigo
 * @property \Cake\I18n\FrozenTime|null $datainicioprevisto
 * @property \Cake\I18n\FrozenTime|null $datafimprevisto
 * @property float|null $tempototalprevisto
 * @property int|null $statusfuncional_id
 * @property string|null $resultado
 * @property string|null $observacao
 * @property string|null $responsavel
 * @property \Cake\I18n\FrozenTime|null $datainicioexecucao
 * @property \Cake\I18n\FrozenTime|null $datafimexecucao
 * @property float|null $tempototalexecucao
 * @property int|null $processo_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Statusfuncional $statusfuncional
 * @property \App\Model\Entity\Processo $processo
 */
class Projetosprodutosrun extends Entity
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
        'projetosproduto_id' => true,
        'descricao' => true,
        'partnumber' => true,
        'codigo' => true,
        'datainicioprevisto' => true,
        'datafimprevisto' => true,
        'tempototalprevisto' => true,
        'statusfuncional_id' => true,
        'resultado' => true,
        'observacao' => true,
        'responsavel' => true,
        'datainicioexecucao' => true,
        'datafimexecucao' => true,
        'tempototalexecucao' => true,
        'processo_id' => true,
        'created' => true,
        'modified' => true,
        'projetosproduto' => true,
        'statusfuncional' => true,
        'processo' => true
    ];
}
