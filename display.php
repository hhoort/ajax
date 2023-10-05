<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<center><h1>(form for users)</h1></center>
<div class="container" >
<form action="" id="form">
<div class="mb-2">
    <label for="" class="form-label">name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
</div>
<div class="mb-2">
    <label for="" class="form-label">email</label>
    <input type="email" name="email"class="form-control" id="email" aria-describedby="emailHelp">
</div>
<div class="mb-2">
    <label for="" class="form-label">phone</label>
    <input type="text" name="phone"class="form-control" id="phone" aria-describedby="emailHelp">
</div>



<!-- 
loaddata();
    $('submit').click(function(){
        $.ajax({
            url : 'insert.php',
            type: 'POST',
            data: $('#form input').serialize(),
            success : function(data){
                console.log(data);
                loaddata();
            }
        })
    }) -->


</form>

    
</div>
<center><h1>(users data)</h1></center>

<br><br>

<button type="submit" class="btn btn-primary" id="btn">Submit</button>
<table class="table table-info">
  <thead>
    <tr >
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody id="tab">
    <tr>
     
    </tr>
  </tbody>
</table>



<script src="js/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function(){
    let table = $('#tab');
    $('#btn').click(function(){
        $.ajax({
            url : 'fetch.php',
            type: 'POST',
            success : function(data){
                console.log(data)
                table.html(data)
            }
        })
    })
})



</script>
</body>
</html>
