<?php
include 'koneksidb.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; 
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

    $sql = "UPDATE data_formulir SET 
            First_Name = '$firstName', 
            Last_Name = '$lastName', 
            Address = '$address', 
            Date_Of_Birth = '$dateOfBirth', 
            Email = '$email', 
            Gender = '$gender', 
            Religion = '$religion', 
            Status = '$status',
            Current_Job = '$job',
            Terms = '$terms'  
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Data berhasil diupdate');
        window.location.href = 'detail.php?id=" . $id . "';
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>