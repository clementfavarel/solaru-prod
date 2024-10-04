<!DOCTYPE html>
<html>

<head>
    <title>Formulaire de contact Solaru Form</title>
</head>

<body>
    <h1>Formulaire de contact Solaru Form</h1>
    <p><strong>Nom:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>

</html>
