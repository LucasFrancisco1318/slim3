<?php

namespace App\Middleware\Admin;

Class AuthMiddleware {

    public function __invoke($request, $response, $next)
    {
        if (! isset($_SESSION[PREFIX . 'logado'])) {
            return $response->WithRedirect(PATH . '/admin/login');
        }

        $response = $next($request, $response);

        return $response;
    }

}

?>