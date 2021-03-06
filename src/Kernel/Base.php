<?php

namespace Kernel;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

/**
 * Kernel App
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class Base extends Kernel
{
    
    public function registerBundles()
    {
        $bundles = [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            #new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
            #new \Symfony\Bundle\TwigBundle\TwigBundle(),
            #new \Symfony\Bundle\MonologBundle\MonologBundle(),
            #new \Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            #$bundles[] = new \Symfony\Bundle\DebugBundle\DebugBundle();
            #$bundles[] = new \Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            #$bundles[] = new \Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            #$bundles[] = new \Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return dirname(__DIR__).'/../app';
    }

    public function getCacheDir()
    {
        return $this->getRootDir().'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return $this->getRootDir().'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}