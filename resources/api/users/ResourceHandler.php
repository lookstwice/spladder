<?php
namespace resources\api\users
{
    require_once(RESOURCE_PATH . '/../classes/resources/BaseResourceHandler.php');

    class ResourceHandler extends \classes\resources\BaseResourceHandler {
        protected function handleGet() {
            $response = new \phpHammock\http\Response();

            $pdoConnectionString = 'mysql:host=localhost;dbname=spladder';
            $pdoUser = 'spladder';
            $pdoPassword = '*******';

            $sql = 'SELECT * FROM users;';

            $dbh = new \PDO($pdoConnectionString, $pdoUser, $pdoPassword);
            $sth = $dbh->query($sql);
            $results = $sth->fetchAll(\PDO::FETCH_ASSOC);

            $data = array();
            foreach ($results as $result) {
                $data[] = array();
                $data[count($data)-1]['id'] = $result['id'];
                $data[count($data)-1]['handle'] = $result['handle'];
            }

            $response->setData($data);

            return $response;
        } 
    }
}
