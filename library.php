<?php
require __DIR__ . './database/database.php';

$query = $db->query('SELECT * from books');
$books = $query->fetchALL();

$style = "header";
$title = "Bibliothèque";
@include './header.php'
?>

<body>
    <table class="table">
        <thead>
            <?php
            echo '<tr><th scope="col">Titre</th><th scope="col">Auteur</th><th scope="col">Année</th><th>Disponible</th><th scope="col">Type</th><th scope="col">Langue</th><th scope="col">Support</th></tr></thead><tbody>';
            foreach ($books as $book) {
                echo '<tr><th scope="row">' . utf8_encode($book['title']) . '</th><td>' . utf8_encode($book['author']) . '</td><td>' . utf8_encode($book['year']) . '</td><td>' . utf8_encode($book['available']) . '</td><td>' . utf8_encode($book['type']) . '</td><td>' . utf8_encode($book['language']) . '</td><td>' . utf8_encode($book['support']) . '</td></tr>';
            }
            ?>
            </tbody>
    </table>

</body>

</html>