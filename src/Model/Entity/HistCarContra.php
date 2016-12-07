<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HistCarContra Entity
 *
 * @property int $id
 * @property string $cedula
 * @property int $C_cargo
 * @property int $c_ubic
 * @property string $C_PLT
 * @property int $c_medio
 * @property string $otra_ubi
 * @property \Cake\I18n\Time $Desde
 * @property \Cake\I18n\Time $Hasta
 * @property int $Años
 * @property int $Meses
 * @property int $Dias
 * @property int $Cancelo
 * @property int $tipo
 * @property int $orden
 * @property string $Periodo
 */
class HistCarContra extends Entity
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
