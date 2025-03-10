<!-- WALA GIGAMIT SA ADMINSIDE -->

<?php
session_start();

include "../db_connect/db_connection.php";

if (!isset($_SESSION['username'])) {
  header("Location: ../index.php");
  exit();
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE usr_name = ?  ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
  $user = $result->fetch_assoc();
} else {
  echo "<script> alert('User not found.'); window.location.href='../index.php';</script>";
  exit();
}


include('includes/footer.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/top-navbar.php');
include('../components/fetch_users.php');
?>

<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Settings</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>



  <section class="content">
    <div class="container-fluid">

      <?php
      include('includes/notification.php');
      ?>
      <div class="card">
        <div class="card-header">

          <h3> Edit Profile</h3>
        </div>
        <div class="card-body">

          <form action="../components/save_settings.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label for=""> User ID</label>
              <input type="number" class="form-control" name="usr_id" value="<?= htmlspecialchars($user['usr_id']); ?>"
                readonly>
            </div>


            <div class="form-group text-center">
              <label for=""> Profile Picture</label>

              <div>
                <img src="assets/images/profiles/<?= htmlspecialchars( $user['usr_profile']) ?>" 
                alt="profile-image" class="img-thumbnail" width="180">
              </div>
              <input type="file" class="form-control mt-2" name="usr_profile">
            </div>

            <div class="form-group">
              <label for=""> Username</label>
              <input type="text" class="form-control" name="usr_name"
                value="<?= htmlspecialchars($user['usr_name']); ?>">
            </div>

            <div class="form-group">
              <label for=""> Firstname</label>
              <input type="text" class="form-control" name="usr_fname"
                value="<?= htmlspecialchars($user['usr_fname']); ?>">
            </div>
            <div class="form-group">
              <label for=""> Last name</label>
              <input type="text" class="form-control" name="usr_lname"
                value="<?= htmlspecialchars($user['usr_lname']); ?>">
            </div>

            <button type="submit" class="btn btn-success"> Update Profile </button>
          </form>

        </div>


      </div>

    </div>

  </section>
</div>