<?php

namespace app\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;



class Handler extends ExceptionHandler
{

    protected $dontReport = [
        HttpException::class,
    ];

//    public function report(Exception $e)
//    {
//        return parent::report($e);
//    }

    public function render($request, Exception $e)
    {
        return parent::render($request, $e);
    }

    public function report(Exception $e)
    {
        if ($this->shouldReport($e)) {
            app('sentry')->captureException($e);
        }
        parent::report($e);
    }
}
