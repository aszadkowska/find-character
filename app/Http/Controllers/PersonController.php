<?php


namespace App\Http\Controllers;

use App\Model\Person\People;
use App\Services\PersonService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PersonController extends Controller
{
    /** @var PersonService */
    protected $personService;

    /** @var People */
    protected $people;

    public function __construct(PersonService $personService, People $people)
    {
        $this->personService = $personService;
        $this->people = $people;
    }

    public function index(Request $request): JsonResponse
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        if ($request->bearerToken() === env('VALID_TOKEN')) {
            $person = $this->people->findByName($request->get('name'));

            return $person
                ? response()->json($person)
                : response()->json([
                    'message' => 'Person not found'
                ], 404);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }

    public function insert(Request $request): JsonResponse
    {
        if ($request->bearerToken() === env('VALID_TOKEN_ADMIN')) {
            $this->personService->insert();

            return response()->json(['success' => 'Records loaded'], 200);
        }

        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    public function delete(Request $request): JsonResponse
    {
        if ($request->bearerToken() === env('VALID_TOKEN_ADMIN')) {
            $this->personService->delete();

            return response()->json(['success' => 'Records removed'], 200);
        }

        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    public function tokenGenerator()
    {
        return str_random(32);
    }
}
