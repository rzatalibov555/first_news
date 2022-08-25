<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <style>
        body {
            background: purple;
            color: white;
        }

        .inp{
            width: 100%;
            min-height: 300px;
            display: flex;
            justify-content: center;
        }
    </style>

    <h1 style="text-align: center;">Login</h1>

    <div class="inp">
        <form action="<?php echo base_url('login_act'); ?>" method="POST" >
            <label for="username">Username</label>
            <br>
            <input type="text" name="username" placeholder="Enter username">
            <br>
            <br>

            <label for="pass">Password</label>
            <br>
            <input type="password" name="password" placeholder="Enter password">
            <br>
            <br>
            <button type="submit">Login</button>

            <?php if($this->session->flashdata('err')){ ?>
               <p style="color: white; text-align:center"><?php echo $this->session->flashdata('err'); ?></p>
           <?php } ?>

        </form>
    </div>

</body>

</html>


