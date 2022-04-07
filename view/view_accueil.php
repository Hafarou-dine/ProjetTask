<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/style/style_co.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Task</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active me-5"  href="./accueil.php">Home</a>
                        <a class="nav-link active me-5"  href="">Categories</a>
                        <a class="nav-link active me-5"  href="">Compte</a>
                        <a href="./deconnexion.php" class="btn btn-primary me-5 mb-2">deconnexion</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <form action="" method="post" class=" mt-3 ms-3">
            <p class="fs-3">Liste des taches</p>
            
            <!-- <input type="submit" value="connexion"> -->
        </form>
        <!-- zone pour afficher les messages -->
        <div class="ms-3">
            <p id="zonemsg" class="mt-3"></p>
        </div>
    </main>
    <footer class="mt-auto bg-secondary">
        <p class="text-center mt-2 fs-4">Task&copy;</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./asset/script/script.js"></script>
</body>
</html>