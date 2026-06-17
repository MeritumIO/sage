<?php

namespace App;

use Georgeff\Kernel\Environment;
use Georgeff\Kernel\Module\ModuleInterface;
use Georgeff\Kernel\Module\ModuleRepositoryInterface;

final class ModuleRepository implements ModuleRepositoryInterface
{
    /**
     * Register application modules
     *
     * @return ModuleInterface[]
     */
    public function modules(Environment $env): array
    {
        return [
            new AppModule(),
        ];
    }
}
