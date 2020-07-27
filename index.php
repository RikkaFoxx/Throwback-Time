<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Throwback Hacks Timekeep</title>
  </head>
  <style>
  .body {
    background-color: #FFF8D4;
  }
  .set-container {
    text-align: center;
    padding-left: 30%;
    padding-right: 30%;
    padding-top: 10%;
  }
  .box-container {
    text-align: center;
    border-style: solid;
  }
  .subtitle-align-right {
    text-align: left;
    padding-left: 3%;
  }
  .login-container {
    background-color: #F0F0F0;
    border-style: solid none none none;
    padding-top: 3%;
    padding-right: 1%;
    padding-left: 1%;
  }
  .padding {
    padding-bottom: 3%;
  }
  .form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}
.submit-container {
  padding-bottom: 3%;
  padding-top: 3%;
}
H3 {
  font-family: "Courier New";
}
</style>
  <body>
    <div class='set-container'>
      <div class='box-container'>
        <img src='clock.gif'></img>
        <H3>Timekeep User Login</H3>
        <div class='login-container'>
          <form class="form-inline" action="/login.php">
            <label for="email">User:</label>
              <input type="user" id="user" placeholder="Enter user" name="user">
            <label for="pwd">Password:</label>
              <input type="password" id="pwd" placeholder="Enter password" name="password">
              <br>
              Note: Your password should not be the same as your Network ID
              <br>
            <div class='submit-container'>
              <label>
              <button type="submit">Submit</button>
                <input type="checkbox" name="remember"> Remember me
              </label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
