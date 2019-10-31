<?php


namespace App\Http\Controllers;
use App\Models\User;


class UserController
{
public function showAction($id)
{
$user = User::find($id);
echo $user->name. " " . $user->lastname."<br>";
echo $user->email."<br>";
echo $user->age."<br>";
echo $user->updated_at;

}
public function insertAction()
{
$user = new User();
$user->name = str_random(5);
$user->lastname = str_random(5);
$user->email = $user->name. "." . $user->lastname. "@gmail.com";
$user->age = mt_rand(1,80);
$user->password = bcrypt('secret');
$user->save();

}
public function updateAction($id)
{
$user = User::where("id", "=", $id)->first();
$user->update(["age" => mt_rand(1,80)]);
}
public function deleteAction($id)
{
$user= User::find($id);
$user->delete();
}
public function showAll()
{
$users = User::all();
	foreach ($users as $user) {
	echo $user->id . "<br>".  $user->name. " " . $user->lastname."<br>" .$user->email . "<br>" ." " .$user->age."<br>" . " " . $user->updated_at."<br>"."<br>";
	}
}

}
