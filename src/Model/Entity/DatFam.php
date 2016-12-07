<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DatFam Entity
 *
 * @property int $id
 * @property int $CED
 * @property string $Cedulaf
 * @property string $Ape_Nomf
 * @property string $Fec_nac
 * @property string $Sexo
 * @property int $Parentesco
 * @property string $vivo
 * @property int $discapacidad
 */
class DatFam extends Entity
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
