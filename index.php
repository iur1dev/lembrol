<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "lembrol";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->error) {
    die('erro database' . $conn->error);
}

$sql = "select * from semanas";
$query = $conn->query($sql) or die('erro select input' . $conn->error);

if (isset($_GET['segunda_btn'])) {
    $segunda = $_GET['segunda'];

    if (empty($segunda)) {
        echo '<div class="alert alert-danger text-center" role="alert">Digite algo 😒</div>';
    } else {
        $sql_segunda = "insert into segunda (nome) value ('$segunda')";
        $query_segunda = $conn->query($sql_segunda) or die('erro insert segunda ' . $conn->error);

        header('Location: index.php');
    }
}

if (isset($_GET['terca_btn'])) {
    $terca = $_GET['terca'];

    if (empty($terca)) {
        echo '<div class="alert alert-danger text-center" role="alert">Digite algo 😒</div>';
    } else {
        $sql_terca = "insert into terca (nome) value ('$terca')";
        $query_terca = $conn->query($sql_terca) or die('erro insert terca ' . $conn->error);

        header('Location: index.php');
    }
}

if (isset($_GET['quarta_btn'])) {
    $quarta = $_GET['quarta'];

    if (empty($quarta)) {
        echo '<div class="alert alert-danger text-center" role="alert">Digite algo 😒</div>';
    } else {
        $sql_quarta = "insert into quarta (nome) value ('$quarta')";
        $query_quarta = $conn->query($sql_quarta) or die('erro insert quarta ' . $conn->error);

        header('Location: index.php');
    }
}

if (isset($_GET['quinta_btn'])) {
    $quinta = $_GET['quinta'];

    if (empty($quinta)) {
        echo '<div class="alert alert-danger text-center" role="alert">Digite algo 😒</div>';
    } else {
        $sql_quinta = "insert into quinta (nome) value ('$quinta')";
        $query_quinta = $conn->query($sql_quinta) or die('erro insert quinta ' . $conn->error);

        header('Location: index.php');
    }
}

if (isset($_GET['sexta_btn'])) {
    $sexta = $_GET['sexta'];

    if (empty($sexta)) {
        echo '<div class="alert alert-danger text-center" role="alert">Digite algo 😒</div>';
    } else {
        $sql_sexta = "insert into sexta (nome) value ('$sexta')";
        $query_sexta = $conn->query($sql_sexta) or die('erro insert sexta ' . $conn->error);

        header('Location: index.php');
    }
}

$sql_select_segunda = "select * from segunda";
$query_select_segunda = $conn->query($sql_select_segunda) or die('erro select segunda ' . $conn->error);

$sql_select_terca = "select * from terca";
$query_select_terca = $conn->query($sql_select_terca) or die('erro select terca ' . $conn->error);

$sql_select_quarta = "select * from quarta";
$query_select_quarta = $conn->query($sql_select_quarta) or die('erro select quarta ' . $conn->error);

$sql_select_quinta = "select * from quinta";
$query_select_quinta = $conn->query($sql_select_quinta) or die('erro select quinta ' . $conn->error);

$sql_select_sexta = "select * from sexta";
$query_select_sexta = $conn->query($sql_select_sexta) or die('erro select sexta ' . $conn->error);


if (empty($_GET['id'])) {
    $id = 0;
} else {
    $id = $_GET['id'];
}

if ($id > 0) {
    $sql_delete_segunda = "delete from segunda where id_segunda = '$id'";
    $query_delete_segunda = $conn->query($sql_delete_segunda) or die('erro delete segunda ' . $conn->error);

    header('Location: index.php');
}

if ($id > 999) {
    $sql_delete_terca = "delete from terca where id_terca = '$id'";
    $query_delete_terca = $conn->query($sql_delete_terca) or die('erro delete terca ' . $conn->error);

    header('Location: index.php');
}

if ($id > 1999) {
    $sql_delete_quarta = "delete from quarta where id_quarta = '$id'";
    $query_delete_quarta = $conn->query($sql_delete_quarta) or die('erro delete quarta ' . $conn->error);

    header('Location: index.php');
}

