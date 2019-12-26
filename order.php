<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

</head>
<nav>

  <div id="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="product.php">Product</a></li>
      <li><a href="order.php">Order</a></li>
      <li><a href="report.php">Report</a></li>
      <li><a href="login.php">Log Out</a></li>
    </ul>
  </div>
</nav>

<body>
  <form class="order-form">
    <h1>Order</h1>
    <div class="txto">
      <input type="text">
      <span data-placeholder="Order ID"></span>
    </div>
    <div class="txto">
      <input type="text">
      <span data-placeholder="Customer Name"></span>
    </div>  
    <div class="txto">
      <input type="date">
      <span data-placeholder=""></span>
    </div>
    <div class="txto">
      <input type="text">
      <span data-placeholder="Product ID"></span>
    </div>
    <div class="txto">
      <input type="text">
      <span data-placeholder="Quantity"></span>
    </div>
    <div class="txto">
      <input type="text">
      <span data-placeholder="Price"></span>
    </div>
    
    <input type="submit" class="btnadd" value="Add Order">
  </form>
<form class="orderde-form">
  <table border="1" width="410">
    <tr>
      <th>Order ID</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
    <tr>
      <td>1</td>
      <td>2</td>
      <td>228.00$</td>
  </tr>
  </table>
</form> 

  <script type="text/javascript">
    $(".txto input").on("focus", function () {
      $(this).addClass("focus");
    });

    $(".txto input").on("blur", function () {
      if ($(this).val() == "")
        $(this).removeClass("focus");
    });

  </script>



</body>

</html>