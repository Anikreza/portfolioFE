<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
<h2>Contact Form Submission</h2>
<p><strong>{{$data['name'] }}</strong> wants to get in touch.</p>
<p><strong>Subject:</strong> {{ $data['subject'] ?? 'N/A' }}</p>
<p style="color: #3b3b3b">{{ $data['message'] }}</p>
<br/>
<p><strong>Contact {{$data['name']}} at:</strong> {{ $data['email'] }}</p>
</body>
</html>
