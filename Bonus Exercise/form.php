<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Registrazione Utenti</title>
</head>
<body>
    <h1 class="text-center py-3">
        Registrazione utente
    </h1>
    <div class="container py-5">
        <form class="row g-3" action="./result.php" method="POST">
            <div class="col-md-6">
                <label for="inputFirstName" class="form-label">
                    Nome
                </label>
                <input type="text" class="form-control" id="inputFirstName" name="firstName">
            </div>
            <div class="col-md-6">
                <label for="inputLastName" class="form-label">
                    Cognome
                </label>
                <input type="text" class="form-control" id="inputLastName" name="lastName">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">
                    Email
                </label>
                <input type="email" class="form-control" id="inputEmail" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">
                    Password
                </label>
                <input type="password" class="form-control" id="inputPassword" name="password">
            </div>
            <div class="col-auto">
                <label for="inputAge" class="form-label">
                    Inserisci la tua età
                </label>
                <input type="number" id="inputAge" class="form-control" name="age">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
</body>
</html>