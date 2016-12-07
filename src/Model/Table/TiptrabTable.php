<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiptrab Model
 *
 * @method \App\Model\Entity\Tiptrab get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tiptrab newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tiptrab[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tiptrab|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tiptrab patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tiptrab[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tiptrab findOrCreate($search, callable $callback = null)
 */
class TiptrabTable extends Table
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

        $this->table('tiptrab');
        $this->displayField('Tip_tra');
        $this->primaryKey('Tip_tra');
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
            ->allowEmpty('Tip_tra', 'create');

        $validator
            ->allowEmpty('Descri');

        return $validator;
    }
}
