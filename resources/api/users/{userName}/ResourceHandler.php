<?php
namespace resources\api\users\userName
{
    require_once(RESOURCE_PATH . '/../classes/resources/BaseResourceHandler.php');
 
    class ResourceHandler extends \classes\resources\BaseResourceHandler
    {
        protected function handleGet()
        {
            $response = new \phpHammock\http\Response();

            $data = array('handler' => 'users - ' . $this->request->getUriToken('/api/users/{userName}'));
            $response->setData($data);

            return $response;
        } 
    }
}
