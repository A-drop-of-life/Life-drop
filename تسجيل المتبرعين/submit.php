<?php
// إعدادات الاتصال بقاعدة البيانات
$servername = "0.0.0.0:3306"; // اسم الخادم
$username = "root"; // اسم المستخدم
$password = ""; // كلمة المرور (افتراضية في XAMPP/WAMP)
$dbname = "Blood_donation"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استلام البيانات من النموذج
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$blood_type = $_POST['blood-type'];
$chronic_diseases = $_POST['chronic-diseases'];
$current_medications = $_POST['current-medications'];
$city = $_POST['city'];
$address = $_POST['address'];

// تحضير وإدراج البيانات في قاعدة البيانات
$sql = "INSERT INTO donors (name, dob, gender, phone, email, blood_type, chronic_diseases, current_medications, city, address)
VALUES ('$name', '$dob', '$gender', '$phone', '$email', '$blood_type', '$chronic_diseases', '$current_medications', '$city', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "تم تسجيلك بنجاح";
} else {
    echo "خطأ: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>