<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DatPerDocAdm Model
 *
 * @method \App\Model\Entity\DatPerDocAdm get($primaryKey, $options = [])
 * @method \App\Model\Entity\DatPerDocAdm newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DatPerDocAdm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DatPerDocAdm|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DatPerDocAdm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DatPerDocAdm[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DatPerDocAdm findOrCreate($search, callable $callback = null)
 */
class DatPerDocAdmTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('dat_per_doc_adm');
        $this->displayField('Cedula');
        $this->primaryKey('Cedula');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('Cedula')
            ->allowEmpty('Cedula', 'create');

        $validator
            ->allowEmpty('Ape_nom');

        $validator
            ->allowEmpty('Nacio');

        $validator
            ->allowEmpty('Sexo');

        $validator
            ->date('Fec_nac')
            ->allowEmpty('Fec_nac');

        $validator
            ->allowEmpty('Lugar_nac');

        $validator
            ->allowEmpty('Pais');

        $validator
            ->allowEmpty('Edo_civ');

        $validator
            ->allowEmpty('c_enti');

        $validator
            ->allowEmpty('Tip_tra');

        $validator
            ->allowEmpty('Dir_hab');

        $validator
            ->allowEmpty('Telf');

        $validator
            ->allowEmpty('Telf2');

        $validator
            ->allowEmpty('C_MA_DPT');

        $validator
            ->allowEmpty('C_MUFOPQ');

        $validator
            ->allowEmpty('Cond');

        $validator
            ->allowEmpty('T_TIPO');

        $validator
            ->allowEmpty('actualizado');

        return $validator;
    }
}
