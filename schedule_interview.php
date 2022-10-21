<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Schedule</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/hero-img.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css" rel="stylesheet" />
    <!-- ======================================================================================== -->
</head>

<body>

    <!--===================
        Header
        =======================-->
    <section class="schedule_page">
        <!--===================
        Header
        =======================-->
        <?php include('header.php') ?>

        <div class="main">
        <?php include('sidebar.php') ?>

            <div class="content">

                <div class="container py-3 ">
                    <h2 class="mb-3 text-center">Interview Scheduler </h2>

                    <div class="py-3">
                        <div class="row mx-auto">

                            <div class="col-md-6  ">
                                <div class="form-group float-label-control">
                                    <label for="">Start Date</label>
                                    <input  class="form-control" placeholder="Start Date" id="datepicker">
                                </div>
                            </div>

                            <div class="col-md-6   ">
                                <div class="form-check">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <label for="interview">
                                              Interview type
                                           </label>
                                            </div>
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                         Technical
                                        </label>
                                            <div class="mt-3">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                             HR
                                            </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6   ">
                                <div class="form-group float-label-control">
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" placeholder="End Date">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="row text-md">
                                        <b>Do you want to Create / Cancel Interview Slots?</b> &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="radio-inline">
                                   <input type="radio" name="sessiontype" id="createBulkInterviews" ng-change="sessionType('1')" ng-model="selection.sessionType" style="height:20px; width:20px;" value="1" class="ng-pristine ng-untouched ng-valid" aria-checked="true" tabindex="0" aria-invalid="false"> &nbsp;&nbsp;Create
                                   </label>
                                    <label class="radio-inline">
                                   <input type="radio" name="sessiontype" id="cancelBulkInterviews" ng-change="sessionType('2')" ng-model="selection.sessionType" style="height:20px; width:20px;" value="2" class="ng-pristine ng-untouched ng-valid" aria-checked="false" tabindex="-1" aria-invalid="false">&nbsp;&nbsp;Cancel 
                                   </label>
                                </div>

                                <center>
                                    <div class="panel-heading" id="WeekdaycheckboxCreate">
                                        <label><span class="text-md">&nbsp;<strong>Weekdays</strong> </span></label>
                                        <input type="checkbox" name="mon" id="mon" value="Mon" class="text-md"> Mon

                                        <input type="checkbox" name="tues" id="tues" value="Tue" class="text-md"> Tue

                                        <input type="checkbox" name="wed" id="wed" value="Wed" class="text-md"> Wed

                                        <input type="checkbox" name="thur" id="thur" value="Thu" class="text-md"> Thu

                                        <input type="checkbox" name="fri" id="fri" value="Fri" class="text-md"> Fri

                                    </div>
                                </center>
                                <center>
                                    <div class="row">
                                        <div class="col-md-3 offset-md-3">
                                            <div class="title">

                                                <button id="addEducationinterviewerProfile" class="blue-btn-small" onclick="myFunction()">
                                                    Weekdays(+)

                                                        </button>
                                            </div>
                                          
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="title">

                                                <button id="addEducationinterviewerProfile" class="blue-btn-small" onclick="myFunctiontwo()">
                                                    Weeends(+)

                                                        </button>
                                            </div>
                                        </div>


                                    </div>
                                  
                                    <div>
                                               <div class="row text-center  mt-3 cell_phone">
                                                   <div class="col-md-5 well"  id="myDIV">
                                                       <div class=" py-3">
                                                          <center> <h6>Morning Slots</h6></center>
                                                          <div class="row py-3">
                                                              <div class="col-md-3">
                                                                  <button class="btn btn-success">11;30</button>
                                                              </div>
                                                              <div class="col-md-3">
                                                              <button class="btn btn-success">11;30</button>
                                                              </div>
                                                              <div class="col-md-3">
                                                              <button class="btn btn-success">11;30</button>
                                                              </div>
                                                              <div class="col-md-3">
                                                              <button class="btn btn-success">11;30</button>
                                                              </div>
                                                          </div>
                                                       </div>
                                                   </div>
                                                  
                                                 
                                                    <div class="col-md-5 well ml-5" id="mydivtwo">
                                                        <div class=" py-3">
                                                            <center> <h6>Morning Slots</h6></center>
                                                            <div class="row py-3">
                                                                <div class="col-md-3">
                                                                    <button class="btn btn-success">11;30</button>
                                                                </div>
                                                                <div class="col-md-3">
                                                                <button class="btn btn-success">11;30</button>
                                                                </div>
                                                                <div class="col-md-3">
                                                                <button class="btn btn-success">11;30</button>
                                                                </div>
                                                                <div class="col-md-3">
                                                                <button class="btn btn-success">11;30</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                              
                                            </div>
                                         </div>
                                            <!-- new  -->

                                            
                                </center>
                                <center>
                                    <div class="tool-tip">
                                        <div class="title">

                                            <button id="addEducationinterviewerProfile" class="blue-btn-small">
                                                        Create
                                                    </button>
                                        </div>
                                    </div>
                                    <h2 class="mb-3 mt-3 text-center">Calendar View </h2>

                                </center>
                                <div id="calendar"></div>


                            </div>
                        </div>








                    </div>





                </div>

    </section>



    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <!--  Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('.button-left').click(function() {
                $('.sidebar').toggleClass('fliph');
            });

        });

        // calander scripts
        var eventsArray = [{
            title: 'event1',
            start: '2019-07-20'
        }, {
            title: 'event2',
            start: '2019-08-05',
            end: '2019-08-07'
        }, {
            title: 'event3',
            start: '2019-09-03'
        }, {
            title: 'event3',
            start: '2019-10-05'
        }];

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                height: 600,
                plugins: ['dayGrid', 'interaction'],

                dateClick: function(info) {
                    alert('Clicked on: ' + info.dateStr);

                    eventsArray.push({
                        date: info.dateStr,
                        title: "test event added from click"
                    });

                    calendar.refetchEvents();
                },

                eventClick: function(info) {
                    alert(info.event.title)
                },

                events: function(info, successCallback, failureCallback) {
                    successCallback(eventsArray);
                }
            });

            calendar.render();
        });
    </script>

    <!-- show/hide div -->
    <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function myFunctiontwo() {
  var x = document.getElementById("mydivtwo");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</body>

</html>