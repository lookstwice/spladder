<?php
namespace resources\api\authToken
{
    require_once(RESOURCE_PATH . '/../classes/resources/BaseResourceHandler.php');

    class ResourceHandler extends \classes\resources\BaseResourceHandler
    {
        protected function handleGet()
        {
            $response = new \phpHammock\http\Response();
            $data = array('handler' => 'token');
            $response->setData($data);

            return $response;
        } 
    }
}
