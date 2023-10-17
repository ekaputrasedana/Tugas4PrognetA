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
    <link rel="stylesheet" href="style.css" />

    <title>Tugas Javascript</title>
</head>

<body>
    <!-- Navbar -->
    <section id="home">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="Homepage.html">Personal Website</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Tugas Javascript</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="DataTerinput.php">Data Terinput</a>
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
    </section>
    <!-- Akhir Navbar -->

    <!-- Form -->
    <section id="Form">
        <div class="container">
            <div class="row text-justify mb-3">
                <div class="col">
                    <h2>FORMULIR</h2>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-6">
                        <!-- <div class="alert alert-dark alert-dismissible fade show d-none my-alert" role="alert">
                            <strong>Thank You!</strong> I have received your message.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> -->
                        <form method="post" action="DataTerinput.php" name="submit-to-google-sheet">
                            <div class="col-12">
                                <label for="inputFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="inputFirstName" id="inputFirstName"
                                    required />
                            </div>
                            <div class="col-12">
                                <label for="inputLastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="inputLastName" id="inputLastName"
                                    required />
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" name="inputAddress" id="inputAddress"
                                    required />
                            </div>
                            <div class="col-12">
                                <label for="inputDateOfBirth" class="form-label">Date Of Birth</label>
                                <input type="date" class="form-control" name="inputDateOfBirth" id="inputDateOfBirth"
                                    required />
                            </div>
                            <div class="col-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail" required />
                            </div>
                            <div>
                                <div>
                                    <label for="inputGender" class="form-label">Gender</label>
                                </div>
                                <div class="mb-2 mb-xl-3 display-28 radio-group">
                                    <input type="radio" id="Male" name="inputGender" value="Male" required>
                                    <label for="Male">Male</label>
                                    <input type="radio" id="Female" name="inputGender" value="Female">
                                    <label for="Female">Female</label>
                                    <input type="radio" id="Others" name="inputGender" value="Others">
                                    <label for="Others">Others</label>
                                </div>

                                <div class="col-12">
                                    <label for="inputReligion" class="form-label">Religion</label>
                                    <select name="inputReligion" id="inputReligion" class="form-select" required>
                                        <option selected>Choose..</option>
                                        <option>Hindu</option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Buddha</option>
                                        <option>Katolik</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="inputState" class="form-label">Status</label>
                                </div>
                                <div class="mb-2 mb-xl-3 display-28 radio-group">
                                    <input type="radio" id="Married" name="inputState" value="Married" required>
                                    <label for="Married">Married</label>
                                    <input type="radio" id="NotMarried" name="inputState" value="NotMarried">
                                    <label for="NotMarried">Not Married</label>
                                    <input type="radio" id="Other" name="inputState" value="Other">
                                    <label for="Other">Others</label>
                                </div>
                                <div>
                                    <label for="inputjob" class="form-label">Current Job</label>
                                </div>
                                <div class="mb-2 mb-xl-3 display-28 checkbox-group">
                                    <input type="checkbox" id="Student" name="inputjob" value="Student" required>
                                    <label for="Student">Student</label>
                                    <input type="checkbox" id="Goverment" name="inputjob" value="Goverment">
                                    <label for="Goverment">Goverment</label>
                                    <input type="checkbox" id="Private" name="inputjob" value="Private">
                                    <label for="Private">Private</label>
                                    <input type="checkbox" id="others" name="inputjob" value="others">
                                    <label for="others">Others</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="inputPersonalTerms"
                                        id="inputPersonalTerms" required>
                                    <label class="form-check-label" for="inputPersonalTerms">I Agree with personal
                                        terms</label>
                                </div>
                                <div>
                                    <button class="w-100 btn btn-primary btn-kirim" type="submit">Submit</button>
                                </div>
                                <button class="btn btn-dark btn-loading d-none" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                        </form>
    </section>

    <!-- js formsubmit
    <script>
    const form = document.forms['submit-to-google-sheet'];
    const btnKirim = document.querySelector('.btn-kirim');
    const myAlert = document.querySelector('.my-alert');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tampilkan pesan "Berhasil Submit"
        myAlert.classList.toggle('d-none');
        // reset form (jika Anda ingin menghapus masukan data)
        form.reset();
    });
    </script> -->
</body>

</html>