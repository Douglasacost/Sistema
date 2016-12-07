<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MfPquia Model
 *
 * @method \App\Model\Entity\MfPquium get($primaryKey, $options = [])
 * @method \App\Model\Entity\MfPquium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MfPquium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MfPquium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MfPquium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MfPquium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MfPquium findOrCreate($search, callable $callback = null)
 */
class MfPquiaTable extends Table
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

        $this->table('mf_pquia');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('COD_ENTIDAD');

        $validator
            ->allowEmpty('C_MA_DPT');

        $validator
            ->allowEmpty('C_MUFOPQ');

        $validator
            ->allowEmpty('N_MUFOPQ');

        return $validator;
    }
}
