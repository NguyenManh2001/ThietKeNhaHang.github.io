<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home2.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fuild">
        <div class="row">
            <div class="col-md-12 ">
                <nav class="navbar navbar-expand-lg navbar-light border-bottom border-dark ">
                    <div class="container-fluid mau">
                        <ul class="navbar-nav me-auto ms-auto mb-4 ">
                            <ul class="nav justify-content-center ">
                                <li class="nav-item">
                                    <a class="nav-link " href="../BNH.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../admin/home1.php">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../admin/home2.php">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../admin/home3.php">Foods</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../admin/home4.php">Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../admin/home.php">layout</a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 cuatoi">
                <h2 class="h2">Manage Category</h2>
                <a href="#" class="btn btn-primary h2">Add Category</a>
                <table class="table h2">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Active</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="a">1.</th>
                            <td>Pizza</td>
                            <td class="id"><img src="../img/pizza.jpg" alt="" class="img"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td> <a href="#" class="btn btn-success btn-sm">Update Category</a> <a href="#"
                                    class="btn btn-danger btn-sm">Delete Category</a></td>
                        </tr>
                        <tr>
                            <th scope="row" class="a">2.</th>
                            <td>Burger</td>
                            <td class="id"><img src="../img/burger.jpg" alt="" class="img"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td> <a href="#" class="btn btn-success btn-sm">Update Category</a> <a href="#"
                                    class="btn btn-danger btn-sm">Delete Category</a></td>
                        </tr>
                        <tr>
                            <th scope="row" class="a">3.</th>
                            <td>Momo</td>
                            <td class="id"><img src="../img/momo.jpg" alt="" class="img"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td> <a href="#" class="btn btn-success btn-sm">Update Category</a> <a href="#"
                                    class="btn btn-danger btn-sm">Delete Category</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 font">
                <h6 class="text-center">
                    2020 All rights reserved, Food House. Developed by - <a href="#">CSS</a>
                </h6>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>