<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Statusfuncional Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Fivewthreeh[] $fivewthreehs
 * @property \App\Model\Entity\Projeto[] $projetos
 * @property \App\Model\Entity\Projetosaloc[] $projetosalocs
 * @property \App\Model\Entity\Projetosalocsprofile[] $projetosalocsprofiles
 * @property \App\Model\Entity\Projetosapontamento[] $projetosapontamentos
 * @property \App\Model\Entity\Projetosproduto[] $projetosprodutos
 * @property \App\Model\Entity\Projetosprodutosentrega[] $projetosprodutosentregas
 * @property \App\Model\Entity\Projetosprodutosfinance[] $projetosprodutosfinances
 * @property \App\Model\Entity\Projetosprodutosrun[] $projetosprodutosruns
 * @property \App\Model\Entity\Projetosstatus[] $projetosstatus
 * @property \App\Model\Entity\Sistema[] $sistemas
 */
class Statusfuncional extends Entity
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
        'descricao' => true,
        'created' => true,
        'modified' => true,
        'fivewthreehs' => true,
        'projetos' => true,
        'projetosalocs' => true,
        'projetosalocsprofiles' => true,
        'projetosapontamentos' => true,
        'projetosprodutos' => true,
        'projetosprodutosentregas' => true,
        'projetosprodutosfinances' => true,        
        'projetosprodutosruns' => true,
        'projetosprodutosruns' => true,
        'projetosoutofscopes' => true,
        'fupagendas' => true,
        'projetosstatus' => true,
        'sistemas' => true
    ];
}
