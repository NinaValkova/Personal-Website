<?php

class Router
{
    protected array $routes = [];

    public function add($uri, $file, $class, $controllerMethod, $requestMethod): void
    {
        $this->routes[] = [
            "uri" => $uri,
            "file" => $file,
            "class" => $class,
            "controllerMethod" => $controllerMethod,
            "requestMethod" => strtoupper($requestMethod)
        ];
    }

    public function get($uri, $file, $class, $controllerMethod): void
    {
        $this->add($uri, $file, $class, $controllerMethod, "GET");
    }

    public function post($uri, $file, $class, $controllerMethod): void
    {
        $this->add($uri, $file, $class, $controllerMethod, "POST");
    }

    public function route($uri, $requestMethod): array
    {
        foreach ($this->routes as $route) {
            if (
                $route["uri"] === $uri &&
                $route["requestMethod"] === strtoupper($requestMethod)
            ) {
                return $route;
            }
        }

        die("404 - Page not found");
    }
}