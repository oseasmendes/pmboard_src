<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasencerramento Entity
 *
 * @property int $id
 * @property int|null $projetosprodutosentrega_id
 * @property int|null $solucoesaplicada_id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $descricao
 * @property int|null $consultore_id
 * @property int|null $sistemasfaq_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 * @property \App\Model\Entity\Solucoesaplicada $solucoesaplicada
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Sistemasfaq $sistemasfaq
 */
class Projetosentregasencerramento extends Entity
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
        'solucoesaplicada_id' => true,
        'data' => true,
        'descricao' => true,
        'prio' => true,
        'consultore_id' => true,
        'sistemasfaq_id' => true,
        'created' => true,
        'modified' => true,
        'projetosprodutosentrega' => true,
        'solucoesaplicada' => true,
        'consultore' => true,
        'sistemasfaq' => true
    ];
}
