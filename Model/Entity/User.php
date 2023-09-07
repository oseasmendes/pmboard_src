<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $email
 * @property string|null $pwd
 * @property string|null $nome
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $profile_id
 *
 * @property \App\Model\Entity\Profile $profile
 * @property \App\Model\Entity\Projeto[] $projetos
 */
class User extends Entity
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
        'login' => true,
        'email' => true,
        'pwd' => true,
        'nome' => true,
        'created' => true,
        'modified' => true,
        'profile_id' => true,
        'profile' => true,
        'projetos' => true
    ];
}
