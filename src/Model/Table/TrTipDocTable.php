<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrTipDoc Model
 *
 * @method \App\Model\Entity\TrTipDoc get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrTipDoc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrTipDoc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrTipDoc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrTipDoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrTipDoc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrTipDoc findOrCreate($search, callable $callback = null)
 */
class TrTipDocTable extends Table
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

        $this->table('tr_tip_doc');
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
            ->integer('c_catdoc')
            ->allowEmpty('c_catdoc');

        $validator
            ->integer('c_doc')
            ->allowEmpty('c_doc');

        $validator
            ->allowEmpty('desc_doc');

        return $validator;
    }
}
