<?php
if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $text = $_POST['phone'];
 $rating = $_POST['text'];
// load previous XML from file
 $xml = simplexml_load_file("./data/feedback.xml") or die("ERROR: Cannot
load feedback.xml.");

 // add a new feedback node
 $feedback = $xml->addChild('feedback');

 // add form data to XML
 $feedback->addChild('name', $name);
 $feedback->addChild('email', $email);
 $feedback->addChild('phone', $phone);
 $feedback->addChild('text', $text);
// save the whole modified XML
 $xml->asXml('./data/feedback.xml');
  // Display thank you
 header("Location: ../thankyou.html");
} else {
 // nothing happened -- go back to feedback form
 header("Location: ../Index.html");
}
?>