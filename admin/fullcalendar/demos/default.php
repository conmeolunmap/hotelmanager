


<head>

<link href='../fullcalendar.min.css' rel='stylesheet' />
<link href='../fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='../lib/moment.min.js'></script>
<script src='../lib/jquery.min.js'></script>
<script src='../fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: '2017-10-02',
			editable: false,
			eventLimit: false, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-10-01'
				},
				{
					title: 'Giao diện người máy',
					start: '2017-10-02'
				},
				{
					title: 'Long Event',
					start: '2017-10-07',
					end: '2017-10-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-10-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-10-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-10-11',
					end: '2017-10-13'
				},
				{
					title: 'Meeting',
					start: '2017-10-12T10:30:00',
					end: '2017-10-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-10-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-10-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-10-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-10-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-10-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-10-28'
				}
			]
		});
		
	});

</script>
<style>

	/*body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}*/

</style>

</head>

<div class="panel panel-default">
    <div class="panel-body">

	<h3>Lịch thực hành</h3>
	<hr>
	<div id='calendar'></div>

	</div>
</div>


