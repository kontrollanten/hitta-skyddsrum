<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-13
 * Time: 19:03
 */

namespace HittaSkyddsrum\App\Http\Responses;

use Doctrine\Common\Collections\Collection;
use HittaSkyddsrum\App\Foundation\Contracts\PublicObject;
use HittaSkyddsrum\App\Foundation\Contracts\PublicObjectRender;
use Illuminate\Http\Response;
use \Illuminate\Http\JsonResponse as BaseJsonResponse;

class JsonResponse extends BaseJsonResponse
{
    public function __construct($content = '', $status = 200, array $headers = array())
    {
        parent::__construct(app(PublicObjectRender::class)->render($content), $status, $headers);
    }
}