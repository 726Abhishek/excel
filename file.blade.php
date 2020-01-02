<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>File Upload</title>
</head>
<body>
    <div class="container">
        <div class="row1">
            <form>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </form>
        </div>
        <div class="row2">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio" name="type" value="customEx" />
                <label class="custom-control-label" for="customRadio">Insert</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio2" name="type" value="customEx" />
                <label class="custom-control-label" for="customRadio2">Fetch</label>
            </div>
        </div>
        <div class="row3">
            <button type="button" class="btn btn-danger" id="reset"><i class="fas fa-redo-alt"> Reset</i></button>
            <button type="button" class="btn btn-primary" id="upload"><i class="fas fa-upload">Upload</i></button>
        </div>
    </div>
</body>
<style>
    .container{
        width: auto;
        padding: 30px 30px 40px 30px;
        box-shadow: 1px 1px 15px grey;
        border-radius: 5px;
        border: 1px solid grey;
    }
    div{
        margin-top: 10px;
    }
    .row3{
        margin-top: 20px;
    }
    #reset{
        box-shadow: 2px 2px 5px grey;
    }
    #upload{
        box-shadow: 2px 2px 5px grey;
        float: right;
    }
</style>
<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").html(fileName);
    });

    $("#reset").on("click",function(){
       $(".custom-file-label").html("Choose file") ;         
    });
</script>
