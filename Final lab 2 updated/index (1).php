<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AIR QUALITY FORM</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
  
    body {
      height: 100vh;
      font-family: Arial, sans-serif;
      background-color:rgb(121, 195, 241);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      overflow: hidden;
    }
  
    .header-logo {
      width: 100%;
      text-align: center;
      padding: 10px 0;
    }
  
    .header-logo img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 50%;
      border: 1px solid #ccc;
    }
  
    .main-title {
      font-size: 20px;
      margin: 5px 0 10px;
      color: #0436ea;
    }
  
    .container {
  display: grid;
  grid-template-columns: 1fr 30%;
  grid-template-rows: auto auto;
  gap: 10px;
  width: 90%;
  max-width: 900px;
  height: calc(100vh - 150px);
}

  
    .box {
      background-color:rgb(12, 124, 253);
      border: 1px solid #ccc;
      padding: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }
  
    .box-1-logo img {
      max-width: 100%;
      height: auto;
    }
  
    .new-box {
      font-size: 14px;
      font-weight: bold;
      text-align: center;
      background-color:rgb(12, 124, 253);
    }
  
    .form-box {
  grid-column: 1;
  grid-row: 1 / span 2;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow-y: auto;
}

  
    .form-container {
      width: 100%;
      max-height: 100%;
      overflow-y: auto;
      padding: 10px;
    }
  
    .form-container h3 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 18px;
    }
  
    .form-container input,
    .form-container select,
    .form-container textarea,
    .form-container button {
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      border-radius: 4px;
      font-size: 14px;
    }
  
    .form-container input,
    .form-container select,
    .form-container textarea {
      border: 1px solid #ccc;
    }
  
    .form-container button {
      background-color: #4CAF50;
      color: white;
      border: none;
      font-size: 15px;
      cursor: pointer;
    }
  
    .form-container button:hover {
      background-color: #45a049;
    }
  
    .gender-group {
      display: flex;
      justify-content: space-around;
      margin: 8px 0;
      font-size: 14px;
    }
  
    .gender-group input {
      margin-right: 4px;
    }
  
.terms {
  display: flex;
  align-items: center;
  font-size: 13px;
  gap: 6px;
  margin: 10px 0;
}
.terms input[type="checkbox"] {
  width: 16px;
  height: 16px;
}
.terms a {
  text-decoration: none;
  color: #4CAF50;
  font-weight: bold;
}

  
    .error {
      color: rgb(245, 8, 8);
      font-size: 13px;
      text-align: center;
      margin-top: 5px;
    }
  
    @media (max-width: 768px) {
      .container {
        grid-template-columns: 1fr;
        grid-template-rows: auto auto auto;
        height: auto;
      }
  
      .form-box {
        grid-column: 1;
        grid-row: 3;
      }
    }
  </style>
  
</head>
<body>

  <div class="header-logo">
    <img src="aiqsolutions_logo.png" alt="Air Quality Logo" />
  </div>

  <h1 class="main-title">REGISTRATION FORM FOR AIR QUALITY</h1>

  <div class="container">
  <!-- Box 3: Logo section -->
  <!-- Box 3: Logo section -->
<div class="box box-1-logo" style="grid-column: 2; grid-row: 2; height: 430px; opacity: 0.2; background-color: rgb(50, 107, 126);">
    <table style="width: 100%; border-collapse: collapse; color: white;">
      <thead>
        <tr>
          <th style="border: 1px solid #000000; padding: 6px; color: #000000;">City</th>
          <th style="border: 1px solid #000000; padding: 6px; color: #000000;">AQI</th>
        </tr>
      </thead>
      <tbody>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Dhaka</td><td style="border: 1px solid #ccc; padding: 6px;">105</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Khulna</td><td style="border: 1px solid #ccc; padding: 6px;">103</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Cumilla</td><td style="border: 1px solid #ccc; padding: 6px;">106</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Chittagong</td><td style="border: 1px solid #ccc; padding: 6px;">110</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Brishal</td><td style="border: 1px solid #ccc; padding: 6px;">102</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Bogra</td><td style="border: 1px solid #ccc; padding: 6px;">104</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Rajshahi</td><td style="border: 1px solid #ccc; padding: 6px;">101</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Sylhe</td><td style="border: 1px solid #ccc; padding: 6px;">108</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Mymensingh</td><td style="border: 1px solid #ccc; padding: 6px;">112</td></tr>
        <tr><td style="border: 1px solid #000000; padding: 6px;">Natore</td><td style="border: 1px solid #ccc; padding: 6px;">107</td></tr>
      </tbody>
    </table>
  </div>
  
  
  <!-- Box 2: Info box -->
 <!-- Box 2: Info box (now upper right after swap) -->
