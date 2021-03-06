<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!--    Bootstrap css-->
<!--    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/stylesIndex.min.css" rel="stylesheet" type="text/css">

<!--    fontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->

    <div class="container">
        <i class="fas fa-list-ul fa-2x"></i>
        <h1>To-do App</h1>

        <div id="inputArea">
            <input type="text" placeholder="New item...">
            <button><i class="fas fa-pencil-alt"></i></button>
        </div>

        <ul id="toDoList"></ul>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>-->
<script type="module" src="js/app.js">

    document.querySelectorAll(".box > h1").forEach((box) => {
        box.textContent = "New text";
    });

</script>
</body>
</html>