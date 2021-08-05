<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  @font-face {
    font-family: 'Helvetica Neue';
    src: url('../fonts/helveticaneue.ttf') format('truetype');
  }

  header {
    text-align: center;
    padding: 20px 0;
  }

  nav ul li {
    display: inline;
  }

  nav a {
    text-decoration: none;
    color: #ffffff;
    padding: 5px;
    font-family: 'Helvetica Neue';
  }

  body {
    background-image: url('../images/header.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: #1b1941;
  }

  .container {
    max-width: 500px;
    margin: 0 auto;
    padding-top: 330px;
    text-align: left;
    font-family: 'Helvetica Neue';
    color: #ffffff;
  }

  footer {
    color: #ffffff;
    text-align: center;
    padding: 20px 0;
    margin-top: 40px;
    font-size: 14px;
    font-family: 'Helvetica Neue';
  }

</style>


<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </nav>
</header>




<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p>This page designed by Emily.</p>
</footer>
