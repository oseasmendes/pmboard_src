<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistema Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $dataregistro
 * @property string|null $codinome
 * @property string|null $descricao
 * @property string|null $referencia
 * @property int|null $empresa_id
 * @property string|null $objetivo
 * @property \Cake\I18n\FrozenTime|null $dataimplantacao
 * @property \Cake\I18n\FrozenTime|null $dataultimaatualizacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $departamento_id
 * @property int|null $bookmarked
 * @property int|null $statusfuncional_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Departamento $departamento
 * @property \App\Model\Entity\Projetosprodutosentrega[] $projetosprodutosentregas
 * @property \App\Model\Entity\Sistemasarea[] $sistemasareas
 * @property \App\Model\Entity\Sistemasbriefing[] $sistemasbriefings
 * @property \App\Model\Entity\Sistemascfgdb[] $sistemascfgdbs
 * @property \App\Model\Entity\Sistemascfgfront[] $sistemascfgfronts
 * @property \App\Model\Entity\Sistemascfgintegration[] $sistemascfgintegrations
 * @property \App\Model\Entity\Sistemascfgrelacionado[] $sistemascfgrelacionados
 * @property \App\Model\Entity\Sistemasconsultore[] $sistemasconsultores
 * @property \App\Model\Entity\Sistemasdoc[] $sistemasdocs
 * @property \App\Model\Entity\Sistemashistorico[] $sistemashistoricos
 * @property \App\Model\Entity\Sistemasrisco[] $sistemasriscos
 * @property \App\Model\Entity\Sistemasusuario[] $sistemasusuarios
 */
class Sistema extends Entity
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
        'dataregistro' => true,
        'codenome' => true,
        'descricao' => true,
        'referencia' => true,
        'empresa_id' => true,
        'empresasunidade_id' => true,        
        'sistemasestrategia_id' => true,
        'sistemasqueue_id' => true,        
        'ativo' => true,
        'objetivo' => true,
        'dataimplantacao' => true,
        'dataultimaatualizacao' => true,
        'created' => true,
        'modified' => true,
        'departamento_id' => true,
        'bookmarked' => true,
        'statusfuncional_id' => true,
        'empresa' => true,
        'empresasunidades' => true,
        'departamento' => true,
        'projetosprodutosentregas' => true,
        'sistemasareas' => true,
        'sistemasbriefings' => true,
        'sistemascfgdbs' => true,
        'sistemascfgfronts' => true,
        'sistemascfgintegrations' => true,
        'sistemascfgrelacionados' => true,
        'sistemascfgscripts' => true, 
        'sistemascfgtables' => true,         
        'sistemascfgurls' => true, 
        'sistemasconsultores' => true,
        'sistemasdocs' => true,
        'sistemashistoricos' => true,
        'sistemasriscos' => true,
        'sistemasqueues' => true,        
        'sistemasdepartamentos' => true,
        'sistemasmodulos' => true,
        'sistemasprocessos' => true,
        'sistemasestrategias' => true,
        'sistemasrelatorios' => true,
        'sistemasobjetos' => true,
        'fivewthreehs' => true,
        'urlprincipal'=> true,
        'urlteste'=> true,
        'urlqualidade'=> true,
        'sistemasusuarios' => true,
        'sistemasupdates' => true
    ];
}
