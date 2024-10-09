<?php
    require_once __DIR__.'/classes/user.php';

    $user1 = new User(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['age'],
        $_POST['email'],
        $_POST['password']
    );

$users = [$user1];
?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Lista Utenti</title>
</head>
<body>
    <h1 class="text-center py-3">Lista Utenti</h1>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>     
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Età</th>
                    <th scope="col-auto">Email</th>
                    <th scope="col-auto">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($users as $user):
                ?>
                    <tr>
                        <td>
                            <?php
                                echo htmlspecialchars($user->getFirstName());
                            ?>
                        </td>
                        <td>
                            <?php
                                echo htmlspecialchars($user->getLastName());
                            ?>
                        </td>
                        <td>
                            <?php
                                echo htmlspecialchars($user->getAge());
                            ?>
                        </td>
                        <td>
                            <?php
                                echo htmlspecialchars($user->getEmail());
                            ?>
                        </td>
                        <td>
                            <?php
                                echo htmlspecialchars($user->getPassword());
                            ?>
                        </td>
                    </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>