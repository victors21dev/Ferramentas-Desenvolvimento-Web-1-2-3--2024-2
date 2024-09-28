<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EA2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link defer rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div style="background-color: #fff;" class="container mt-4 d-flex justify-content-center open-sans rounded">
        <div class="p-4">
            <h2>Produtos</h2>
            <hr>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    <a href=""></a>
                    <?php
                    $products = array(
                        ['0', 'Snack Saudável', 'Snack feito com frutas desidratadas', '15.90'],
                        ['1', 'Refeição Congelada Fitness', 'Refeição balanceada, rica em proteinas', '25.99'],
                        ['2', 'Suco Natural Detox', 'Suco natural a base de frutas e vegetais', '8.75']
                    );

                    foreach ($products as $product) {
                        echo "
                        <tr>
                            <td><a href='././detalhe_produto.php/?id=$product[0]'>$product[1]</a><br></td>
                        </tr>
                        ";
                    }
                    ?>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $name = $_POST["name"];
                        $description = $_POST["description"];
                        $price = $_POST["price"];

                        echo "
                                <tr>
                                    <td>$name</td>
                                    <td>$description</td>
                                    <td>$price</td>
                                </tr>
                            ";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</body>

</html>