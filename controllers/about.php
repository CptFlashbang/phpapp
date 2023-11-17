<?php
$heading = "About Us";

$tz = 'Europe/London';
$today = new DateTime("now", new DateTimeZone($tz));
$timestamp = time();
$today->setTimestamp($timestamp); //adjust the object to correct timestamp

//Christmas Day.
$christmasDay = date("Y") . "-12-25";

//Have we already passed this year's Christmas Day?
if(date("m") == 12 && date("d") > 25){
    $christmasDay = (date("Y") + 1) . "-12-25";
}

//Create DateTime object for Christmas Day.
$christmasDay = new DateTime($christmasDay);

//Get the interval difference between the two dates.
$interval = $today->diff($christmasDay);


$output = '<p>Today is ' . date("l") . ',' . date("d.m.Y") . '</p>';
$output .= '<p>This can be written as '. date("Y/m/d") . '</p>';
$output .= '<p>Or '. date("Ymd") . ' for computers</p>';
$output .= '<p>Put as a time ' . $today->format('d.m.Y, H:i:s') . '</p>';
$output .= 'There are ' . $interval->days . ' days, ' . $interval->h . ' hours, '. $interval->i . ' minutes until Christmas!';
require "views/about.view.php";
