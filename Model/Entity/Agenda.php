<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agenda Entity
 *
 * @property int $id
 * @property int|null $atividadetipo_id
 * @property int|null $departamento_id
 * @property int|null $projeto_id
 * @property string|null $tipoagenda
 * @property string|null $observacao
 * @property \Cake\I18n\FrozenTime|null $dataagenda
 * @property \Cake\I18n\FrozenTime|null $horainicio
 * @property \Cake\I18n\FrozenTime|null $horafim
 * @property string|null $local
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $etiquetaadicional
 * @property string|null $diadasemana
 * @property int|null $localdiferente
 * @property int|null $Periodicidade
 * @property string|null $referencia
 * @property string|null $referenciadia
 * @property int|null $projetosproduto_id
 * @property int|null $projetosprodutosentrega_id
 *
 * @property \App\Model\Entity\Atividadetipo $atividadetipo
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Projetosproduto $projetosproduto
 * @property \App\Model\Entity\Projetosprodutosentrega $projetosprodutosentrega
 */
class Agenda extends Entity
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
        'atividadetipo_id' => true,
        'departamento_id' => true,
        'consultore_id' => true,
        'projeto_id' => true,
        'tipoagenda' => true,
        'observacao' => true,
        'dataagenda' => true,
        'horainicio' => true,
        'horafim' => true,
        'local' => true,
        'created' => true,
        'modified' => true,
        'etiquetaadicional' => true,
        'diadasemana' => true,
        'localdiferente' => true,
        'Periodicidade' => true,
        'referencia' => true,
        'referenciadia' => true,
        'projetosproduto_id' => true,
        'projetosprodutosentrega_id' => true,
        'atividadetipo' => true,
        'departamento' => true,
        'projeto' => true,        
        'projetosproduto' => true,
        'consultores' => true,
        'ata' => true,
        'projetosprodutosentrega' => true,
        'projetossprintsdailysreferences' => true

    ];
}
