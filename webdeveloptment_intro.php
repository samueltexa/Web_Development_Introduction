<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>

    <h1>sign up</h1>
    <form action="process.php" method="post" novalidate>
      <div>
        <label for="name">Name</label>
        <input type="text" name="Names" id="name"
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" name="Email" id="email"
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="Password" id="password">
      </div>
          <div>
        <label for="password_confirmation">Repeat_password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
      </div>
        <button>sign up</button>
    </form>

</body>
</html>
