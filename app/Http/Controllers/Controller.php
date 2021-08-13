<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * JSONでreturnする。
     *
     * @param int $status
     * @param array $meta
     * @param string|array $data
     * @return JsonResponse
     */
    protected function json(int $status, array $meta, $data)
    {

        if (gettype($data) === "string")
            $data = (new $data)();

        $meta = [
                'status' => $status,
                'count'  => count($data)
            ] + $meta;

        return response()->json([
            'meta' => $meta,
            'data' => $data
        ], $status);
    }
}
