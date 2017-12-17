<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseController as Controller;
use App\Repositories\Contracts\ContactDashboardRepository;

use Input;
use Carbon\Carbon;

class ContactDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    private $contactRepository;

    public function __construct(ContactDashboardRepository $contactRepository)
    {
        // $this->middleware('sentinel_access:dashboard');
        $this->contactRepository = $contactRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $index = $this->contactRepository->getIndex();
        }
        catch (\Exception $e) 
        {
            throw new \Exception($e->getMessage());
        }
        
        return $index;
    }
}