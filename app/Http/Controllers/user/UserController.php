<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        return view('web.home');
    }
    public function createTicket()
    {
        return view('web.create-ticket');
    }
    public function totalTicekts()
    {
        return Tickets::getTotalTickets();
    }
    public function totalTicektsResolved()
    {
        return Tickets::getTicketResolved();
    }
    public function totalTicektsUnresolved()
    {
        return Tickets::getTicketPending();
    }

    public function latestTicekt()
    {
        return Tickets::getLatestTicket();
    }
    public function UsertotalTicekts()
    {
        // return Tickets::where('user_id', auth()->user()->id)->count();
        //  Auth::user()->id;

        // get user id of logged in user
        $user_id = Auth::user()->id;
        echo $user_id;

    }
    public function UsertotalTicektsResolved()
    {
        return Tickets::where('user_id', auth()->user()->id)->where('status', '1')->count();
    }
    public function UsertotalTicektsUnresolved()
    {
        return Tickets::where('user_id', auth()->user()->id)->where('status', '0')->count();
    }

    public function UserlatestTicekt()
    {
        // return Tickets::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->
        //     where('status', '0')
        //     ->limit(5)
        //     ->get();
        
    }

    public function createTicketPost(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('image')->extension();

        $request->image->move(public_path('images'), $imageName);

        // save ticket in database
        $ticket = new Tickets();
        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->image = $imageName;
        $ticket->user_id = auth()->user()->id;
        $ticket->save();
        return redirect()->back()->with('success', 'Ticket Created Successfully');


    }
}