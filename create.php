<?php require_once 'connection.php'; ?>

<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create User</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEw
IH" crossorigin="anonymous">
</head>

<body>
<div class="container">
<?php
    if (!empty($_POST) ) {
        $firstname = $_POST['firsname'];
        $lastname = $_POST['lastname'];
        $user = $pdo->execute(compact('firsname', 'lastname'));
        
        echo '<div class="alert alert-success" role="alert">New user created successfully</div>';
    }
    ?>   
<from action="create.php" method="post">
    <div class="mb-3">
        <label class="from-label">First Name</label>
        <input type="text" class="form-control" name="lastname"
placeholder="Lastname">
    </div>
    <button type="submit" class="btn-primary">Create</button>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.j
s"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIe
Hz" crossorigin="anonymous"></script>
</body>
</html>