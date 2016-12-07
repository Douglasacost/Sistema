<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DatPerDocAdm Entity
 *
 * @property int $Cedula
 * @property string $Ape_nom
 * @property string $Nacio
 * @property string $Sexo
 * @property \Cake\I18n\Time $Fec_nac
 * @property string $Lugar_nac
 * @property string $Pais
 * @property string $Edo_civ
 * @property string $c_enti
 * @property string $Tip_tra
 * @property string $Dir_hab
 * @property string $Telf
 * @property string $Telf2
 * @property string $C_MA_DPT
 * @property string $C_MUFOPQ
 * @property string $Cond
 * @property string $T_TIPO
 * @property string $actualizado
 */
class DatPerDocAdm extends Entity
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
        'Cedula' => false
    ];
}
