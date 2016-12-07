<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrPai Entity
 *
 * @property string $c_pais
 * @property string $despais
 *
 * @property \App\Model\Entity\DatPerDocAdm $dat_per_doc_adm
 */
class TrPai extends Entity
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
        'c_pais' => false
    ];
}
