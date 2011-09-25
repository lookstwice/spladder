<?php
namespace classes\resources
{
    require_once('phpHammock/http/Request.php');
    require_once('phpHammock/http/Response.php');
    require_once('phpHammock/resources/BaseResourceHandler.php');
    require_once('phpHammock/resources/AuthenticationException.php');

    class BaseResourceHandler extends \phpHammock\resources\BaseResourceHandler
    {
        public function authenticate()
        {
            if ($this->request->getHeader('authToken') !== '12345')
            {
                throw new \phpHammock\resources\AuthenticationException();
            }
        }
    }
}
