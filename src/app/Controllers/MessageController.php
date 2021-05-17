<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MessageController extends BaseController
{
	public function showSweetAlertMessages()
	{
		// Flash messages settings

		session()->setFlashdata("success", "Task has been completed successfully!");

		session()->setFlashdata("warning", "Warning! this action can not be reversed!");

		session()->setFlashdata("info", "This is information message");

		session()->setFlashdata("error", "Something went wrong!");

		return view("site/Messages/Notifier");
	}
}