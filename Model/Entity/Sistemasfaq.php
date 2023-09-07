<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasfaq Entity
 *
 * @property int $id
 * @property int|null $sistema_id
 * @property string|null $referencia
 * @property string|null $Descricao
 * @property string|null $Historico
 * @property bool|null $FrequentlyAskedQuestions
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $ativo
 *
 * @property \App\Model\Entity\Sistema $sistema
 * @property \App\Model\Entity\Entregasfaq[] $entregasfaqs
 * @property \App\Model\Entity\Sistemasfaqsdetalhe[] $sistemasfaqsdetalhes
 */
class Sistemasfaq extends Entity
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
        'sistema_id' => true,
        'referencia' => true,
        'Descricao' => true,
        'mensagemerro' => true,
        'Historico' => true,
        'FrequentlyAskedQuestions' => true,
        'created' => true,
        'modified' => true,
        'ativo' => true,
        'sistema' => true,
        'entregasfaqs' => true,
        'sistemasfaqsdetalhes' => true
    ];
}
