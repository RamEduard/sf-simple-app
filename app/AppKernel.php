<?php

use Kernel\Base as BaseKernel;

/**
 * Kernel App
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class AppKernel extends BaseKernel
{
    
    public function registerBundles()
    {
        // Neccessari
        $bundles = parent::registerBundles();
        
        // Register prod bundles

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            // Register dev bundles
        }

        return $bundles;
    }

}