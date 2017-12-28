<?php

/** Helper functions to provide better Lumen-Laravel compatibility for the package */

if (! function_exists('resolve')) {
    /**
     * Resolve a service from the container.
     *
     * @param  string  $name
     * @return mixed
     */
    function resolve($name)
    {
        return app($name);
    }
}