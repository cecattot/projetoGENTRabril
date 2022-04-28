<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $siape
 * @property string $telefone
 * @property string|null $ativo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $role_id
 * @property int $area_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Minister[] $ministers
 * @property \App\Model\Entity\Pit[] $pits
 */
class Employee extends Entity
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
        'nome' => true,
        'email' => true,
        'siape' => true,
        'telefone' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'role_id' => true,
        'area_id' => true,
        'role' => true,
        'area' => true,
        'ministers' => true,
        'pits' => true,
    ];
}
