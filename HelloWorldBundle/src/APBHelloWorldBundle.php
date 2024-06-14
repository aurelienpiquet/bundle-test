<?php

namespace APB\HelloWorldBundle;

use APB\HelloWorldBundle\DependencyInjection\ApbHelloWorldExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class APBHelloWorldBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new ApbHelloWorldExtension();
    }
}