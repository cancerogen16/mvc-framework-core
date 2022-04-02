<?php

namespace erast\phpmvc;

class Response
{
    /**
     * @param int $code
     * @return void
     */
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    /**
     * @param string $url
     * @return void
     */
    public function redirect(string $url)
    {
        header('Location: ' . $url);
    }
}