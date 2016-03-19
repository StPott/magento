<?php

class Emzee_ExampleExtension_Test_Config_ActivationXml extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * @test
     */
    public function codePool()
    {
        $this->assertModuleCodePool('local');
    }
}