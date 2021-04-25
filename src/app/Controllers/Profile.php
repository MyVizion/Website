<?php

namespace App\Controllers;

use App\models\UserModel;

class Profile extends \CodeIgniter\Controller
{
	

	public function index($seg1)
	{
		$user = new UserModel(); // in de base controller

		// var_dump($user->where('userName', $User)->find());
		$query = $user->where('userName', $seg1)->find();// misschien ook nog het id checken zodat je geen rare bugs krijgt en misschien sws checken of een user name bestaat of niet

		
		foreach($query as $row){
			$retName = $row['userName'];
			$retAge = $row['Age'];
			$retLoc = $row['location'];
			$retUni = $row['uni'];
			$retSP = $row['studyProgram'];
			$retSocials = '<li class = "socials insta"><a href = "https://instagram.com/' .  $row['instagram'] . '"><i class="fab fa-instagram "></a></i></li> <!-- icons centeren --> 
						   <li class = "socials faceb"><a href = "https://facebook.com/' .  $row['facebook'] . '"><i class="fab fa-facebook-f"></i></a></li>
						   <li class = "socials twitter"><a href = "https://twitter.com/'. $row['Twitter'] .'"><i class="fab fa-twitter "></i></a></li>
						   <li class = "socials snapc"><i class="fab fa-snapchat-ghost"></i></i></li>';
			$retAbout = '<Article><p>' . $row['About'] . '</p></Article>';
		}

		$data = 
		[
			'username' => $retName,
			'age' => $retAge,
			'Location' => $retLoc,
			'Uni' => $retUni,
			'studyProgram' => $retSP,
			'socials' => $retSocials,
			'about' => $retAbout
		];
		if(empty($query)){ return view('site/messages/accountDoesntExist'); echo view('site/header.php');}
		echo view('site/header.php');
		echo view('site/profilePage', $data);
         // search bar moet myVizion/profileName worden 
	}
	
	public function ChangeProfile()
	{
		$user = new UserModel();

        $query = $user->where('username', 'Linus')->find();

        foreach($query as $row){
            $ret = $row['username']; 
        }

        $data = [
            'changeUserName' => $ret
        ];

		echo view('site/header.php');
        echo view('site/ChangeForm', $data);
		
	} 
}