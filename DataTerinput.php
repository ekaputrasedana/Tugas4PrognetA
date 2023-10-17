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

    <title>Data Terinput</title>
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
                        <a class="nav-link active" href="#">Data Terinput</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tabeldata.php">Tabel Data</a>
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
                        <h3 class="h2 text-black mb-0">DATA TELAH DISIMPAN!</h3><br>
                        <?php
                        include 'koneksidb.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $firstName = $_POST['inputFirstName'];
                        $lastName = $_POST['inputLastName'];
                        $address = $_POST['inputAddress'];
                        $dateOfBirth = $_POST['inputDateOfBirth'];
                        $email = $_POST['inputEmail'];
                        $gender = $_POST['inputGender'];
                        $religion = $_POST['inputReligion'];
                        $status = $_POST['inputState'];
                        $job = isset($_POST['inputjob']) ? $_POST['inputjob'] : [];
                        $terms = isset($_POST['inputPersonalTerms']) ? 'Yes' : 'No';

                        $sql = "INSERT INTO data_formulir (First_Name, Last_Name, Address, Date_Of_Birth, Email, Gender, Religion, Status, Current_Job, Terms)
                        VALUES ('$firstName', '$lastName', '$address', '$dateOfBirth', '$email', '$gender', '$religion', '$status', '$job', '$terms')";
                        }
                        
                        if ($conn->query($sql) === TRUE ) {

                        echo '<table class="table">';
                        echo '<tr><td><strong>First Name:</strong></td><td>' . $firstName . '</td></tr>';
                        echo '<tr><td><strong>Last Name:</strong></td><td>' . $lastName . '</td></tr>';
                        echo '<tr><td><strong>Address:</strong></td><td>' . $address . '</td></tr>';
                        echo '<tr><td><strong>Date of Birth:</strong></td><td>' . $dateOfBirth . '</td></tr>';
                        echo '<tr><td><strong>Email:</strong></td><td>' . $email . '</td></tr>';
                        echo '<tr><td><strong>Gender:</strong></td><td>' . $gender . '</td></tr>';
                        echo '<tr><td><strong>Religion:</strong></td><td>' . $religion . '</td></tr>';
                        echo '<tr><td><strong>Status:</strong></td><td>' . $status . '</td></tr>';
                        echo '<tr><td><strong>Current Job:</strong></td><td>' . $job . '</td></tr>';
                        echo '<tr><td><strong>Terms:</strong></td><td>' . $terms . '</td></tr>';
                        echo '</table>';                            
                        } else {
                        echo "<p>No data submitted.</p>";
                        echo "EROR: " .$sql . "<br>" . $conn->eror;
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