<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function solveTicket($id)
    {


        $tickect = \App\Models\Tickets::getTicketById($id);
        return view('admin.solve-ticket', compact('tickect'));

    }

    public function solveTicketPost($id, Request $request)
    {
        // $request->validate([
        //     'answer' => 'required',
        // ]);
        $answer = new \App\Models\answer();
        $answer->answer = $request->reply;
        $answer->answer_by = auth()->user()->id;
        $answer->ticket_id = $id;
        $answer->save();

        $ticket = \App\Models\Tickets::getTicketById($id);
        $ticket->status = $request->status;
        $ticket->save();
        return "success";
    }
    public function tickets()
    {
        $tickets = \App\Models\Tickets::getTickets();
        return view('admin.tickets', compact('tickets'));
    }
}