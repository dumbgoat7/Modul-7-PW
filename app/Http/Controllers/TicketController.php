<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
       $ticket = Ticket::get();

       return view('index', compact('ticket'));
    }
}
