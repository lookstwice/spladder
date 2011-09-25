<?php
namespace classes\resources
{

    class AuthenticationException extends \phpHammock\resources\AuthenticationException
    {
        const MSG_INVALID_EMAIL = 'Invalid Email: ';
        conST MSG_INVALID_PASSWORD = 'Invalid Password: ';
    }
}   
