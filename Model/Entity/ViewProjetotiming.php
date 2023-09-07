<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewProjetotiming Entity
 *
 * @property int $projeto_id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $datainicio
 * @property \Cake\I18n\FrozenTime|null $datafim
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property float|null $tmpdisponiveldadata
 * @property float|null $tmpdisponiveldehoje
 * @property float|null $tmpaberturadadata
 * @property float|null $tmpaberturaddehoje
 * @property int|null $totaldediasuteisdadata
 * @property int|null $totaldediasuteisdehoje
 *
 * @property \App\Model\Entity\Projeto $projeto
 */
class ViewProjetotiming extends Entity
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
        'descricao' => true,
        'datainicio' => true,
        'datafim' => true,
        'created' => true,
        'modified' => true,
        'tmpdisponiveldadata' => true,
        'tmpdisponiveldehoje' => true,
        'tmpaberturadadata' => true,
        'tmpaberturaddehoje' => true,
        'totaldediasuteisdadata' => true,
        'totaldediasuteisdehoje' => true,
        'projeto' => true
    ];
}
