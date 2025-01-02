<?php
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the work week.";
        break;
    case "Friday":
        echo "End of the work week.";
        break;
    default:
        echo "Midweek days.";
}

$status = 200;

$message = match ($status) {
    200 => 'OK',
    404 => 'Not Found',
    500 => 'Internal Server Error',
    default => 'Unknown Status',
};

echo $message; // Output: OK
?>
