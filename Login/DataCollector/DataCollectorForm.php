
<!DOCTYPE html>
<html lang="en">
<head>
  <title>plandR Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="logo.jpg">
  <link rel="stylesheet" href="fontawesome.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="DataCollectorForm.css">

  <!-- <script type="text/javascript" src="Login.js"></script> -->

</head>
<body>

  <div class="container">
    <div class="animated bounce 6s">
    <h1 class="brand"><span>plandR</span> cens</h1>
  </div>
    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
        <ul>
          <li><i class="fa fa-road"></i> 44 Something st</li>
          <li><i class="fa fa-phone"></i> (5895) 775-5665</li>
          <li><i class="fa fa-envelope"></i> test@plandR.test</li>
        </ul>
      </div>
      <div class="contact">
        <h3>QUESTIONNAIRE</h3>
        <form action="insert.php" method="post">
          <!-- <p>
            <label>1. List of people residing in the dwelling and the relationships among them</label>
            <input type="text" name="name">
          </p> -->
          <p>
            <label> Gender</label>
            <input type="text" name="gender">
          </p>
          <p>
            <label> Age</label>
            <input type="text" name="age">
          </p>
          <p>
            <label> Period of residence in the dwelling and in the locality</label>
            <input type="text" name="period">
          </p>
          <p>
            <label>Education </label>
            <input type="text" name="education">
          </p>
           <p>
            <label>Living conditions </label>
            <input type="text" name="living">
          </p>
           <p>
            <label>marital status </label>
            <input type="text" name="marriage">
          </p>
           <p>
            <label>Where did you usually live one year ago </label>
            <input type="text" name="residence">
          </p>
           <p>
            <label>What is your Nationality? </label>
            <input type="text" name="nationality">
          </p>
           <p>
            <label>What is your religion? </label>
            <input type="text" name="religion">
          </p>
           <p>
            <label> What is your ethnic or cultural background? </label>
            <input type="text" name="ethnicity">
          </p>
           <p>
            <label>Do you speak a language other than English or Swahili at home? </label>
            <input type="text" name="otherlanguage">
          </p>
           <p>
            <label>How is your health in general? </label>
            <input type="text" name="health">
          </p>
           <p>
            <label>Does your household own or rent you accommodation? </label>
            <input type="text" name="household">
          </p>
           <p>
            <label> If your accommodation is rented, how much rent does your household pay? </label>
            <input type="text" name="rent">
          </p>
           <p>
            <label>How many rooms do you have for use only by your household? </label>
            <input type="text" name="rooms">
          </p>
           <p>
            <label>How many cars or vans are owned or are available for use </label>
            <input type="text" name="cars">
          </p>
           <p>
            <label>Does you household have a personal computer (PC)? </label>
            <input type="text" name="computer">
          </p>
           <!-- <p>
            <label>Does your household have access to the Internet? </label>
            <input type="text" name="internet">
          </p> -->
           <p>
            <label>Are you an employer or employed? </label>
            <input type="text" name="employment">
          </p>
          <p class="full">
            <label> Income</label>
            <input type="text" name="income">
          </p>
          <p class="full">
            <!-- <button type="submit" value="Submit">Submit</button> -->
            <input type="text" name="submit" value="signup" style="display: none;">
    	<button type="submit" id="btn2" value="Create Account">Submit Form</button>
            
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>