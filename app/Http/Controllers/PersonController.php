<?php


namespace App\Http\Controllers;

use App\Model\Person\People;
use App\Services\PersonNameService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PersonController extends Controller
{
    /** @var PersonNameService */
    protected $personService;

    /** @var People */
    private $people;

    public function __construct(PersonNameService $personService, People $people)
    {
        $this->personService = $personService;
        $this->people = $people;
    }

    public function index(Request $request): JsonResponse
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        return response()->json($this->people->findByName($request->get('name')));
    }

    public function getData()
    {
        $this->personService->insertData();
    }

    public function tokenGenerator()
    {
        $token = $request->bearerToken();
        return str_random(32);
    }
}
