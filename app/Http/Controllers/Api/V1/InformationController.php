<?php

namespace App\Http\Controllers\Api\V1;
use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$user = User::first();
		return $user->user_info;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function saveInfo(Request $request)
	{
		$saveBtn = $request->get('saveBtn');

        $userInfoArray = [];

		switch ($saveBtn) {
			case "contact":
				$userInfoArray = [
					"username" => $request->get('username'),
					"position" => $request->get("position"),
					"mail" => $request->get("mail")
				];
        break;
			case "links":
				$userInfoArray = [
					"facebook" => $request->get('facebook'),
					"instagram" => $request->get("instagram"),
					"artdealer" => $request->get("artdealer")
				];
        break;
			case "author":
				$userInfoArray = [
					"infoTitle" => $request->get('infoTitle'),
					"infoDecription" => $request->get("infoDecription")
				];
        break;

		}


		$userInfoJSON = json_encode($userInfoArray);


		return $userInfoJSON;
	}




}
