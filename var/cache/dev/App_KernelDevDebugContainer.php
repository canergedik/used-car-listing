<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6Ke7Kn0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6Ke7Kn0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6Ke7Kn0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6Ke7Kn0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6Ke7Kn0\App_KernelDevDebugContainer([
    'container.build_hash' => '6Ke7Kn0',
    'container.build_id' => 'dfc61383',
    'container.build_time' => 1684842464,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6Ke7Kn0');
