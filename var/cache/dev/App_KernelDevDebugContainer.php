<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPOOmufD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPOOmufD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPOOmufD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPOOmufD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPOOmufD\App_KernelDevDebugContainer([
    'container.build_hash' => 'POOmufD',
    'container.build_id' => '0f1a6945',
    'container.build_time' => 1619075512,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPOOmufD');
