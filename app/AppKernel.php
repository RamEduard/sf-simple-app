<?php

use CustomKernel;

/**
 * Kernel App
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class AppKernel extends CustomKernel
{
    
    public function registerBundles()
    {
        // Neccessari
        $bundles = parent::registerBundles();
        
        //$bundles[] = new Bundle();

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            //$bundles[] = new Bundle();
        }

        return $bundles;
    }

}