<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    public function index() { $users=User::query()->orderBy('full_name')->get(); return view('users.index',compact('users')); }
    public function create() { return view('users.form',['user'=>new User(),'mode'=>'create']); }
    public function store(Request $request) {
        $data=$request->validate(['username'=>['required','string','max:100','unique:users,username'],'full_name'=>['required','string','max:255'],'email'=>['required','email','max:255','unique:users,email'],'avatar'=>['nullable','image','max:2048']]);
        if($request->hasFile('avatar')){$data['avatar']=Storage::disk('public')->putFile('avatars',$request->file('avatar'));}
        if(!isset($data['password'])){$data['password']=bcrypt(str()->random(16));}
        User::create($data); return redirect()->route('users.index')->with('success','User created successfully.');
    }
    public function edit(User $user) { return view('users.form',['user'=>$user,'mode'=>'edit']); }
    public function update(Request $request,User $user) {
        $data=$request->validate(['username'=>['required','string','max:100','unique:users,username,'.$user->id],'full_name'=>['required','string','max:255'],'email'=>['required','email','max:255','unique:users,email,'.$user->id],'avatar'=>['nullable','image','max:2048']]);
        unset($data['avatar']); if($request->hasFile('avatar')){$user->avatar=Storage::disk('public')->putFile('avatars',$request->file('avatar'));}
        $user->fill($data); $user->save(); return redirect()->route('users.index')->with('success','User updated successfully.');
    }
}
