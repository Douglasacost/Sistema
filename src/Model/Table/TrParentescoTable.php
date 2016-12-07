<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrParentesco Model
 *
 * @method \App\Model\Entity\TrParentesco get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrParentesco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrParentesco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrParentesco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrParentesco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrParentesco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrParentesco findOrCreate($search, callable $callback = null)
 */
class TrParentescoTable extends Table
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

        $this->table('tr_parentesco');
        $this->displayField('C_paren');
        $this->primaryKey('C_paren');
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
            ->integer('C_paren')
            ->allowEmpty('C_paren', 'create');

        $validator
            ->allowEmpty('desparen');

        return $validator;
    }
}
