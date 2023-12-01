<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{

    public function __construct(protected City $repository,)
    {
    }

    public function index()
    {
        $cities = $this->repository->paginate();

        return CityResource::collection($cities);
    }
}
