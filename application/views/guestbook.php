<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <style>
        
        
        
        fieldset
        {
            display: block;
            padding-top: 0.35em;
            padding-bottom: 0.625em;
            padding-left: 0.75em;
            padding-right: 0.75em;
            width: 30%;
        }
    </style>

<title>Księga Gości</title>
</head>
<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1>Księga Gości</h1>
        <p>Poniżej możesz wpisać się do księgi Gości</p>
    </div>
    
<?php if( $posted == true ) echo '<div class="alert alert-success">
                                  <strong>Sukces!</strong> Twój komentarz został dodany.
                                  </div>'; 

?>
<?php
echo '<ul>';
foreach( $entries as $entry )
{
	echo '<li><strong>Komentarz gościa: '.$entry['name'].'</a><br><a href="mailto:'.$entry["email"].'">'.$entry['email'].'</a></strong><br><p>'.$entry['comment'].'</p></li>';
}
echo '</ul>';
?>
<form method="post" action="">
<fieldset>
	<legend>Wpisz się do listy gości</legend>
        <lable>Imię</label><input type="text" name="name" class="form-control" placeholder="Podaj imie"><br>
        <label>E-mail</label><input type="text" name="email" class="form-control" placeholder="Podaj E-Mail"><br>
        <label>Komentarz</label><textarea name="comment" class="form-control" rows="5" placeholder="Napisz komentarz"></textarea> 
        <input type="submit" name="submit" value="DODAJ" class="btn-primary">
</fieldset>
</form>
</div>
</body>
</html>