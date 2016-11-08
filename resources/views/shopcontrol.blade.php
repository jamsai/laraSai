<!DOCTYPE html>
<html>
<body>
  <head>point management system</head>
  <form action='addPointGET' method='get'>
    <label>
      CustomerID:
      <input = name='customerID' type='text'>
    </label>
    <br>
    <label>
      Point to add
      <input = name='point' type='text'>
    </label>
    <br>

    <input type='submit'>
  </form>
  <br>
  <form action='removePointGET' method='get'>
    <label>
      CustomerID:
      <input = name='customerID' type='text'>
    </label>
    <br>
    <label>
      Point to remove
      <input = name='point' type='text'>
    </label>
    <br>
    <input type='submit'>
  </form>



  <br><br><br>
  <head>Create promotion</head>
  <form action='submitpromotion' method='get'>
    <label>
      promotionName:
      <input = name='promotionName' type='text'>
    </label>
    <br>
    <label>
      description:
      <input = name='description' type='text'>
    </label>
    <br>
    <br>
    <label>
      issueBy:
      <input = name='issueBy' type='text'>
    </label>
    <br>
    <br>
    <label>
      value:
      <input = name='value' type='text'>
    </label>
    <br>
    Enter a expired date
    <input type="date" name="bday" min="2000-01-02">
    <br>
    <input type='submit'>
  </form>

  <br><br><br>
  <head>Generate promocode</head>
  <form action='generateRedeemCode' method='get'>
    <br>
    <label>
      value:
      <input = name='amoutOfRedeemValue' type='text'>
    </label>
    <br>
    <input type='submit'>
  </form>
</body>
</html>
