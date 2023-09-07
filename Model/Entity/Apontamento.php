<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Apontamento Entity
 *
 * @property int $id
 * @property string|null $data
 * @property int|null $consultore_id
 * @property int|null $atividade_id
 * @property int|null $projetosprodutosentrega_id
 * @property string|null $resumo
 * @property int|null $registro
 * @property string|null $inicio
 * @property string|null $fim
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $integrado
 * @property float|null $tempo
 *
 * @property \App\Model\Entity\Consultore $consultore
 * @property \App\Model\Entity\Atividade $atividade
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 */
class Apontamento extends Entity
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
        'data' => true,
        'consultore_id' => true,
        'atividade_id' => true,
        'projetosprodutosentrega_id' => true,
        'resumo' => true,
        'registro' => true,
        'inicio' => true,
        'fim' => true,
        'created' => true,
        'modified' => true,
        'integrado' => true,
        'tempo' => true,
        'consultore' => true,
        'atividade' => true,
        'projetosprodutosentrega' => true
    ];
}
