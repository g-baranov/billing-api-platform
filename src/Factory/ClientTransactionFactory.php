<?php

namespace App\Factory;

use App\Entity\ClientTransaction;
use App\Repository\ClientTransactionRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<ClientTransaction>
 *
 * @method static ClientTransaction|Proxy createOne(array $attributes = [])
 * @method static ClientTransaction[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static ClientTransaction|Proxy find(object|array|mixed $criteria)
 * @method static ClientTransaction|Proxy findOrCreate(array $attributes)
 * @method static ClientTransaction|Proxy first(string $sortedField = 'id')
 * @method static ClientTransaction|Proxy last(string $sortedField = 'id')
 * @method static ClientTransaction|Proxy random(array $attributes = [])
 * @method static ClientTransaction|Proxy randomOrCreate(array $attributes = [])
 * @method static ClientTransaction[]|Proxy[] all()
 * @method static ClientTransaction[]|Proxy[] findBy(array $attributes)
 * @method static ClientTransaction[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static ClientTransaction[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ClientTransactionRepository|RepositoryProxy repository()
 * @method ClientTransaction|Proxy create(array|callable $attributes = [])
 */
final class ClientTransactionFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'amount' => self::faker()->randomNumber(),
            'createdAt' => self::faker()->datetime(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(ClientTransaction $clientTransaction) {})
        ;
    }

    protected static function getClass(): string
    {
        return ClientTransaction::class;
    }
}
