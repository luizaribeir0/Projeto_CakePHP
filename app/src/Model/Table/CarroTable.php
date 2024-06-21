<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carro Model
 *
 * @property \App\Model\Table\ClienteTable&\Cake\ORM\Association\BelongsTo $Cliente
 *
 * @method \App\Model\Entity\Carro newEmptyEntity()
 * @method \App\Model\Entity\Carro newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Carro> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carro get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Carro findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Carro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Carro> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carro|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Carro saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Carro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carro>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carro> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carro>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carro> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CarroTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carro');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Cliente', [
            'foreignKey' => 'cliente_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome')
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->scalar('marca')
            ->requirePresence('marca', 'create')
            ->notEmptyString('marca');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        $validator
            ->scalar('cor')
            ->requirePresence('cor', 'create')
            ->notEmptyString('cor');

        $validator
            ->integer('cliente_id')
            ->allowEmptyString('cliente_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['cliente_id'], 'Cliente'), ['errorField' => 'cliente_id']);

        return $rules;
    }
}
