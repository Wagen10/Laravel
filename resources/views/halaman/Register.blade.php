<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Sign Up Form</h2>
    <form action="/Welcome">
        <label>First Name:</label><br>
        <input type="first" name="first"><br><br>
        <label>Last Name:</label><br>
        <input type="last" name="last"><br><br>
        <label>Gender:</label><br>
        <input type="radio">Male<br>
        <input type="radio">Female<br>
        <input type="radio">Other<br><br>
        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="England">England</option>
            <option value="China">China</option>
            <option value="Denmark">Denmark</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="Language">Bahasa Indonesia<br>
        <input type="checkbox" name="Language">English<br>
        <input type="checkbox" name="Language">Other<br><br>
        <label>Bio:</label><br>
        <textarea name="message" rows="10" cols="30"></textarea>
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>