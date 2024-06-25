<?php
declare(strict_types=1);

namespace Headsnet\AcmeToolsBundle\Tests;

use Headsnet\AcmeToolsBundle\HeadsnetAcmeToolsBundle;
use Nyholm\BundleTest\TestKernel;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpKernel\KernelInterface;

#[CoversClass(HeadsnetAcmeToolsBundle::class)]
class HeadsnetAcmeToolsBundleTest extends KernelTestCase
{
    protected static function getKernelClass(): string
    {
        return TestKernel::class;
    }

    /**
     * @param array{debug?: bool, environment?: string} $options
     */
    protected static function createKernel(array $options = []): KernelInterface
    {
        /** @var TestKernel $kernel $kernel */
        $kernel = parent::createKernel($options);
        $kernel->addTestBundle(HeadsnetAcmeToolsBundle::class);
        $kernel->addTestConfig(__DIR__ . '/Fixtures/config.yaml');
        $kernel->handleOptions($options);

        return $kernel;
    }

    #[Test]
    public function initialise_bundle(): void
    {
        $kernel = self::bootKernel();
        $container = $kernel->getContainer();

        $this->assertTrue(
            $container->hasParameter('headsnet_acme_tools.root_namespace')
        );
    }
}
