<?php
class News {
    private $connection;
    private $table;

    public function __construct($connection, $table) {
        $this->connection = $connection;
        $this->table = $table;
    }

    public function fetchData($column, $nullText) {
        // Сортировка по убыванию ID (новые записи первыми)
        $sql = "SELECT * FROM `$this->table` ORDER BY id DESC"; 
        $result = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row["$column"] . "</p>";
            }
        } else {
            echo "<p>На данный момент $nullText.</p>";
        }
    }
}
?>
