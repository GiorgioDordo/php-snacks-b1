<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container border border-1 rounded p-3">
        <form action="./filter.php" method="GET">
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="firstName" placeholder="Nome">
                </div>

                <div class="col-6 mb-3">
                    <label for="e-mail" class="form-label">email</label>
                    <input type="email" class="form-control" id="e-mail" name="emails" placeholder="email">
                </div>

                <div class="col-6 mb-3">
                    <label for="Age" class="form-label">Eta</label>
                    <input type="text" class="form-control" id="Age" name="ageValue" placeholder="Eta">
                </div>

                <div class="col-6 mb-3">
                    <label for="pass" class="form-label">password</label>
                    <input type="password" class="form-control" id="pass" name="passValue" placeholder="password">
                </div>



                <div class="d-flex gap-2 justify-content-center">
                    <button type="submit" class="btn btn-primary btn-invio">Invia</button>
                    <button type="reset" class="btn btn-danger btn-invio">Reset</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>