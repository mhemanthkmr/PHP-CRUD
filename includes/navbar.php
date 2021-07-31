<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <h2><a class="navbar-brand" href="#">PHP CRUD</a></h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') {echo "active" ;} else "" ?>" href="home.php">Home</a>
        </li>
        <?php 
        if(!isset($_SESSION['verified_user_id'])){ ?>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'register.php') {echo "active" ;} else "" ?>" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'login.php') {echo "active" ;} else "" ?>" href="login.php">Login</a>
          </li> <?php
        }
        else { ?>
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') {echo "active" ;} else "" ?>" href="index.php">Students List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'user-list.php') {echo "active" ;} else "" ?>" href="user-list.php">User List</a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php
          echo $_SESSION['name']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item " href="index.php">Add Contact</a></li>
            <li><a class="dropdown-item " href="logout.php">Logout</a></li>
          </ul> <?php 
        }
        ?>
        
      </ul>
    </div>
  </div>
</nav>