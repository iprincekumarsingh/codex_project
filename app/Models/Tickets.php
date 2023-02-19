<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $table = 'tickets';


    public static function getTickets()
    {
        return Tickets::
            orderBy('status', 'desc')

            ->get();
    }
    public static function getTotalTickets()
    {
        return Tickets::count();
    }

    public static function getTicketResolved()
    {
        return Tickets::where('status', '1')->count();
    }
    public static function getTicketPending()
    {
        return Tickets::where('status', '0')->count();
    }

    public static function getLatestTicket()
    {
        return Tickets::orderBy('id', 'desc')->
            where('status', '0')
            ->get();
    }


    public static function getTicketById($id)
    {
        return Tickets::where('id', $id)->first();
    }
}