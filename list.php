<?php

include 'config.php';
$query = mysqli_query($connection, "SELECT * FROM `customer`");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Data Customer</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>

<body>
  <table id="myTable" class="display">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) : ?>
        <tbody>
    <tr>
      <td>
        <?php echo $no ?>
      </td>
      <td>
        <?php echo $data["first_name"];?>
      </td>
      <td>
        <?php echo $data["last_name"];?>
      </td>
      <td>
        <?php echo $data["email"];?>
      </td>
      <td>
        <?php echo $data["phone"];?>
      </td>
      <td>
        <?php echo $data["address"];?>
      </td>
      <td>
        <a href="edit.php?id=<?= $data['id'] ?>"><button>Edit</button></a>
        <a href="delete.php?id=<?= $data['id'] ?>"><button>Delete</button></a>
      </td>
    </tr>
    </tbody>
    <?php $no++ ?>
    <?php endwhile ?>
  </table>
  <a href="index.php"><button>Tambah data</button></a>
</body>

</html>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>