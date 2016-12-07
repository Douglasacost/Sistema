<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TitulosPrinc Model
 *
 * @method \App\Model\Entity\TitulosPrinc get($primaryKey, $options = [])
 * @method \App\Model\Entity\TitulosPrinc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TitulosPrinc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TitulosPrinc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TitulosPrinc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TitulosPrinc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TitulosPrinc findOrCreate($search, callable $callback = null)
 */
class TitulosPrincTable extends Table
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

        $this->table('titulos_princ');
        $this->displayField('cod_titulo');
        $this->primaryKey('cod_titulo');
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
            ->integer('cod_titulo')
            ->allowEmpty('cod_titulo', 'create');

        $validator
            ->allowEmpty('nombre_titulo');

        $validator
            ->integer('nivel')
            ->allowEmpty('nivel');

        return $validator;
    }
}
