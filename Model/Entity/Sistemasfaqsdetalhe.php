<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistemasfaqsdetalhe Entity
 *
 * @property int $id
 * @property int|null $sistemasfaq_id
 * @property string|null $referencia
 * @property int|null $ordem
 * @property string|null $descricao
 * @property int|null $participante_id
 * @property string|null $historico
 * @property string|null $contribuicaode
 * @property int|null $faqprecedente
 * @property bool|null $ativo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sistemasfaq $sistemasfaq
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Sistemasfaqsdetalhesimg[] $sistemasfaqsdetalhesimgs
 */
class Sistemasfaqsdetalhe extends Entity
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
        'sistemasfaq_id' => true,
        'referencia' => true,
        'ordem' => true,
        'descricao' => true,
        'participante_id' => true,
        'historico' => true,
        'contribuicaode' => true,
        'faqprecedente' => true,
        'sistemascfgscript_id' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'sistemasfaq' => true,
        'participante' => true,
        'sistemascfgscripts' => true,
        'sistemasfaqsdetalhesimgs' => true
    ];
}
