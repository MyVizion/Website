<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;

class databaseController extends BaseController
{
    
	public function index()
	{
        
        $db = \Config\Database::connect();

        $query = "SELECT * FROM `profiles` WHERE userName = ?";

        $res = $db->query($query, ['Udodos']);
        
        foreach($res->getResult() as $row){
            $data['retUser'] = $res->userName;
            $data['retLoc'] = $row->location;
            $data['retUni'] = $row->uni;
            $data['retStudyProg'] = $row->studyProgram;
        }
        
         return view('site/profilePage');
    }

}