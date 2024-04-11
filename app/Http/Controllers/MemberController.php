<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Member;
 
class MemberController extends Controller
{
    /**
        * タスク一覧
        *
        * @param Request $request
        * @return Response
        */
    public function index(Request $request)
    {
        $members = Member::orderBy('created_at', 'asc')->get();
        return view('members.index', [
            'members' => $members,
        ]);
    }

    public function touroku(Request $request)
    {
        return view('members.touroku');
    }
 
    
    

   public function membertop(Request $request){

    $member = new Member();
    $member->name = $request->input('name');
    $member->phone = $request->input('phone');
    $member->email = $request->input('email');
    $member->save();

    return redirect('/members');
}
    

    /**
        * タスク登録
        *
        * @param Request $request
        * @return Response
        */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
 
        // タスク作成
        Member::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

 
        return redirect('/members');
    }
 
    /**
        * タスク削除
        *
        * @param Request $request
        * @param Member $task
        * @return Response
        */
    public function destroy(Request $request, Task $task)
    {
        $member->delete();
        return redirect('/members');
    }
}