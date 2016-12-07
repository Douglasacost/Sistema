<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrInstitu Model
 *
 * @method \App\Model\Entity\TrInstitu get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrInstitu newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrInstitu[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrInstitu|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrInstitu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrInstitu[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrInstitu findOrCreate($search, callable $callback = null)
 */
class TrInstituTable extends Table
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

        $this->table('tr_institu');
        $this->displayField('c_inst');
        $this->primaryKey('c_inst');
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
            ->integer('c_inst')
            ->allowEmpty('c_inst', 'create');

        $validator
            ->allowEmpty('Des_inst');

        return $validator;
    }
}
