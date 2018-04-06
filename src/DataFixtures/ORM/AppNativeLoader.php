<?php

namespace App\DataFixtures\ORM;

use Nelmio\Alice\Loader\NativeLoader;
use Faker\Generator as FakerGenerator;

class AppNativeLoader extends NativeLoader
{
    protected function createFakerGenerator(): FakerGenerator
    {
        $generator = parent::createFakerGenerator();
        $generator->addProvider(new BuffyProvider($generator));
        return $generator;
    }
}