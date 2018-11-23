<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Wishlist project</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />  
  </head>
<style> 
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
<br>
<div class="panel panel-default">
  <div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        <div class="panel-body">
Make your own wishlist for Christmas. Add, modify or delete the changes that you want.
</div>
</div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Laravel Wishlist project <a href="#" class="pull-right" id="addNew" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
  </div>
  <div class="panel-body" id="items">
  <ul class="list-group">
    @foreach ($items as $item)
  <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">{{$item->item}}
  <input type="hidden" id="itemId" value="{{$item->id}}"">
  </li>
  @endforeach

</ul>
  </div>

  </div>
</div> 

<div class="col-lg-2">
  <input type="text" class="form-control" name="searchItem" id="searchItem" placeholder="Search">
</div> 

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="title">Add New item</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="id">
        <p><input type="text" placeholder="Write Item Here" id="addItem" class="form-control"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display:none">Delete</button>
        <button type="button" class="btn btn-primary" id="saveChanges" data-dismiss="modal" style="display:none">Save changes</button>
        <button type="button" class="btn btn-primary" id="AddButton" data-dismiss="modal">Add Item</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  </div>
</div>

{{csrf_field()}}
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
$("document").ready(function(){
  $(document).on('click', '.ourItem', function(event) {
  var text= $(this).text();
  var id=$(this).find('#itemId').val();
  $('#title').text('Edit item');
  var text = $.trim(text);
  $('#addItem').val(text);
  $('#delete').show('400');
  $('#saveChanges').show('400');
  $('#AddButton').hide('400');
  $('#id').val(id);
console.log(text);
});
$(document).on('click', '#addNew', function(event) {
  $('#title').text('Add New Item');
  $('#addItem').val("");
  $('#delete').hide('400');
  $('#saveChanges').hide('400');
  $('#AddButton').show('400');
});

$('#AddButton').click(function(event){
    var text=$("#addItem").val();
if (text=="") {
    alert ("Please type anything for item");
  } else {
$.post("list", {'text':text,'_token':$('input[name=_token]').val()}, function (data) {
    console.log(data);
$('#items').load(location.href + " #items");

  });
  }
});

$('#delete').click(function(event){
  var id= $("#id").val();
  $.post('delete', {'id':id,'_token':$('input[name=_token]').val()}, function(data){
      $('#items').load(location.href + " #items");
  console.log(data);

  });
});

$('#saveChanges').click(function(event){
  var id= $("#id").val();
  var value= trim ($("#addItem").val());

  $.post('update', {'id':id,'value':value,'_token':$('input[name=_token]').val()}, function(data){
     $('#items').load(location.href + " #items"); 
  console.log(data);

  });
});

$( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#searchItem" ).autocomplete({
      source: 'http://localhost:8000/search'
    });
  } );

});
</script>

<!-- Latest compiled and minified JavaScript -->

</body>

</html>