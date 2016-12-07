<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ControldeSolicitude Entity
 *
 * @property int $id
 * @property int $cedula_solicitante
 * @property int $active
 * @property \Cake\I18n\Time $created
 * @property string $user_registro
 * @property \Cake\I18n\Time $fecha_sol_exp
 * @property string $user_sol_analista
 * @property \Cake\I18n\Time $fecha_busq_exp
 * @property string $user_busq_archivo
 * @property \Cake\I18n\Time $fecha_entre_exp
 * @property string $user_ent_analista
 * @property string $observacion
 */
class ControldeSolicitude extends Entity
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
