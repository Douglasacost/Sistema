<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaDpto Model
 *
 * @method \App\Model\Entity\MaDpto get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaDpto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MaDpto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaDpto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaDpto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaDpto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaDpto findOrCreate($search, callable $callback = null)
 */
class MaDptoTable extends Table
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

        $this->table('ma_dpto');
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
            ->allowEmpty('C_MA_DPT');

        $validator
            ->allowEmpty('C_EFED');

        $validator
            ->allowEmpty('N_MUAUDP');

        return $validator;
    }
}
