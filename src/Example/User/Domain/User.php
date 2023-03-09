<?php

namespace Src\Example\User\Domain;

use Src\Example\User\Domain\ValueObject\{ UserEmail, UserFullName, UserPassword, UserTimeStamp, UserUserName };



final class User
{

    private $userName;
    private $userFullName;
    private $userEmail;
    private $userPassword;
    private $userTimeStamp;

    public function __construct(
        UserUserName $userName,
        UserFullName $userFullName,
        UserEmail $userEmail,
        UserPassword $userPassword,
        UserTimeStamp $userTimeStamp
    ){
         $this->userName = $userName;
         $this->userFullName = $userFullName;
         $this->userEmail = $userEmail;
         $this->userPassword = $userPassword;
         $this->userTimeStamp = $userTimeStamp;
    }

    public function userName() : UserUserName
    {
        return $this->userUserName;
    }

    public function userFullName() : UserUserName
    {
        return $this->userUserName;
    }

    public function userEmail() : UserUserName
    {
        return $this->userUserName;
    }

    public function userPassword() : UserUserName
    {
        return $this->userUserName;
    }

    public function userTimeStamp() : UserUserName
    {
        return $this->userUserName;
    }


}
