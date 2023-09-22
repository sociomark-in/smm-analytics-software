<div id="eventCalndarDay" class="widget__calendar h-100">
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('eventCalndarDay');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
            eventSources: [{
                /*
                    url: '/myfeed.php', // use the `url` property
                    color: 'yellow',    // an option!
                    textColor: 'black'  // an option! 
                */
                color: "#ff00ff"
            }],
            events: [{ // this object will be "parsed" into an Event Object
                    title: 'The Event', // a property!
                    description: "Lorem",
                    start: '2023-09-22', // a property!
                    end: '2023-09-23' // a property! ** see important note below about 'end' **
                },
                { // this object will be "parsed" into an Event Object
                    title: 'The Event 2', // a property!
                    description: "Lorem", // extendedProps
                    start: '2023-09-22', // a property!
                    end: '2023-09-23' // a property! ** see important note below about 'end' **
                },
                { // this object will be "parsed" into an Event Object
                    title: 'The Event 3', // a property!
                    description: "Lorem", // extendedProps
                    start: '2023-09-22', // a property!
                    end: '2023-09-23' // a property! ** see important note below about 'end' **
                },
                { // this object will be "parsed" into an Event Object
                    title: 'The Event 2', // a property!
                    description: "Lorem", // extendedProps
                    start: '2023-09-22', // a property!
                    end: '2023-09-23' // a property! ** see important note below about 'end' **
                },
                { // this object will be "parsed" into an Event Object
                    title: 'The Event 3', // a property!
                    description: "Lorem", // extendedProps
                    start: '2023-09-22', // a property!
                    end: '2023-09-23' // a property! ** see important note below about 'end' **
                },
            ],
            initialView: 'dayGridDay',
            selectable: true,
            // headerToolbar: {
            //     left: 'prev,next',
            //     center: 'title',
            //     // right: 'dayGridMonth,dayGridWeek,dayGridDay' // user can switch between the two
            // },
            dateClick: function(e) {
                // alert('Clicked on:' + e.date);
                $('#newEventModal').modal('show');
                $('#newEventModal .modal-title').text(e.date);
                $('#newEventModal .modal-body').html("<p>Another Event</p>");
                console.log(e);
            },
            eventClick: function(e) {
                // alert('a day has been clicked! ' + e.event.start);
                $('#EventModal').modal('show');
                $('#EventModal .modal-title').text(e.event.title);
                $('#EventModal .modal-body').html("<p>" + e.event.extendedProps.description + "</p>");


                // console.log(e.event.start);
            },
            businessHours: {
                // days of week. an array of zero-based day of week integers (0=Sunday)
                daysOfWeek: [1, 2, 3, 4], // Monday - Thursday

                startTime: '10:00', // a start time (10am in this example)
                endTime: '18:00', // an end time (6pm in this example)
            }
        });
        calendar.render();
    });
</script>


<div class="modal fade" id="EventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>