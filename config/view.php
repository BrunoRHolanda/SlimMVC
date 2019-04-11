<?php

return [
    \Slim\Views\Twig::class => function (Interop\Container\ContainerInterface $container) {
        $view = new \Slim\Views\Twig(__DIR__ . '../view', [
            'cache' => false,
        ]);

        $view->addExtension(new \Slim\Views\TwigExtension(
            $container->get('router'),
            $container->get('request')->getUri()
        ));

        return $view;
    }
];
