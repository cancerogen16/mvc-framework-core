<?php

namespace erast\phpmvc;

use erast\phpmvc\Db\DbModel;

abstract class UserModel extends DbModel
{
    /**
     * @return mixed
     */
    abstract public function getDisplayName();
}