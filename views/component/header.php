<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<script>
    window.alert_toast = function($msg = 'TEST', $bg = 'success') {
        var alertBox = $('#alert_toast');
        var alertMessage = $('#alert_message');

        // Remove all background color classes
        alertBox.removeClass('bg-success bg-danger bg-info bg-warning');

        // Set background color class based on $bg parameter
        if ($bg === 'success')
            alertBox.addClass('bg-green-500 text-white');
        if ($bg === 'danger')
            alertBox.addClass('bg-red-500 text-white');
        if ($bg === 'info')
            alertBox.addClass('bg-blue-500 text-white');
        if ($bg === 'warning')
            alertBox.addClass('bg-yellow-500 text-black');

        // Set alert message
        alertMessage.text($msg);

        // Show alert box
        alertBox.fadeIn();

        // Hide alert box slowly after 3 seconds
        setTimeout(function() {
            alertBox.fadeOut('slow', function() {
                alertBox.addClass('hidden');
            });
        }, 1500);
    }
</script>
    