<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>contact manager</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h2 align="center">CONTACT MANAGER</h2>
        <hr>
        <form id= "contacts" action='processForm.php' method="post" align="center">

                <label> Name </label>
                <input type = "text" name = "name" required>
                <br>
                <br>
                <label> Email </label>
                <input type = "name" name = "email" required>
                <br>
                <br>
                <label> Phone </label>
                <input type = "text" name = "Phone" required>
                <br>
                <br>
                <label> Gender </label>
                <select value="Name" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                <br>
                <br>
                <button type= "submit"> submit </button>


                

        </form>
    </body>
</html>