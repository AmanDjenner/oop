<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Forma in OOP si CRUD</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
            <h1 class="text-center">Forma in OOP si CRUD</h1>
    <hr style="heght: 1px; color: black; background-color: black;">
            </div>

            <div class="row">
                <div class="col-md-5 mx-auto">
                <form action="" method="post" id="form">
                <div id="result"></div>
                    <div class="form-group">
                        <label for="">Titlu</label>
                        <input type="text"  id="title" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="">Descriere</label>
                    <textarea name="description" id="description" cols="" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                    <br>
                    <button type="submit"  id="submit" class="btn btn-outline-primary">Adauga</button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
<script>
$(document).on("click", "#submit", function(e){
    e.preventDefault();
    let title = $("#title").val();
    let description = $("#description").val();
    let submit = $("#submit").val();

    $.ajax({
        url:"insert.php",
        type: "post",
        data: {
            title:title,
            description:description,
            submit:submit
        },
        success: function(data){
            $("#result").html(data);
        }
    });
    $("form")[0].reset();
});
</script>
  </body>
</html>