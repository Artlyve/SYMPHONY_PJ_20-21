<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWRd29UP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWRd29UP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWRd29UP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWRd29UP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWRd29UP\App_KernelDevDebugContainer([
    'container.build_hash' => 'WRd29UP',
    'container.build_id' => '3ba196ae',
    'container.build_time' => 1617116012,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWRd29UP');
