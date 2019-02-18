<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <table>
    <form action="info.php" method="POST">
        <tr>
            <td>First Name: </td>
            <td><input type="text" name=""></td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><input type="text" name=""></td>
        </tr>
        <tr>
            <td>Email Id: </td>
            <td><input type="email" name=""></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name=""></td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td>
                <input type="radio" name="gender">
                <input type="radio" name="gender">
            </td>
        </tr>
        <tr><td>DOB:</td>
            <td><select name="date">
                <option value="">Date </option>
                    <?php  for($i=1;$i<31;$i++) { ?>
                        <option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
                    <?php } ?>
               
            </select>
             <select name="month">
             <option value="">Month </option>
                    <?php  $a = array("Jan","Feb","March","April","May","Jun","July","August","Septembar","Octobar","November","Decembar");
                    foreach($a as $x)  { ?>
                        <option value="<?php echo $x; ?>" ><?php echo $x; ?></option>
                    <?php } ?>
               
            </select>
            <select name="year">
            <option value="">Year</option>
                    <?php for($i=2020;$i>1990;$i--) { ?>
                        <option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
                    <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>
                Contact:
            </td>
            <td>
                <input type="number">
            </td>
        </tr>
        <tr>
            <td>
                Address:
            </td>
            <td>
                <textarea name="address" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="button">Submit
            </td>
        </tr>
    </form>
    </table>
</body>
</html>
</body>
</html>