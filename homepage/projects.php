<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/app.css">
     <link rel="stylesheet" href="style.css" />

  <script src="js/vendor/modernizr.js"></script>
  

</head>
<body>
  

  <!-- body content here -->
  
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Alex Weininger</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class=""><a href="index.php">Home</a></li>
          <li class="active"><a href="projects.php">Projects</a></li>
           <li class=""><a href="projects.php">About</a></li>
      <li class="has-dropdown">
        <a href="#">Dropdown</a>
        <ul class="dropdown">
          <li><a href="#">First link in dropdown</a></li>
          <li class=""><a href="#">Active link in dropdown</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">

    </ul>
  </section>
</nav>
<div class="container">
  <table>
  <thead>
    <tr>
      <th width="250">Project Name</th>
      <th>Details</th>
      <th width="<200></200>">Status</th>
      <th width="200">Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><h5>Sebastain Realty Website</h5></td>
      <td><p>Website I am making for Sebastain Realty INC.</p></td>
      <td><p>in-progress</p></td>
      <td><a class="button radius expand" href="../sebastainrealtywebsite/index.php">View Project</a></td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
  </tbody>
</table>
</div>
  <!-- JS Scripts -->
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>