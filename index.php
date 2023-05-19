<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Javascript</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script defer src="script2.js"></script>
</head>

<body>
    <div class="container">
        <form id="form"  action="proses.php" method="post" name="action">
            <h1>Tambah Data</h1>
            <div class="input-control">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="address">Address</label>
                <input id="address" name="address" type="text">
                <div class="error"></div>
            <button type="submit" name="submit">Tambah</button>
        </form>
    </div>
    
</body>

</html>