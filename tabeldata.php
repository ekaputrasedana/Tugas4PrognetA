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


    <title>Tabel Data</title>
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
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="TugasJavascript.php">Tugas Javascript</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="DataTerinput.php">Data Terinput</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Tabel Data</a>
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
                        <h3 class="h2 text-black mb-0">TABEL DATA DIRI</h3><br>
                        <?php
                        include 'koneksidb.php';

                        $sql = "SELECT id, First_Name, Last_Name, Email FROM data_formulir";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table">';
                            echo '<tr><th>No</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Action</th></tr>';
                            $counter = 1;
                            while($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $counter . '</td>';
                                echo '<td>' . $row['First_Name'] . '</td>';
                                echo '<td>' . $row['Last_Name'] . '</td>';
                                echo '<td>' . $row['Email'] . '</td>';
                                echo '<td>';
                                echo '<a href="detail.php?id=' . $row['id'] . '"><button>Detail</button></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '"><button>Delete</button></a>';
                                echo '<a href="edit.php?id=' . $row['id'] . '"><button>Edit</button></a>';
                                echo '</td>';
                                echo '</tr>';
                                $counter++;
                            }
                            echo '</table>';
                        } else {
                            echo "<p>No data available.</p>";
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