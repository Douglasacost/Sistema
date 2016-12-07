<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DatCar Entity
 *
 * @property int $id
 * @property string $cedula
 * @property int $C_cargo
 * @property string $C_PLT
 * @property \Cake\I18n\Time $F_ING
 * @property string $c_moda
 * @property string $Clasifi
 * @property string $Cjerarquia
 * @property int $c_medio
 * @property int $C_SIP_ESP
 * @property int $tipo
 * @property string $Periodo
 * @property string $comision
 * @property string $lugar
 * @property \Cake\I18n\Time $desde
 * @property \Cake\I18n\Time $hasta
 */
class DatCar extends Entity
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
