<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label>First name:</label><br>
            <input type="text" name="firstname"><br><br>
        <label>Last name:</label><br>
            <input type="text" name="lastname"><br><br>
        <label>Gender:</label><br>
            <input type="radio" name="Gender">Male<br>
            <input type="radio" name="Gender">Female<br>
            <input type="radio" name="Gender">Other<br><br>
        <label>Nationality:</label><br>
            <select name="Nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="Singapore">Singapore</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Australia">Australia</option>
            </select><br><br>
        <label>Language Spoken:</label><br><br>
            <input type="checkbox" name="Language">Bahasa Indonesia<br>
            <input type="checkbox" name="Language">English<br>
            <input type="checkbox" name="Language">Other<br><br>
        <label>Bio:</label><br><br>
            <textarea name="Bio" rows="10" cols="30"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>

</body>
</html>