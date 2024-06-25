<?php

namespace Headsnet\AcmeToolsBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class HeadsnetAcmeToolsBundle extends AbstractBundle
{
    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
                ->scalarNode('root_namespace')->cannotBeEmpty()->end()
        ;
    }

    /**
     * @param array{
     *     root_namespace: string,
     * } $config
     */
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.php');

        $container->parameters()
            ->set('headsnet_acme_tools.root_namespace', $config['root_namespace'])
        ;
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}
