<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ControlSolicitude Entity
 *
 * @property int $id
 * @property string $tipo_solicitd
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $cedula_id
 * @property string $Ape_nomb_id
 * @property int $tiptra_id
 *
 * @property \App\Model\Entity\Cedula $cedula
 * @property \App\Model\Entity\ApeNomb $ape_nomb
 * @property \App\Model\Entity\Tiptra $tiptra
 */
class ControlSolicitude extends Entity
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
