

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Generátor pizzy</h1>

 <form action="submit4.php" method="post">
     <h2>Typ těsta</h2>
     <input type="radio" name="paste" id="gluten-free" value="gluten-free">
     <label for="gluten-free">Bezlepkové</label>
     
     <input type="radio" name="paste" id="normal" value="normal">
     <label for="normal">Normální</label>
     
     <br>
     <br>
     <h2>Přílohy</h2>
     <input type="checkbox" name="ham" id="ham">
     <label for="ham">Šunka</label>

     
     <input type="checkbox" name="cheese" id="cheese">
     <label for="cheese">Sýr</label>

     <input type="checkbox" name="olives" id="olives">
     <label for="olives">Olivy</label>

    <input type="checkbox" name="tuna" id="tuna">
    <label for="tuna">Tuňák</label>

    <input type="checkbox" name="sausage" id="sausage">
    <label for="sausage">Salám</label>

    <input type="checkbox" name="garlic" id="garlic">
    <label for="garlic">Česnek</label>

    <input type="checkbox" name="bacon" id="bacon">
    <label for="bacon">Slanina</label>

    <input type="checkbox" name="pineapple" id="pineapple">
    <label for="pineapple">Ananas</label>

    <input type="checkbox" name="corn" id="corn">
    <label for="corn">Kukuřice</label> 

     
     <br>
     <br>
     <input type="submit" name="submit" value="Objednat pizzu">
 </form>

</body>
</html>