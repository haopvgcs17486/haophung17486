<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

      <form action="login.php" class="regis-form">
        <h1>Registration</h1>

        <div class="txtb">
          <input type="text">
          <span data-placeholder="ID"></span>
        </div>

        <div class="txtb">
          <input type="password">
          <span data-placeholder="Password"></span>
        </div>

        <div class="txtb">
            <input type="text">
            <span data-placeholder="Phone Number"></span>
        </div>

        <div class="txtb">
            <input type="text">
            <span data-placeholder="Address"></span>
        </div>
        <input type="submit" class="regbtn" value="Registration">

      

      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>
