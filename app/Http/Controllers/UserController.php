<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class UserController
{
public function showAction($id)
{
$user = User::find($id);
return view("update", ['user' => $user]);
}
public function getAddUserForm(){
	return view("adduser");
	}
public function insertAction(Request $request)
{
$name = $request->input('name');
$lastname = $request->input('lastname');
$email = $request->input('email');
$age = $request->input('age');

$user = new User();
$user->name = $name;
$user->lastname = $lastname;
$user->email = $email;
$user->age = $age;
$user->password = bcrypt('secret');
$user->save();

return redirect()->action('UserController@showAll');

}

public function updateAction($id, Request $request)
{
$this->validate($request, [
	'name' => 'required',
	'lastname' => 'required',
	'Email' => 'required',
	'age' => 'required',
]);
$user = User::find($id);
$user->name = $request->get('name');
$user->lastname = $request->get('lastname');
$user->email = $request->get('email');
$user->age = $request->get('age');
$user->save();

return redirect()->action('UserController@showAll');
}

public function deleteAction($id)
{
$user= User::find($id);
$user->delete();

return redirect()->action('UserController@showAll');
}
public function showAll()
{
$users = User::all();
return view("users", ['users' => $users]);
}

}
