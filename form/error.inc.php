<style type="text/css">
/*==========================================
*
*           Universal Styling
*
===========================================*/

* {
  margin: 0;
  padding: 0;
  font-family: 'Helvetica Neue', sans-serif;
  text-decoration: none;
}

@font-face{
  font-family: 'Helvetica Neue';
  src: url('../fonts/helvetica-neue.ttf') format('truetype');
}

/*==========================================
*
*             Body Content
*
===========================================*/

body {
  background-color: #000000;
}

.text-section {
  margin: 0 auto;
  max-width: 500px;
  margin-top: 350px;
  text-align: center;
}

h1 {
  font-family: 'Helvetica Neue', sans-serif;
  font-weight: bold;
  letter-spacing: 3px;
  font-size: 18px;
  color: #ffffff;
}

h2 {
  font-family: 'Helvetica Neue', sans-serif;
  font-weight: lighter;
  letter-spacing: 3px;
  font-size: 14px;
  color: #ffffff;
}

h4 {
  color: #ffffff;
  font-weight: normal;
  letter-spacing: 3px;
}

.home {
  background-color: transparent;
  border: 1px solid #ffffff;
  padding: 15px 32px;
  text-align: center;
  display: inline-block;
  margin-top: 20px;
  color: #ffffff;
}

.home:hover {
  transition: .3s;
  text-decoration: none;
  opacity: 50%;
}

</style>

<body>
  <section class="text-section">

    <h1>Missing Fields</h1>
    <h2>Sorry, you have not completed all of the required fields.Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</h2>

    <ul>
  	<?php
  		for($i=0; $i<count($this->missing_required_fields); $i++){
  			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
  		}
  	?>
  	</ul>

  	<h2><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></h2>

  </section>
</body>
