<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPbX3js2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPbX3js2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPbX3js2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPbX3js2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPbX3js2\App_KernelDevDebugContainer([
    'container.build_hash' => 'PbX3js2',
    'container.build_id' => '10aa4d54',
    'container.build_time' => 1619092914,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPbX3js2');
