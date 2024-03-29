<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->privates['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
    }
    if (isset($this->services['fos_rest.view_handler'])) {
        yield 'fos_rest.view_handler.default' => ($this->services['fos_rest.view_handler'] ?? null);
    }
}, function () {
    return 0 + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->services['fos_rest.view_handler']));
}), ['debug.stopwatch' => 'reset', 'security.token_storage' => 'setToken', 'fos_rest.view_handler.default' => 'reset']);
