<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DatFam Model
 *
 * @method \App\Model\Entity\DatFam get($primaryKey, $options = [])
 * @method \App\Model\Entity\DatFam newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DatFam[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DatFam|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DatFam patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DatFam[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DatFam findOrCreate($search, callable $callback = null)
 */
class DatFamTable extends Table
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

        $this->table('dat_fam');
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
            ->integer('CED')
            ->allowEmpty('CED');

        $validator
            ->allowEmpty('Cedulaf');

        $validator
            ->allowEmpty('Ape_Nomf');

        $validator
            ->allowEmpty('Fec_nac');

        $validator
            ->allowEmpty('Sexo');

        $validator
            ->integer('Parentesco')
            ->allowEmpty('Parentesco');

        $validator
            ->allowEmpty('vivo');

        $validator
            ->integer('discapacidad')
            ->allowEmpty('discapacidad');

        return $validator;
    }
}
