@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                {{ __('Chrizel') }}

                                <!------------------------------------------------------------------------------- /RESUME ------------------------------------------------------------------------------->
                                <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chrizel Dianne Bosque's Resume</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #fccfcfff;
      font-family: Arial, sans-serif;
      color: #000000ff;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 30px;
      background: #black;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
    }

    /* Header section */
    .header {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 10px;
      overflow: hidden;
      border: 2px solid #000000ff;
      flex-shrink: 0;
    }

    .profile-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h1 {
      margin: 0;
      font-size: 32px;
      color: #000000ff;
    }

    .title {
      margin-top: 5px;
      font-weight: bold;
      color: #000000ff;
    }

    h2 {
      border-bottom: 1px solid #333;
      padding-bottom: 5px;
      margin-top: 30px;
      color: #000000ff;
    }

    h3 {
      margin-bottom: 5px;
      margin-top: 15px;
    }

    p {
      margin: 5px 0;
      color: #000000ff;
    }

    ul {
      padding-left: 20px;
      color: #000000ff;
    }

    .section {
      margin-top: 20px;
    }

    .highlight {
      color: #000000ff;
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- Header with Image -->
    <div class="header">
      <div class="profile-img">
        <image src = "..\..\images\resumepic.jpg"></image>
      </div>
      <div>
        <h1>Chrizel Dianne B. Bosque</h1>
      <p><i class="fas fa-lg fa-phone"></i> +639929598035</p>
      <p><i class="fas fa-envelope-square fa-2x"></i> diannebosque17@gmail.com</p>
      <p><i class="fab fa-facebook-square fa-2x"></i> Chrizel Dianne </p>
      <p><i class="fab fa-twitter-square fa-2x"></i> Chrizel Dianne </p>
      <p><i class="fas fa-map-marker-alt mr-1"></i> Sitio Mindanao, San Esteban, Macabebe, Pampanga</p>
      </div>
    </div>

      <h3><i class="fas fa-globe"></i>Web Developer</h3>

    <div class="section">
      <h2><i class="fas fa-pencil-alt mr-1"></i>Skills</h2>
      <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>

      </ul>
    </div>

    <div class="section">
      <h2><i class="far fa-file-alt mr-1"></i>Leaderships</h2>
      <ul>
        <li>Junior technology Innovators Association - Unit Head on Public Information | 2025 – 2026</li>
        <li>Junior technology Innovators Association - Unit Head on Public Information | 2024 – 2025</li>
        <li>DHVSU Apalit Campus Student Council - Social Media Account Manager | 2023 – 2024</li>
        <li>YES-O OFFICER | High School </li>
      </ul>
    </div>

    <div class="section">
      <h2><i class="far fa-file-alt mr-1"></i>Achievements</h2>
      <ul>
        <li>Director's Lister | 2023 – 2024</li>
        <li>With Honors | Senior High School</li>
      </ul>
    </div>

    <div class="section">
       <h2> <i class="fas fa-book mr-1">Education</i></h2>

      <h3>Elementary</h3>
      <p>Sitio Mindanao Elementary School | 2017 – 2018</p>

      <h3>Secondary</h3>
      <h4>Science, Technology, Engineering, and Mathematics</h4>
      <p>Masantol High School | 2022 – 2023</p>

      <h3>Tertiary</h3>
      <h4>Bachelor of Science in Information Tehnology</h4>
      <p>Pampanga State University | 2023 – Present</p>

    </div>

  </div>

</body>
</html>

                                <!------------------------------------------------------------------------------- /RESUME ------------------------------------------------------------------------------->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection