<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFZSV0sS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFZSV0sS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFZSV0sS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFZSV0sS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFZSV0sS\App_KernelDevDebugContainer([
    'container.build_hash' => 'FZSV0sS',
    'container.build_id' => '45d11943',
    'container.build_time' => 1683797043,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFZSV0sS');
