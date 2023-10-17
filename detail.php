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

    <title>Detail Data</title>
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
                        <a class="nav-link active" href="#">Detail Data</a>
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
                        <h3 class="h2 text-black mb-0">DETAIL DATA</h3><br>
                        <?php
                        include 'koneksidb.php';

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM data_formulir WHERE id = $id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<table class="table">';
                                echo '<tr><td><strong>First Name:</strong></td><td>' . $row['First_Name'] . '</td></tr>';
                                echo '<tr><td><strong>Last Name:</strong></td><td>' . $row['Last_Name'] . '</td></tr>';
                                echo '<tr><td><strong>Address:</strong></td><td>' . $row['Address'] . '</td></tr>';
                                echo '<tr><td><strong>Date Of Birth:</strong></td><td>' . $row['Date_Of_Birth'] . '</td></tr>';
                                echo '<tr><td><strong>Email:</strong></td><td>' . $row['Email'] . '</td></tr>';
                                echo '<tr><td><strong>Gender:</strong></td><td>' . $row['Gender'] . '</td></tr>';
                                echo '<tr><td><strong>Religion:</strong></td><td>' . $row['Religion'] . '</td></tr>';
                                echo '<tr><td><strong>Status:</strong></td><td>' . $row['Status'] . '</td></tr>';
                                echo '<tr><td><strong>Current Job:</strong></td><td>' . $row['Current_Job'] . '</td></tr>';
                                echo '<tr><td><strong>Terms:</strong></td><td>' . $row['Terms'] . '</td></tr>';
                                echo '</table>';
                            } else {
                                echo "<p>Data not found.</p>";
                            }
                        } else {
                            echo "<p>Invalid request.</p>";
                        }

                        $conn->close();
                        ?>

                        <a href="tabeldata.php" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>