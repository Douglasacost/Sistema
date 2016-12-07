<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrTipDoc Entity
 *
 * @property int $id
 * @property int $c_catdoc
 * @property int $c_doc
 * @property string $desc_doc
 */
class TrTipDoc extends Entity
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
