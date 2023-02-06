<?php require_once("../register/functions.php"); ?>

<?php
  if(isset($_GET['id'])) {
    $is_set = true;
    $user_id = htmlspecialchars($_GET["id"]);
    $user = getUserXml($user_id);
    $action = "edited-user.php";
  } else {
    $is_set = false;
    $user_id = getNextUserID();
    $action = "added-user.php";
  }
?>
<script type="text/javascript">
  function passwordMatch() {
      var newPassword = document.getElementById("new-password");
      var confirmNewPassword = document.getElementById("confirm-new-password");
      var errorMessage = document.getElementById("confirm-password-error");
      var submit = document.getElementById("save-button");

      if(newPassword.value != confirmNewPassword.value) {
          errorMessage.style.display = "inline";
          confirmNewPassword.focus();
          confirmNewPassword.select();
          submit.disabled = true;
      }
      else {
          errorMessage.style.display = "none";
          submit.disabled = false;
      }
  }

  function passwordCheck() {
    var password = document.getElementById("new-password").value;
    var message = document.getElementById("passwordcondition");

    if(password.length<10 || !/[0-9]/.test(password) || !/[a-z]/.test(password) || !/[A-Z]/.test(password)
    ||!/[!@#$%^&*]/.test(password))
    {
      message.style.display = "block";
      document.getElementById("new-password").focus();
      document.getElementById("new-password").select();
    }
    else{
        message.style.display= "none";
    }
  }

  function showPassword() {
    var passwordInput = document.getElementById("password");

    if (passwordInput.type == "password") {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }
</script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>P10</title>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p9-style.css">
  </head>

    <body>
      <header class="header">
        <a href="#" class="logo"> <i class="fas fa-shopping-basket"> </i> Grocery King </a>
          <nav class="navbar">
            <a href="#Home"> Home </a>
            <a href="#Categories">Categories</a>
          </nav>
            <div class="icons">
              <div class="fas fa-bars" id="menu-btn"></div>
              <div class="fas fa-search" id="search-btn"></div>
              <div class="fas fa-shopping-cart" id="cart-btn"></div>
              <div class="fas fa-user" id="login-btn"></div>
            </div>
          <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Search">
            <label for="search-box" class="fas fa-search"></label>
          </form>
      </header>

      <main>
      
        <div class="table2">
        <form class="properties" action="<?php echo $action; ?>" method="POST">
          <table border="border" class="information">

              <tr> <th colspan="2"><?php if ($is_set) echo 'Edit User Info'; else echo 'Add User'; ?></th>
           
              </tr>
              <tr>
              
            
              <td><div class="personal-info" style="padding: 25px;">
                <p style="margin:5px;">- Enter personal information :</p>
                <input type="text" id="user-id" name="user-id" placeholder="User ID" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php echo $user_id; ?>" readonly>
                <input type="text" name="firstName" placeholder="Firstname" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->firstName; ?>">
                <input type="text" name="lastName" placeholder="Lastname" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->lastName; ?>">
                <input type="text" name="email" placeholder="E-mail" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->email; ?>">
                <input type="text" name="phoneNumber" placeholder="Phone number" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->phoneNumber; ?>">
              <input type="password" id="password" name="password" placeholder="Enter Password" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->password; ?>" required readonly>
</br>  
              <input type="password" id="new-password" name="new-password" placeholder="New Password" style="font-size:20px; padding: 5px; margin: 5px;"  <?php if ($is_set == false) echo 'required'; ?> >
                <span id="confirm-password-error" style="color:red; display:none">Error: the passwords you entered do not match.</span>
                
                <input type="password" id="confirm-new-password" name="confirm-new-password" placeholder="Confirm New Password" style="font-size:20px; padding: 5px; margin: 5px;"  <?php if ($is_set == false) echo 'required'; ?> onchange="passwordMatch()">
                <span id="passwordcondition" style="color:red; display:none;">Please set your password again. Some condition is not met.</span>
                <span style="font-size: 15px;">
                <input type="checkbox" name="show-password" onclick="showPassword()" style="font-size:20px; position: relative; top: 2px;" value="">
                 Show Password
                 </span>
            </div>

              <div class="address" style="padding: 25px;">
                <p style="margin:5px;">- Enter an address :</p>
                <input type="text" name="country" placeholder="Country" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->country; ?>">
                <input type="text" name="province" placeholder="Province" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->province; ?>">
                <input type="text" name="city" placeholder="City" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->city; ?>">
                <input type="text" name="street" placeholder="Street address" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->street; ?>">
                <input type="text" name="apt" placeholder="Apt, Suite, unit, Building" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->apt; ?>">
                <input type="text" name="postalcode" placeholder="Postal code" style="font-size:20px; padding: 5px; margin: 5px;" value="<?php if ($is_set) echo $user->postalcode; ?>">
              </div>

              <div class="save-button" style="padding: 25px;">
                <input id="save-button" class="save-button" type="submit" name="submit"value="save" style="height:30px; width:50px; background-color: orange;">
                
                <p><em> *Required fields. <br>
        <?php if ($is_set) echo '**If you do not wish to modify the password, leave these fields blank.'; ?>
      </em><br>  
            </td>
            
      
                              
            </table>
            </form>
        </div>
      </main>


    </body>
  </html>
