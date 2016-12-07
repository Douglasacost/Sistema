<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TEsp Entity
 *
 * @property int $id
 * @property int $cod_Tit
 * @property int $cod_Ar
 * @property int $cod_Esp
 * @property string $nombre_Esp
 */
class TEsp extends Entity
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
