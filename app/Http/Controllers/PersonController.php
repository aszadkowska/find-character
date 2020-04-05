<?php


namespace App\Http\Controllers;

use App\Model\Person\People;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Validator;

class PersonController extends Controller
{
    /** @var People */
    protected $people;

    public function __construct( People $people)
    {
        $this->people = $people;
    }

    public function index(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        return response()->json($this->people->findByName($request->get('name')));
    }
}
