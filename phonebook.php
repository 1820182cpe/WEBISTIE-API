<style>
  /* Custom CSS */
.contact-card {
    border: 1px solid rgb(134 73 209 / 0%);
    border-radius: 1064.25rem;
    padding: 187px;
    box-shadow: 0 2px 30px 20px #f8f9fa00;
    margin-bottom: -67px;
    background: url(assets/imgs/hart.png);
    background-size: auto;
    background-position: center;
    margin-bottom: -146px;
    background-repeat: no-repeat;
}

  .contact-card .card-body {
    padding: 0;
  }

  .contact-card .card-title {
    padding: 10px;
    margin-bottom: 0;
    background-color: #0d4076;
    color: #fff;
  }

  .contact-card p {
    margin: 0;
    padding: 1px;
}

  .contact-card .btn {
    margin: 10px;
  }

  /* Custom CSS for layout */
.containers {
    text-align: -webkit-center;
    margin-top: -43px;
    background-color: #262626;
    color: rgba(255, 255, 255, 0.15);
    padding: 181px;
    border-radius: 1950px;
}

.form-group {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 31px;
}

  .form-group label {
    flex: 0 0 30%;
    margin-right: 10px;
    text-align: right;
  }

  .row {
    justify-content: center;
  }

  .col-md-6 {
    max-width: 500px;
  }

  h1 {
    margin-bottom: 30px;
  }

  h2 {
    margin-top: 30px;
  }

  #searchInput {
    margin-bottom: 10px;
  }

#contactList {
    list-style-type: none;
    padding: 0;
    margin-top: 26px;
    margin-left: -61px;
  }

  #contactList .contact-card:last-child {
    margin-bottom: 0;
  }

#noContactsFound {
    color: #a18d6a;
}
  }

  @media (min-width: 768px) {
    .offset-md-2 {
      margin-left: auto;
      margin-right: auto;
    }
  }

  /* Night Mode */
  body {
    background-color: #000;
    color: #fff;
  }
.containers {
    background-color: rgba(255, 255, 255, 0.15);
  }

  .form-group label {
    color: #94846c;
  }

.contact-card {
    background-color: rgb(255 255 255 / 0%);
}
  .contact-card .card-title {
    background-color: #0d4076;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Jnl Website</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
	<link rel="stylesheet" href="assets/css/meyawoo.css">
	<link rel="stylesheet" href="assets/main.css">
	<link rel="icon"  href="lugu.png" type="image/png>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">Jnl Website</a>         
            <ul class="nav">
                <li class="item">
                    <a class="link" href="index.php">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Phonebook</a>
                </li>
                <li class="item">
                    <a class="link" href="#testmonial">Contacts</a>
                </li>
                <li class="item">
                    <a class="link" href="login1.php">Login</a>
                </li>

            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>          
    </nav><!-- End of Page Navbar -->
    
 <br> 
 <br>
 <br>
 <br>

        </div>              
    </header><!-- end of page header -->
<body>
    <div class="containers">
    <h1>Phonebook</h1>
    <br>
    <div class="row">
      <div class="col-md-6">
        <form id="contactForm">
          <input type="hidden" id="contactId">
          <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label for="middleName">Middle Name:</label>
            <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address">
          </div>
          <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" placeholder="Enter notes"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
    
    <h2>Contact List</h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <input type="text" class="form-control" id="searchInput" placeholder="Search">
        <ul id="contactList"></ul>
        <p id="noContactsFound" style="display: none; color: #bba88a;">No contacts found.</p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>

</body>
</html>

<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>
































































