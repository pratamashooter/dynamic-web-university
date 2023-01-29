<?php
  require_once 'connection.php';

  $name = $_POST['name'] ?? null;
  $email = $_POST['email'] ?? null;
  $message = $_POST['message'] ?? null;

  if (
    isset($name) &&
    isset($email) &&
    isset($message)
  ) {
    $query = $conn->query("INSERT INTO contacts VALUES (null, '$name', '$email', '$message')");
    if ($query) {
      echo "<script>alert('Message successfully sent'); window.location.href='index.php'</script>";
    } else {
      echo "<script>alert('Message failed sent'); window.location.href='index.php'</script>";
    }
  } else {
    header('Location: index.php');
  }
?>