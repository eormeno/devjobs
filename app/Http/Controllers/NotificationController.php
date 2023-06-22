<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
	/**
	 * Handle the incoming request.
	 */
	public function __invoke(Request $request)
	{
		$unreadNotifications = $request->user()->unreadNotifications;

		$unreadNotifications->markAsRead();

		return view('notifications.index', [
			'unreadNotifications' => $unreadNotifications,
		]);
	}
}
