<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CondEspecial Entity
 *
 * @property int $id
 * @property int $cedula
 * @property int $c_cond
 * @property string $Descripcion
 * @property int $c_cargo
 * @property string $feci_cargo
 * @property string $fecf_cargo
 */
class CondEspecial extends Entity
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
        '*' => true,
        'id' => false
    ];
}
