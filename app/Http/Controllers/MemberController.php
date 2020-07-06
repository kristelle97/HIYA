<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterMembersRequest;
use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct(  )
    {
        $this->middleware('auth');
    }

    public function index( FilterMembersRequest $request )
    {
        $search = $request->only(['search','work_area','country_of_residence']);

        return view('member.home',[
            'users' => $this->filterUsersQuery($search)->paginate(30),
            'search' => $search
        ]);
    }

    public function show( $slug )
    {
        return view('member.show',[
            'user' => User::where('slug',$slug)->firstOrFail()
        ]);
    }

    public function clap($slug) {
        $user = User::where('slug',$slug)->firstOrFail();
        if (!$user) {
            flash()->error('User not found');
        }

        if ($user->liked()) {
            flash()->success('User un-applauded.');
            $user->unlike();
        } else {
            flash()->success('User applauded.');
            $user->like();
        }

        return redirect()->back();
    }

    /**
     * Filter users
     * @param $request
     */
    private function filterUsersQuery($search) {
        $query = User::query();

        $search = $search['search'] ?? null;
        if ($search!='' && $search!= null) {
            $query = $query->where('first_name','ilike',"%${search}%")
                ->orWhere('last_name','ilike',"%${search}%");
        }

        $workArea = $search['work_area'] ?? null;
        if ($workArea!='' && $workArea!= null && $workArea != 'all') {
            $query = $query->where('work_area',$workArea);
        }

        $country = $search['country_of_residence'] ?? null;
        if ($country!='' && $country!= null && $country != 'all') {
            $query = $query->where('country_of_residence',$country);
        }

        return $query;
    }
}
