<?php

namespace App\Http\Middleware;

use Closure;

class AttachPreloadHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set("Link", iterator_to_array($this->links()));

        return $response;
    }

    protected function links()
    {
        foreach ($this->resources() as $resource) {
            yield "<{$resource->url}>; rel=preload; as={$resource->as}; nopush";
        }
    }

    protected function resources()
    {
        yield (object) ["as" => "style", "url" => mix("css/app.css")];

        yield (object) ["as" => "script", "url" => mix("js/manifest.js")];
        yield (object) ["as" => "script", "url" => mix("js/vendor.js")];
        yield (object) ["as" => "script", "url" => mix("js/app.js")];
    }
}
