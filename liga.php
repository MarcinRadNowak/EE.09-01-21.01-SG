<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h3>Reprezentacja Polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </header>
    <aside id="left">
        <form action="" method="post">
        <select id="kadra" name="kadra">
        <option value="1">Bramkarze</option>
        <option value="2">Obrońcy</option>
        <option value="3">Pomocnicy</option>
        <option value="4">Napastnicy</option>
  </select>
  <input type="submit" value="Zobacz">
        </form>
        <img src="zad2.png" alt="piłka">
        <p>Autor: MN PESEL: 00000</p>
    </aside>
    <aside id="right">
        <ol>
            <?php
             $conn = mysqli_connect('localhost', 'root', '', 'kadra');
            @$opcja=$_POST['kadra'];
             $zapytanie = "select imie, nazwisko from zawodnik where pozycja_id='$opcja'";
             $result = mysqli_query($conn, $zapytanie); 
             while ($row = mysqli_fetch_assoc($result)){
             echo '<li><p>'.$row['imie'].' '.$row['nazwisko'].'</p></li>';
            };
            ?>
        </ol>
    </aside>
    <main>
        <h3>Liga mistrzów   </h3>
    </main>
    <section>
        <?php
        $zapytanie2 = "select zespol, punkty, grupa from liga group by punkty desc";
        $result2 = mysqli_query($conn, $zapytanie2); 
        while ($row = mysqli_fetch_assoc($result2)){
        echo '<div class="container">'.'<div>'.'<h2>'.$row['zespol'].'</h2>'.'<h1>'.$row['punkty'].'<p>grupa: '.$row['grupa'].'</p>'.'</div>'.'</div>';
           };
        mysqli_close($conn)
        ?>
    </section>
</body>
</html>