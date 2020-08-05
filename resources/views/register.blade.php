<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <form  action="/welcome" method="POST">
        @csrf
        <label for="f_name">First Name:</label> <br><br>
            <input type="text" id="f_name" name="first_name"><br><br>
        <label for="l_name">Last Name:</label> <br><br>
            <input type="text" id="l_name" name="last_name"><br><br>
        <label >Gender:</label> <br><br>
            <input type="radio" name="gender"> Male <br>
            <input type="radio" name="gender"> Female <br>
            <input type="radio" name="gender"> Other <br><br>
        <label >Nationality:</label><br><br>
            <select name="nationality">
                <option value="0"selected>Indonesian</option>
                <option value="1">Singapurean</option>
                <option value="2">Malaysian</option>
                <option value="3">Australian</option>
            </select>
        <br><br>
        <label >Language Spoken:</label><br><br>
            <input type="checkbox" name="language">Bahasa indonesia <br>
            <input type="checkbox" name="language">English <br>
            <input type="checkbox" name="language">Other <br><br>
        <label for="bio_user">Bio:</label><br><br>
            <textarea id="bio_user" cols="30" rows="10" name="bio"></textarea><br>
        <button>Sign Up</button>

        
    </form>
</body>
</html>