<!-- Login box (inside grid-column: 2, grid-row: 1) -->
<div class="box new-box" style="grid-column: 2; grid-row: 1; height: 180px;">
  <form method="POST" action="request.php" style="width: 100%; display: flex; flex-direction: column; height: 100%; justify-content: space-between;">
    <div>
      <h3 style="margin-bottom: 10px;">LOGIN</h3>
      <div style="margin-bottom: 10px;">
        <input type="text" name="username" placeholder="Enter Username" style="width: 100%; padding: 6px; margin-top: 4px;" required />
      </div>
      <div>
        <input type="password" name="password" placeholder="Enter Password" style="width: 100%; padding: 6px; margin-top: 4px;" required />
      </div>
    </div>
    <div style="display: flex; justify-content: flex-end;">
      <button type="submit" style="background-color: #4CAF50; color: white; padding: 6px 12px; border: none; border-radius: 4px; cursor: pointer;">
        Login
      </button>
    </div>
  </form>
</div>

  
  
  
  <!-- Registration Form -->
    <div class="box form-box">
      <div class="form-container">
        <form id="registrationForm" action="process.php" method="POST" >

          <input type="text" id="fullName" name="fullName" placeholder="Full Name" required />
          <input type="email" id="email" name="email" placeholder="Email" required />
          <input type="password" id="password" name="password" placeholder="Password" required />
          <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required />
          <input type="text" id="location" name="location" placeholder="Location" required />
          <input type="text" id="zip" name="zip" placeholder="Zip Code" required />
          <input type="date" id="birthdate" name="birthdate" required />

          <select name="country" id="country">
            <option value="">Choose your country</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Afganistan">Afganistan</option>
            <option value="UK">UK</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Italy">Italy</option>
          </select>

          <div class="gender-group">
            <label>Gender</label>
            <input type="radio" name="gender" value="Male" />Male
            <input type="radio" name="gender" value="Female" />Female
            <input type="radio" name="gender" value="Other" />Other
          </div>
        
          <label for="color"> Select Your Favorite Color:</label>
          <input type="color" id="color" name="color">

          <label>Your Thoughts</label>
          <textarea name="thoughts" placeholder="Write something..."></textarea>

          <div class="terms">
            <input type="checkbox" name="terms" required />
            <label>I accept the <a href="#">Terms & Conditions</a></label>
          </div>

          <div class="error" id="errorMsg"></div>
          <button type="submit">Register</button>
        </form>
      </div>
    </div>
  </div>

  <script>
  document.getElementById("registrationForm").addEventListener("submit", function (e) {
    const fullName = document.getElementById("fullName").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const birthDate = document.getElementById("birthdate").value;
    const country = document.getElementById("country").value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const errorMsg = document.getElementById("errorMsg");

    let errors = [];

    if (/\d/.test(fullName)) {
      errors.push("Name must not contain numbers.");
    }

    if (password.length < 8) {
      errors.push("Password must be at least 8 characters long.");
    }

    if (password !== confirmPassword) {
      errors.push("Passwords do not match.");
    }

    const today = new Date();
    const birth = new Date(birthDate);
    const age = today.getFullYear() - birth.getFullYear();
    const monthDiff = today.getMonth() - birth.getMonth();
    if (
      !birthDate ||
      age < 18 ||
      (age === 18 && monthDiff < 0) ||
      (age === 18 && monthDiff === 0 && today.getDate() < birth.getDate())
    ) {
      errors.push("You must be at least 18 years old to register.");
    }

    if (!country) {
      errors.push("Please select your country.");
    }

    if (!gender) {
      errors.push("Please select your gender.");
    }

    const emailPattern = /^\d{2}-\d{5}-\d@student\.aiub\.edu$/;
    if (!emailPattern.test(email)) {
      errors.push("Email must be in AIUB format: 21-12345-1@student.aiub.edu");
    }

    if (errors.length > 0) {
      e.preventDefault();
      errorMsg.innerHTML = errors.map(e => `<b>${e}</b>`).join("<br>");
    } else {
      errorMsg.innerHTML = "";
    }
  });
  </script>

</body>
</html>