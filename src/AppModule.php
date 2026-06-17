<?php

namespace App;

use Georgeff\Kernel\Support\Env;
use Georgeff\Kernel\Environment;
use Meritum\Cli\CliKernelOption;
use Georgeff\Kernel\KernelInterface;
use Georgeff\Kernel\Module\ConfigurableModuleInterface;

final class AppModule implements ConfigurableModuleInterface
{
    /**
     * Register container definitions
     */
    public function register(KernelInterface $kernel): void
    {
        //
    }

    /**
     * Application config
     *
     * Values registered here are stored in the container under the key `kernel.config`
     *
     * @return array<string, mixed>
     */
    public function config(Environment $env): array
    {
        return [];
    }
}
