<?php

namespace App\Factory;

use App\Entity\Payment;
use App\Repository\PaymentRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Payment>
 *
 * @method static Payment|Proxy createOne(array $attributes = [])
 * @method static Payment[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Payment|Proxy find(object|array|mixed $criteria)
 * @method static Payment|Proxy findOrCreate(array $attributes)
 * @method static Payment|Proxy first(string $sortedField = 'id')
 * @method static Payment|Proxy last(string $sortedField = 'id')
 * @method static Payment|Proxy random(array $attributes = [])
 * @method static Payment|Proxy randomOrCreate(array $attributes = [])
 * @method static Payment[]|Proxy[] all()
 * @method static Payment[]|Proxy[] findBy(array $attributes)
 * @method static Payment[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Payment[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static PaymentRepository|RepositoryProxy repository()
 * @method Payment|Proxy create(array|callable $attributes = [])
 */
final class PaymentFactory extends ModelFactory
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
            'requestData' => [],
            'responseData' => [],
            'createdAt' => self::faker()->datetime(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Payment $payment) {})
        ;
    }

    protected static function getClass(): string
    {
        return Payment::class;
    }
}
