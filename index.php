<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  	<div class="hero"> 
      <div class="schedbg">
       <div class="calendar">
         <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <div></div>
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
        </div>
        <!--SCHEDULE-->
        <div class="sched-container">
          <h3 class="title">Schedules</h3>
          <div class="schedule">
          <div class="sched-left">
          <div class="sched-date">
          <div class="date">26</div>
          <div class="month1">January</div>
          </div>
          </div>

          <div class="sched-right">
            <h3 class="type">Distribution</h3>
            <h3 class="subject">Mathematics</h3>
            <h3 class="modulenum">12345</h3>
          
          <div class="time">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
          </div>
          </div>
        
        <!--SCHEDULE 2-->
          <div class="schedule2">
          <div class="sched-left2">
          <div class="sched-date2">
          <div class="date2">26</div>
          <div class="month2">January</div>
          </div>
          </div>

          <div class="sched-right2">
            <h3 class="type2">Distribution</h3>
            <h3 class="subject2">Mathematics</h3>
            <h3 class="modulenum2">12345</h3>
          
          <div class="time2">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
          </div>
          </div>
        </div>

      </div>
    </div>
    <script src="script.js"></script>
  </body>
  <!--<footer>FOOTER</footer>-->
</html>