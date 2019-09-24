<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="signin.php" method="POST" autocomplete="on">
    
    Name: <input type="text" name="name" required><br>  
   
    E-mail: <input type="email" name="email" required><br>

    Phone: <input type="tel" name="phone"><br>

    Occupation: 
    <select name="Occupation">
        <option value="student">Student</option>
        <option value="professor">Professor</option>
        <option value="retail">Retail</option>
        <option value="foodservices">Food Services</option>
        <option value="--select--" selected>--Select--</option>

    </select><br>

    Gender:  
    
    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female <br>

    How are you feeling today?<br>

    <input type="checkbox" name="good" value="Good" checked> I feel good<br>
    <input type="checkbox" name="bad" value="Bad"> I feel bad<br>
    <input type="checkbox" name="soso" value="SoSo"> I feel ok<br>
   
    <input type="submit"><input type="reset"><br><br><br>
   
    
<br>Welcome <?php echo $_POST["name"]; ?><br>
<br>Your email address is: <?php echo $_POST["email"]; ?><br>
<br>Your phone number is: <?php echo $_POST["phone"] ; ?><br>
<br>You are in the field of <?php echo $_POST["Occupation"]; ?><br>
<br>You identify as <?php echo $_POST["gender"]; ?><br>
</body>
</html>