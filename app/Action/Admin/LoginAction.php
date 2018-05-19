<?php

namespace App\Action\Admin;

use App\Action\Action as Action;

final Class LoginAction extends Action{

    public function index($request, $response)
    {

        return $this->view->render($response, 'admin/login/login.phtml');

    }

}

?>