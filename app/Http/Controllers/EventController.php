<?php namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{

    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $events = [];
        $data = Event::orderBy('start_date')
                ->orderBy('title')
                ->orderBy('id')
                ->get();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    [
                        null
                    ],
                    [
                        'color' => '#ff0000',
                        'url' => route('event.show', [$value->id])
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events)->setOptions(['locale' => 'pt-br']);
        return view('event.fullcalender', compact('calendar'));
    }
}
