<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admission Result</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1>Admission Result</h1>
    <p>Name: {{ $applicant->name }}</p>
    <p>Course: {{ $applicant->course }}</p>
    <p>Status: <strong>{{ $applicant->status }}</strong></p>
    <p>Date: {{ now()->format('Y-m-d') }}</p>
</body>
</html>
