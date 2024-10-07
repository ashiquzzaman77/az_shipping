<!DOCTYPE html>
<html>

<head>
    <title>Course Payment Confirmation</title>
</head>

<body>
    <h1>Payment Confirmation</h1>

    <h4 class="fw-bold">Dear {{ $data['name'] }}</h4>

    <p>Congratulations!NgenIt Training Team approve for this course successfully.Please enjoy this course successfully.
    </p>

    <ul>
        <li>Course: {{ $data['course_id'] }}</li>
        <li>Payment Type: {{ $data['payment_type'] }}</li>
        <li>Amount: Tk {{ $data['amount'] }}</li>
    </ul>

    <p>Thank you for choosing our course!</p>

    <p class="mb-0">Regards and Thanks,</p>
    <span class="fw-bold">NgenIt Training Team</span>

</body>

</html>
