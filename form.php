<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'engreaves.com' // Put you mail domain here
	,
	'Web Design Principles' // Put your site name / form name here
	,
	'egreaves@ufl.edu' // Where will the form notification be sent?
	,
	'noreply@engreaves.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
