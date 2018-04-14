<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <style>
      body{
        background-image: url("images/sortinghat.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100; 
      }
      .mar123{
        margin-top: 7%;
      }
    </style>
  </head>
  <body background="images/sortinghat.jpg">
    <center class="container col-md-6 col-md-offset-3 mar123">
      <form action="sorting.php" method="post">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Question 1
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <div class="row"> Which of the following would you most hate people to call you?</div><br>
              <div class="row">
                <div class="col-md-3"><input type="radio" name="answer1" id="optionsRadios1" value="1" >Ordinary</div>
                <div class="col-md-3"><input type="radio" name="answer1" id="optionsRadios1" value="2" >Cowardly</div>
                <div class="col-md-3"><input type="radio" name="answer1" id="optionsRadios1" value="3" >Ignorant</div>
                <div class="col-md-3"><input type="radio" name="answer1" id="optionsRadios1" value="4" >Selfish</div>
              </div><br>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Question 2
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <div class="row">Which one of these would you like to have as a pet?</div><br>
              <div class="row">
                <div class="col-md-3"><input type="radio" name="answer2" id="optionsRadios1" value="1" >Snake</div>
                <div class="col-md-3"><input type="radio" name="answer2" id="optionsRadios1" value="2" >Owl</div>
                <div class="col-md-3"><input type="radio" name="answer2" id="optionsRadios1" value="3" >Parrot</div>
                <div class="col-md-3"><input type="radio" name="answer2" id="optionsRadios1" value="4" >Neither</div>
              </div><br>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Question 3
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="row">What is one of your worst traits ?</div><br>
            <div class="row">
              <div class="col-md-3"><input type="radio" name="answer3" id="optionsRadios1" value="1" >Arrogance</div>
              <div class="col-md-3"><input type="radio" name="answer3" id="optionsRadios1" value="2" >Recklessness</div>
              <div class="col-md-3"><input type="radio" name="answer3" id="optionsRadios1" value="3" >Introvert</div>
              <div class="col-md-3"><input type="radio" name="answer3" id="optionsRadios1" value="4" >Too Humble</div>
            </div><br>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Question 4
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="row">Which portion would you choose ?</div><br>
            <div class="row">
              <div class="col-md-3"><input type="radio" name="answer4" id="optionsRadios1" value="1" >Glory</div>
              <div class="col-md-3"><input type="radio" name="answer4" id="optionsRadios1" value="2" >Power</div>
              <div class="col-md-3"><input type="radio" name="answer4" id="optionsRadios1" value="3" >Wisdom</div>
              <div class="col-md-3"><input type="radio" name="answer4" id="optionsRadios1" value="4" >Love</div>
            </div><br>

          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Question 5
              </a>
            </h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="row">After-death remembrance ?</div><br>
            <div class="row">
              <div class="col-md-3"><input type="radio" name="answer5" id="optionsRadios1" value="1" >Opinions don't matter.</div>
              <div class="col-md-3"><input type="radio" name="answer5" id="optionsRadios1" value="2" >Stories of my adventures.</div>
              <div class="col-md-3"><input type="radio" name="answer5" id="optionsRadios1" value="3" >Thinking of my achievements</div>
              <div class="col-md-3"><input type="radio" name="answer5" id="optionsRadios1" value="4" >Miss you and Smille</div>
            </div><br>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSix">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Question 6
              </a>
            </h4>
          </div>
          <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="row">Which instrument would you like to play ?</div><br>
            <div class="row">
              <div class="col-md-3"><input type="radio" name="answer6" id="optionsRadios1" value="1" >Trumpet</div>
              <div class="col-md-3"><input type="radio" name="answer6" id="optionsRadios1" value="2" >Drums</div>
              <div class="col-md-3"><input type="radio" name="answer6" id="optionsRadios1" value="3" >Piano</div>
              <div class="col-md-3"><input type="radio" name="answer6" id="optionsRadios1" value="4" >Violin</div>
            </div><br>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingSeven">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Question 7
              </a>
            </h4>
          </div>
          <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="row">Which power you wish you had ?</div><br>
            <div class="row">
              <div class="col-md-3"><input type="radio" name="answer7" id="optionsRadios1" value="1" >Change my past</div>
              <div class="col-md-3"><input type="radio" name="answer7" id="optionsRadios1" value="2" >Super Strength</div>
              <div class="col-md-3"><input type="radio" name="answer7" id="optionsRadios1" value="3" >Read Minds</div>
              <div class="col-md-3"><input type="radio" name="answer7" id="optionsRadios1" value="4" >Talk to animals.</div>
            </div><br>
            <input type="submit"><br><br>
          </div>
        </div>
      </div>
      </form>
    </center>
  </body>
</html>


<?php

@SESSION_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];

$conn=mysql_connect("localhost","root","");	

mysql_select_db("Project1") or die(mysql_error());


	$ans[1] = $_POST['answer1'];
	$ans[2] = $_POST['answer2'];
	$ans[3] = $_POST['answer3'];
	$ans[4] = $_POST['answer4'];
	$ans[5] = $_POST['answer5'];
	$ans[6] = $_POST['answer6'];
	$ans[7] = $_POST['answer7'];
	//print_r($ans);
	$countSlytherin = 0; 	//1
	$countGryffindor = 0;	//2
	$countRavenclaw = 0; 	//3
	$countHufflepuff = 0; 	//4
	//echo "<br>";
	foreach ($ans as $value){ 
		if ($value == "1") { $countSlytherin++; }
		elseif ($value == "2") { $countGryffindor++; }
		elseif ($value == "3") { $countRavenclaw++; }
		else { $countHufflepuff++; }
	}

	//Count acquired

	//Check
	$result[1] = $countSlytherin;
	$result[2] = $countGryffindor;
	$result[3] = $countRavenclaw;
	$result[4] = $countHufflepuff;
	//print_r($result);
	//echo "<br>";
	rsort($result);
	//print_r($result);
	//echo "<br>";

	if($result[0] == $countSlytherin) {
		$sql = "UPDATE  userinfo SET HOUSE = 'Slytherin' WHERE Username LIKE '".$username."' AND Password LIKE '".$password."';";
		//echo $sql;
		$query=mysql_query($sql,$conn);
		header("location:slytherin.phpl");
	}
	if($result[0] == $countGryffindor) {
		$sql="UPDATE  userinfo SET HOUSE = 'Gryffindor' WHERE Username LIKE '".$username."' AND Password LIKE '".$password."';";
		//echo $sql;
		$query=mysql_query($sql,$conn);
		header("location:gryffindor.php");
	}
	if($result[0] == $countRavenclaw) {
		$sql="UPDATE  userinfo SET HOUSE = 'Ravenclaw' WHERE Username LIKE '".$username."' AND Password LIKE '".$password."';";
		$query=mysql_query($sql,$conn);
		//echo $sql;
		header("location:ravenclaw.php");
	}
	if($result[0] == $countHufflepuff) {
		$sql="UPDATE  userinfo SET HOUSE = 'Hufflepuff' WHERE Username LIKE '".$username."' AND Password LIKE '".$password."';";
		$query=mysql_query($sql,$conn);
		//echo $sql;
		header("location:hufflepuff.php");
	}



?>