if ($id > 2999) {
    $sql_delete_quinta = "delete from quinta where id_quinta = '$id'";
    $query_delete_quinta = $conn->query($sql_delete_quinta) or die('erro delete quinta ' . $conn->error);

    header('Location: index.php');
}

if ($id > 3999) {
    $sql_delete_sexta = "delete from sexta where id_sexta = '$id'";
    $query_delete_sexta = $conn->query($sql_delete_sexta) or die('erro delete sexta ' . $conn->error);

    header('Location: index.php');
}

if (isset($_GET['limpar'])) {
    $sql_del_segunda = "delete from segunda";
    $quer_del_segunda = $conn->query($sql_del_segunda) or die("erro delete all segunda " . $conn->error);

    $sql_del_terca = "delete from terca";
    $quer_del_terca = $conn->query($sql_del_terca) or die("erro delete all terca " . $conn->error);

    $sql_del_quarta = "delete from quarta";
    $quer_del_quarta = $conn->query($sql_del_quarta) or die("erro delete all quarta " . $conn->error);

    $sql_del_quinta = "delete from quinta";
    $quer_del_quinta = $conn->query($sql_del_quinta) or die("erro delete all quinta " . $conn->error);

    $sql_del_sexta = "delete from sexta";
    $quer_del_sexta = $conn->query($sql_del_sexta) or die("erro delete all sexta " . $conn->error);


    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembrol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="fw-bold text-center my-5">Prestomed</h1>

        <form>
            <div class="row">
                <div class="col-1"></div>
                <?php
                while ($row = mysqli_fetch_assoc($query)) {
                    echo '<div class="col-2 text-center">';
                    echo '<input type="text" placeholder="' . $row['nome'] . '" name="' . $row['name'] . '" class="form-control text-center">';
                    echo '<button class="btn btn-dark mt-3" type="submit" name="' . $row['name_btn'] . '">' . $row['emoji'] . '</button>';
                    echo '</div>';
                }
                ?>
                <div class="col-1"></div>
            </div>
        </form>

        <div class="row mt-3 d-flex justify-content-evenly">
            <div class="card" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Segunda</h5>
                    <?php
                    while ($row = mysqli_fetch_assoc($query_select_segunda)) {
                        echo '<p class="card-text text-center">' . $row['nome'] . ' <a class="text-decoration-none" href="index.php?id=' . $row['id_segunda'] . '">❌</a></p>';
                    }
                    ?>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Terça</h5>
                    <?php
                    while ($row = mysqli_fetch_assoc($query_select_terca)) {
                        echo '<p class="card-text text-center">' . $row['nome'] . '<a class="text-decoration-none" href="index.php?id=' . $row['id_terca'] . '">&nbsp;❌</a></p>';
                    }
                    ?>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Quarta</h5>
                    <?php
                    while ($row = mysqli_fetch_assoc($query_select_quarta)) {
                        echo '<p class="card-text text-center">' . $row['nome'] . '<a class="text-decoration-none" href="index.php?id=' . $row['id_quarta'] . '">&nbsp;❌</a></p>';
                    }
                    ?>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Quinta</h5>
                    <?php
                    while ($row = mysqli_fetch_assoc($query_select_quinta)) {
                        echo '<p class="card-text text-center">' . $row['nome'] . '<a class="text-decoration-none" href="index.php?id=' . $row['id_quinta'] . '">&nbsp;❌</a></p>';
                    }
                    ?>
                </div>
            </div>

            <div class="card" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">Sexta</h5>
                    <?php
                    while ($row = mysqli_fetch_assoc($query_select_sexta)) {
                        echo '<p class="card-text text-center">' . $row['nome'] . '<a class="text-decoration-none" href="index.php?id=' . $row['id_sexta'] . '">&nbsp;❌</a></p>';
                    }
                    ?>
                </div>
            </div>
            <button class="btn btn-danger col-12 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Limpar</button>
        </div>
    </div>

    <!-- Modal -->
    <form>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Limpar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Quer mesmo limpar tudo ? 😎</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-danger" name="limpar">Limpar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>