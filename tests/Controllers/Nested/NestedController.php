<?php

namespace RouteTreeTests\Controllers\Nested;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NestedController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __call($name, $arguments)
    {
        return 'controller:nested|function:'.$name.'|method:'.\Request::getMethod().'|path:'.\Request::getPathInfo();
    }

}