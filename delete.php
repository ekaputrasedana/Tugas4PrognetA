<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Delete Data</title>
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Personal Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Delete Data</a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <div class="container center-containform">
        <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
            <div class="col-lg-12 mb-1 mb-sm-1">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-6">
                    <div class="col-lg-6 px-xl-10">
                        <h3 class="h2 text-black mb-0">DELETE DATA</h3><br>
                        <?php
                        include 'koneksidb.php';

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] == 'Yes') {
                                // Proses penghapusan data
                                $sql = "DELETE FROM data_formulir WHERE id = $id";

                                if ($conn->query($sql) === TRUE) {
                                    echo "Data berhasil dihapus.";
                                    echo '<script>window.location = "tabeldata.php";</script>';
                                } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }
                            } else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] == 'No') {
                                // Jika pengguna memilih "No", arahkan kembali ke tabeldata.php
                                echo '<script>window.location = "tabeldata.php";</script>';
                            } else {
                                // Menampilkan konfirmasi
                                echo '<p>Apakah Anda yakin ingin menghapus data ini?</p>';
                                echo '<form method="POST">';
                                echo '<input type="submit" name="confirm" value="Yes" class="btn btn-danger"> ';
                                echo '<input type="submit" name="confirm" value="No" class="btn btn-primary">';
                                echo '</form>';
                            }
                        } else {
                            echo "<p>Invalid request.</p>";
                        }

                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>