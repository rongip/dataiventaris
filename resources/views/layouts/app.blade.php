<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventaris</title>
    <link rel="icon" href="path/to/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        header {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 15px 0;
        }

        main {
            margin-top: 20px;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="m-0">Aplikasi Inventaris</h1>
    </header>

    <main class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                @include('petugas.create')
            </div>
            <div class="col-md-6">
                @include('petugas.index')
            </div>
        </div>
    </main>

    <footer>
        <p class="m-0">&copy; 2024 Aplikasi Inventaris</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
