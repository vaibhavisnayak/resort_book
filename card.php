<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body style="background:black; color:white;">
<center>
<h2>card payment</h2>
<div class="container">
              <form action="spay.php">
                <div class="row">
                  <div class="col">
</div><br><br>


<div class="inputBox">
  <label for="cardname">
    name on card:</label>
    <input type="text" id="cardname" placeholder="enter card name" required>
</div>
<br><br>
    <div class="inputBox">
  <label for="cardnum">
    card number:</label>
    <input type="text" id="cardnum" placeholder="1111-2222-3333-4444" maxlength="19" required>
</div>
<br><br>
<div class="inputBox">
  <label for="">
    exp year:</label>
    <select name="" id="" required>>
      <option value="">choose year</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
      <option value="2026">2026</option>
      <option value="2027">2027</option>

</select>
</div>
<br><br>
<div class="inputBox">
  <label for="cvv">
    cvv:</label>
    <input type="number" id="cvv" placeholder="1234"  required>
</div>
<br><br>
</div>
<br>
</div>
<br>
</div>
<br>
<input type="submit" value="proceed to checkout" class="submit_btn">
</form>
<center>
</body>
</html>