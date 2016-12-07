<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Planteles2 Entity
 *
 * @property string $C_PLT
 * @property string $C_DEPEN
 * @property string $C_EFED
 * @property string $C_MUFOPQ
 * @property string $C_MA_DPT
 * @property string $N_PLT
 * @property string $DIRECC
 * @property string $RURALIDAD
 */
class Planteles2 extends Entity
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
        'C_PLT' => false
    ];
}
