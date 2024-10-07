<!DOCTYPE html>
<html>

<head>
    <title>New Course Registration</title>
</head>

<body>

    <h1>New Course Registration</h1>
    <p><strong>Name:</strong> {{ $user->name }} ({{ $user->email }})</p>
    <p><strong>Course:</strong> {{ $course->name }}</p>
    <p><strong>Phone:</strong> {{ $user->phone }}</p>
    
</body>

</html>
