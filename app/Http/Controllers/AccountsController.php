<?php
namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\AccountResource;

class AccountsController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve all accounts from the database
        $query = Account::query();

        $data = $query->paginate(20);

        // Transform the data using the AccountResource
        $res = AccountResource::collection($data)->response()->getData(true);

        return Inertia::render('accounts/index', ['data' => $res]);
    }     


    public function best_index(Request $request)
    {
        // Retrieve all brands from the database
        $query = Account::query();

        $data = $query->paginate(20);

        return Inertia::render('accounts/index', ['data' => $data]);
    }

    public function view($slug)
    {
        // Get the specific listing by ID
        $data = Account::where('account_id', $slug)
            ->firstOrFail();
        // Your logic for displaying a specific listing and its similar products
        return Inertia::render('accounts/view', ['data' => $data]);
    }

}
