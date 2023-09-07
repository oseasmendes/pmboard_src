<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projetosentregasoppresposta Entity
 *
 * @property int $id
 * @property int|null $projetosentregasopenpoint_id
 * @property string|null $respondidopor
 * @property string|null $respondidopara
 * @property string|null $descricao
 * @property string|null $resumo
 * @property string|null $docreferencia
 * @property \Cake\I18n\FrozenDate|null $docdata
 * @property string|null $doccanal
 * @property string|null $docassunto
 * @property bool|null $planoacao
 * @property bool|null $validado
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $conclusao
 * @property string|null $statusprojeto
 *
 * @property \App\Model\Entity\Projetosentregasopenpoint $projetosentregasopenpoint
 */
class Projetosentregasoppresposta extends Entity
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
        'projetosentregasopenpoint_id' => true,
        'respondidopor' => true,
        'respondidopara' => true,
        'descricao' => true,
        'resumo' => true,
        'docreferencia' => true,
        'docdata' => true,
        'doccanal' => true,
        'docassunto' => true,
        'planoacao' => true,
        'validado' => true,
        'created' => true,
        'modified' => true,
        'conclusao' => true,
        'statusprojeto' => true,
        'projetosentregasopenpoint' => true
    ];
}
