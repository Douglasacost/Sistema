<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrTipclasi Model
 *
 * @method \App\Model\Entity\TrTipclasi get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrTipclasi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrTipclasi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrTipclasi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrTipclasi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrTipclasi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrTipclasi findOrCreate($search, callable $callback = null)
 */
class TrTipclasiTable extends Table
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

        $this->table('tr_tipclasi');
        $this->displayField('c_clasi');
        $this->primaryKey('c_clasi');
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
            ->allowEmpty('c_clasi', 'create');

        $validator
            ->allowEmpty('Desc_clas');

        return $validator;
    }
}
