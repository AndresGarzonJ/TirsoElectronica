<?php

namespace App\Shop\Blogs\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogNotFoundException extends NotFoundHttpException
{

    /**
     * ProductNotFoundException constructor.
     */
    public function __construct()
    {
        parent::__construct('Blog not found.');
    }
}
