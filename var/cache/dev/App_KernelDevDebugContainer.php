<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG5eVfE2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG5eVfE2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG5eVfE2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG5eVfE2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG5eVfE2\App_KernelDevDebugContainer([
    'container.build_hash' => 'G5eVfE2',
    'container.build_id' => '3a95ed14',
    'container.build_time' => 1660620280,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG5eVfE2');
