<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrModalida Model
 *
 * @method \App\Model\Entity\TrModalida get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrModalida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrModalida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrModalida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrModalida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrModalida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrModalida findOrCreate($search, callable $callback = null)
 */
class TrModalidaTable extends Table
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

        $this->table('tr_modalida');
        $this->displayField('C_moda');
        $this->primaryKey('C_moda');
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
            ->allowEmpty('C_moda', 'create');

        $validator
            ->allowEmpty('des_modali');

        return $validator;
    }
}
