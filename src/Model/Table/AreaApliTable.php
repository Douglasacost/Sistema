<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreaApli Model
 *
 * @method \App\Model\Entity\AreaApli get($primaryKey, $options = [])
 * @method \App\Model\Entity\AreaApli newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AreaApli[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AreaApli|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AreaApli patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AreaApli[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AreaApli findOrCreate($search, callable $callback = null)
 */
class AreaApliTable extends Table
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

        $this->table('area_apli');
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
            ->integer('cod_Tit')
            ->allowEmpty('cod_Tit');

        $validator
            ->integer('cod_Area')
            ->allowEmpty('cod_Area');

        $validator
            ->allowEmpty('nombre_Area');

        return $validator;
    }
}
