<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  username:- <input type="text" name="username"><?php echo $_POST["username"];?>
  password :-<input type="password" name="pass"><?php echo $_POST["pass"];?>
  <button type="submit">Submit</button>
</body>
</html>