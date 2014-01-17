<?php

namespace Acme\Bundle\TaskBundle\Tests\Unit\DependencyInjection;

use Acme\Bundle\TaskBundle\DependencyInjection\AcmeTaskExtension;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class AcmeTaskExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AcmeTaskExtension
     */
    protected $extension;

    /**
     * @var ContainerBuilder
     */
    protected $container;

    protected function setUp()
    {
        $this->container = new ContainerBuilder();
        $this->extension = new AcmeTaskExtension();
    }

    /**
     * @dataProvider loadParameterDataProvider
     */
    public function testLoadParameters($parameter)
    {
        $this->extension->load(array(), $this->container);
        $this->assertTrue($this->container->hasParameter($parameter));
    }

    public function loadParameterDataProvider()
    {
        return array(
            'acme_task.entity.class' => array('acme_task.entity.class')
        );
    }
}
