<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU2H7hyg\srcDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU2H7hyg/srcDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerU2H7hyg.legacy');

    return;
}

if (!\class_exists(srcDebugProjectContainer::class, false)) {
    \class_alias(\ContainerU2H7hyg\srcDebugProjectContainer::class, srcDebugProjectContainer::class, false);
}

return new \ContainerU2H7hyg\srcDebugProjectContainer(array(
    'container.build_hash' => 'U2H7hyg',
    'container.build_id' => '7ba90bfe',
    'container.build_time' => 1525684593,
));
