<?php


namespace App\Http\Controllers;

use App\Services\PersonService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InitiateController extends Controller
{
    /** @var PersonService */
    protected $personService;

    public function __construct(PersonService $personService)
    {
        $this->personService = $personService;
    }

    public function insert(Request $request): JsonResponse
    {
        $this->personService->insert();

        return response()->json(['success' => 'Records imported'], 200);
    }

    public function delete(Request $request): JsonResponse
    {
        $this->personService->delete();

        return response()->json(['success' => 'Records removed'], 200);
    }

    public function tokenGenerator()
    {
        return str_random(32);
    }
}
