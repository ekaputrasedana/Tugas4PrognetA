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

    <title>Edit Data</title>
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
                        <a class="nav-link active" href="#">Edit Data</a>
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
                        <h3 class="h2 text-black mb-0">EDIT FORMULIR</h3><br>
                        <?php
                        include 'koneksidb.php';

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM data_formulir WHERE id = $id";
                            $result = $conn->query($sql);}

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();}
                        ?>
                        <div class="row center-content-center mb-5">
                            <div class="col-md-6">
                                <!-- <div class="alert alert-dark alert-dismissible fade show d-none my-alert" role="alert">
                            <strong>Thank You!</strong> I have received your message.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> -->
                                <form method="post" action="update.php" name="submit-to-google-sheet">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div class="col-12">
                                        <label for="inputFirstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="inputFirstName"
                                            id="inputFirstName" value="<?php echo $row['First_Name']; ?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputLastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="inputLastName" id="inputLastName"
                                            value="<?php echo $row['Last_Name']; ?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="inputAddress" id="inputAddress"
                                            value="<?php echo $row['Address']; ?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputDateOfBirth" class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" name="inputDateOfBirth"
                                            id="inputDateOfBirth" value="<?php echo $row['Date_Of_Birth']; ?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="inputEmail" id="inputEmail"
                                            value="<?php echo $row['Email']; ?>">
                                    </div>
                                    <div>
                                        <div>
                                            <label for="inputGender" class="form-label">Gender</label>
                                        </div>
                                        <div class="mb-2 mb-xl-3 display-28 radio-group">
                                            <input type="radio" id="Male" name="inputGender" value="Male" required
                                                <?php echo ($row['Gender'] === 'Male') ? 'checked' : ''; ?>>
                                            <label for="Male">Male</label>
                                            <input type="radio" id="Female" name="inputGender" value="Female" required
                                                <?php echo ($row['Gender'] === 'Female') ? 'checked' : ''; ?>>>
                                            <label for="Female">Female</label>
                                            <input type="radio" id="Others" name="inputGender" value="Others" required
                                                <?php echo ($row['Gender'] === 'Others') ? 'checked' : ''; ?>>>
                                            <label for="Others">Others</label>
                                        </div>

                                        <div class="col-12">
                                            <label for="inputReligion" class="form-label">Religion</label>
                                            <select name="inputReligion" id="inputReligion" class="form-select"
                                                required>
                                                <option selected>Choose..</option>
                                                <option>Hindu
                                                    <?php echo ($row['Religion'] === 'Hindu') ? 'selected' : ''; ?>
                                                </option>
                                                <option>Islam
                                                    <?php echo ($row['Religion'] === 'Islam') ? 'selected' : ''; ?>
                                                </option>
                                                <option>Kristen
                                                    <?php echo ($row['Religion'] === 'Kristen') ? 'selected' : ''; ?>
                                                </option>
                                                <option>Buddha
                                                    <?php echo ($row['Religion'] === 'Buddha') ? 'selected' : ''; ?>
                                                </option>
                                                <option>Katolik
                                                    <?php echo ($row['Religion'] === 'Katolik') ? 'selected' : ''; ?>
                                                </option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="inputState" class="form-label">Status</label>
                                        </div>
                                        <div class="mb-2 mb-xl-3 display-28 radio-group">
                                            <input type="radio" id="Married" name="inputState" value="Married" required
                                                <?php echo ($row['Status'] === 'Married') ? 'checked' : ''; ?>>
                                            <label for="Married">Married</label>
                                            <input type="radio" id="NotMarried" name="inputState" value="NotMarried"
                                                required
                                                <?php echo ($row['Status'] === 'NotMarried') ? 'checked' : ''; ?>>
                                            <label for="NotMarried">Not Married</label>
                                            <input type="radio" id="Other" name="inputState" value="Other" required
                                                <?php echo ($row['Status'] === 'Other') ? 'checked' : ''; ?>>
                                            <label for="Other">Others</label>
                                        </div>
                                        <div>
                                            <label for="inputjob" class="form-label">Current Job</label>
                                        </div>
                                        <div class="mb-2 mb-xl-3 display-28 checkbox-group">
                                            <input type="checkbox" id="Student" name="inputjob" value="Student"
                                                <?php echo ($row['Current_Job'] === 'Student') ? 'checked' : ''; ?>>
                                            <label for="Student">Student</label>
                                            <input type="checkbox" id="Goverment" name="inputjob" value="Goverment"
                                                <?php echo ($row['Current_Job'] === 'Goverment') ? 'checked' : ''; ?>>
                                            <label for="Goverment">Goverment</label>
                                            <input type="checkbox" id="Private" name="inputjob" value="Student"
                                                <?php echo ($row['Current_Job'] === 'Private') ? 'checked' : ''; ?>>
                                            <label for="Private">Private</label>
                                            <input type="checkbox" id="others" name="inputjob" value="Student"
                                                <?php echo ($row['Current_Job'] === 'others') ? 'checked' : ''; ?>>
                                            <label for="others">Others</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="inputPersonalTerms"
                                                id="inputPersonalTerms" required>
                                            <label class="form-check-label" for="inputPersonalTerms">I Agree with
                                                personal
                                                terms</label>
                                        </div>
                                        <div>
                                            <button class="w-100 btn btn-primary btn-kirim"
                                                type="submit">Update</button>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</body>

</html>