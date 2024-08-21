<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreNotificationRequest;

class NotificationController extends Controller
{
    public function create()
    {
        return view('notifications.create');
    }

    public function store(StoreNotificationRequest $request)
    {
        $data = $request->validated();
        $data = $request->except('_token');        

        #get the user ID from the email
        $user = User::where('email', $data['user_email'])->first();

        $new_data = [
            'description' => $data['description'],
            'user_id' => $user->id,
        ];
        $notification = Notification::create($new_data);
        return redirect()->route('users.notifications')->with('success', 'Notification added successfully!');
    }

    public function markAsRead($id)
    {
    $notification = Notification::findOrFail($id);

    // Mark notification as read
    $notification->read = true;
    $notification->save();

    return redirect()->route('users.notifications')->with('success', 'Notificação marcada como lida.');
    }

}
