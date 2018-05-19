<?php

namespace App\Action;

final Class HomeAction extends Action {

    public function index($request, $response)
    {
        $vars['page'] = 'home';

        return $this->view->render($response, 'template.phtml', $vars);

    }

    public function sobre($request, $response)
    {
        $vars['page'] = 'sobre';

        return $this->view->render($response, 'template.phtml', $vars);

    }

    public function contato($request, $response)
    {
        $vars['page'] = 'contato';

        return $this->view->render($response, 'template.phtml', $vars);

    }

}

?>