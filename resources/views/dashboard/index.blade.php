@extends('layouts.master')
@section('content')
<div id="myEvent"></div>
@php 
    $events = array();

    foreach($posts as $p){

        $events[] = 
          array(
            'title' => 'Post On'.$p->post_on,
            'start' =>  date("Y,m,d", strtotime($p->date)),
            "backgroundColor" => "#00bcd4"
            );
     

    }
@endphp

@endsection

@push('script')
<script src="{{ asset('assets/lib/fullcalendar/fullcalendar.min.js') }}"></script>
<script>
    var today = new Date();
    year = today.getFullYear();
    month = today.getMonth();
    day = today.getDate();
    var calendar = $('#myEvent').fullCalendar({
        height: 'auto',
        defaultView: 'month',
        editable: true,
        selectable: true,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },
        events: <?php print_r(json_encode($events))  ?>
    });
</script>
@endpush