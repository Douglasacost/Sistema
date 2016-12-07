<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RepHijo Entity
 *
 * @property int $id
 * @property int $CED
 * @property string $NOMBRE
 * @property string $CEDF
 * @property string $NOMBREF
 * @property string $FEC_NAC
 * @property int $EDAD
 * @property int $tipo
 * @property int $cond
 */
class RepHijo extends Entity
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
