<html>
    <head>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> 
    </head>
<style>
.grijs {
	margin-left:auto;
	margin-right:auto;
    max-width: 500px;
    background: #F7F7F7;
    padding: 25px 15px 25px 10px;
    font: 12px Georgia, "Times New Roman", Times, serif;
    color: #888;
    text-shadow: 1px 1px 1px #FFF;
    border:1px solid #E4E4E4;
    border-radius:100px;
}
.grijs h1 {
    font-size: 25px;
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom:1px solid #E4E4E4;
    margin: -10px -15px 30px -10px;;
    color: #888;
}
.grijs h1>span {
    display: block;
    font-size: 11px;
}
.grijs label {
    display: block;
    margin: 0px;
}
.grijs label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    color: #888;
}
.grijs input[type="text"], .grijs input[type="email"], .grijs textarea, .grijs select {
	border: 1px solid #DADADA;
	color: #888;
	height: 30px;
	margin-bottom: 16px;
	margin-right: 6px;
	margin-top: 2px;
	outline: 0 none;
	padding: 3px 3px 3px 5px;
	width: 70%;
	font-size: 12px;
	line-height:15px;
	box-shadow: inset 0px 1px 4px #ECECEC;
	-moz-box-shadow: inset 0px 1px 4px #ECECEC;
	-webkit-box-shadow: inset 0px 1px 4px #ECECEC;
}
.grijs textarea{
	padding: 5px 3px 3px 5px;
}
.grijs select {
    background: #FFF;
    background: #FFF;
    appearance:none;
    -webkit-appearance:none; 
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
	line-height: 25px;
}
.grijs textarea{
    height:100px;
}
.grijs .button {
	background: #E27575;
	border: none;
	padding: 10px 25px 10px 25px;
	color: #FFF;
	box-shadow: 1px 1px 5px #B6B6B6;
	border-radius: 3px;
	text-shadow: 1px 1px 1px #9E3F3F;
	cursor: pointer;
}
.grijs .button:hover {
    background: #CF7A7A
}

 { margin: 0; padding: 0; }

body { 
    background: url('img/sinterklaas-achtergrond.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
<body>
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Verlanglijst</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="/list">Home <span class="sr-only">(current)</span></a></li>
                      <li><a href="/about">About</a></li>
                      <li><a href="/contact">Contact</a></li>
                    </ul>
                 
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="/register">Login / Register</a></li>
        
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>  
<form action="form2_get.php" method="post" class="grijs">
    <span><div align="center"><h1>Contact us</h1></div></span>
    	<span><div align="center">Please fill in all required fields</div></span><br/>
    <label>
    	<span>Your name</span>
        <input id="name" type="text" name="name" placeholder="Fill in your name please" />
    </label>
    
    <label>
    	<span>Your e-mailaddress:</span>
        <input id="email" type="email" name="email" placeholder="Valid e-mailaddress" />
    </label>
    
    <label>
    	<span>Your message</span>
        <textarea id="message" name="message" placeholder="Enter your message"></textarea>
    </label>    
     <label>
    	<span> </span> 
        <input type="submit" class="button" value="Verstuur" /> 
    </label>    
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $vakken = $_REQUEST['message'];
    if (empty($message)) {
        echo "Your message is required";
    } 
    $email = $_REQUEST['email'];
    if (empty($email)) {
        echo "<br/>Your e-mail is required";
    } 
    $leraarnaam = $_REQUEST['name'];
    if (empty($name)) {
        echo "<br/>Leraarnaam invullen is verplicht";
    } 
}

?>
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>