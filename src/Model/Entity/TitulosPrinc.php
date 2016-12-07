<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TitulosPrinc Entity
 *
 * @property int $cod_titulo
 * @property string $nombre_titulo
 * @property int $nivel
 */
class TitulosPrinc extends Entity
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
        'cod_titulo' => false
    ];
}
