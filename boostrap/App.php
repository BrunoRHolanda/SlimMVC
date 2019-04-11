<?php

class App extends \DI\Bridge\Slim\App
{
    protected function configureContainer(DI\ContainerBuilder $builder) {
         $settings = array_merge(
            require __DIR__ . '../config/slim.php',
            require __DIR__ . '../config/view.php'
        );

        $builder->addDefinitions($settings);
    }
}

return new App;
