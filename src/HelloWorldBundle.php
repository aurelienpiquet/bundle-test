<?php

namespace HelloWorldBundle;

use HelloWorldBundle\DependencyInjection\HelloWorldExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class HelloWorldBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new HelloWorldExtension();
    }
}