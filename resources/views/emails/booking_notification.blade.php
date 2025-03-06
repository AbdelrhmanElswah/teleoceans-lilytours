<!DOCTYPE html>
<html>
<head>
    <title>New Booking Notification</title>
</head>
<body>
    <h1>New Booking Received</h1>
    <p>Here are the details of the new booking:</p>
    <ul>
        <li><strong>Name:</strong> {{ $booking->name }}</li>
        <li><strong>Email:</strong> {{ $booking->email }}</li>
        <li><strong>Phone:</strong> {{ $booking->number }}</li>
        <li><strong>Program:</strong> {{ $booking->program->name }}</li>
        <li><strong>Addons:</strong> {{ $booking->addons }}</li>
        <li><strong>Promo_Code:</strong> {{ $booking->promo_code ?? '' }}</li>
        <li><strong>Date:</strong> {{ $booking->date }}</li>
        <li><strong>Adults:</strong> {{ $booking->adult }}</li>
        <li><strong>Children:</strong> {{ $booking->child }}</li>
        <li><strong>Message:</strong> {{ $booking->message }}</li>
    </ul>
</body>
</html>