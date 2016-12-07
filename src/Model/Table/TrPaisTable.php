<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrPais Model
 *
 * @method \App\Model\Entity\TrPai get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrPai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrPai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrPai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrPai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrPai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrPai findOrCreate($search, callable $callback = null)
 */
class TrPaisTable extends Table
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

        $this->table('tr_pais');
        $this->displayField('c_pais');
        $this->primaryKey('c_pais');
        $this->belongsTo('dat_per_doc_adm', [
            'foreignKey' => 'Pais',
            'joinType' => 'INNER'
        ]);
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
            ->allowEmpty('c_pais', 'create');

        $validator
            ->allowEmpty('despais');

        return $validator;
    }
}
