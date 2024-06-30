<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to AdminTravel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Custom Styles -->
  <style>
  /* Add your custom styles here */
  body {
    background: url('path/to/your/background-image.jpg') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Source Sans Pro', sans-serif;
    color: #fff; /* Text color for better readability on dark background */
  }
  .welcome-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: rgba(0, 0, 0, 0.5); /* Adding a dark overlay for better text visibility */
    padding: 20px;
  }
  .welcome-content {
    text-align: center;
    background: rgba(0, 0, 0, 0.7); /* Dark background for the content area */
    padding: 30px;
    border-radius: 10px;
  }
  .welcome-title {
    font-size: 3rem;
    margin-bottom: 20px;
  }
  .welcome-subtitle {
    font-size: 1.5rem;
    color: #f8f9fa;
    margin-bottom: 40px;
  }
  .welcome-logo {
    width: 150px;
    height: auto;
    margin-bottom: 20px;
  }
  .btn-get-started {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }
  .btn-get-started:hover {
    background-color: #0056b3;
  }

  @keyframes fallFromTop {
    0% {
      transform: translateY(-100%);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  .welcome-logo,
  .welcome-title,
  .welcome-subtitle {
    animation: fallFromTop 1s ease forwards;
  }
</style>

</head>
<body>
  <div class="welcome-container">
    <div class="welcome-content">
      <img src="saya.jpg" alt="AdminTravelLogo" class="welcome-logo">
      <h1 class="welcome-title">Selamat Datang Abdul Rahman dihalaman AdminTravel</h1>
      <p class="welcome-subtitle">Selamat bekerja dan Semangat!!!</p>
      
    </div>
  </div>
</body>
</html>
