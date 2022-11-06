<html>
    <body>
        <form action="">
            masukan nilai 1 <input type="text" name="var1"><br>
            masukan nilai 2 <input type="text" name="var2"><br>
            <input type="submit" name="tombol" value="tampil"><br>
            <input type="submit" name="tombol" value="jumlah"><br>
            <input type="submit" name="tombol" value="bagi"><br>
            <?php
                if ($_GET['tombol']=='tampil'){
                    $a =$_GET['var1'];
                    echo "data ditampilkan $a atau ".$_GET['var1'];
                }
                if($_GET['tombol']=='jumlah'){
                    $a = $_GET['var1'];
                    $b = $_GET['var2'];
                    $total = $a+$b;
                    echo "hasil jumlah <br>$a +$b = $total";
                }
                if($_GET['tombol']=='bagi'){
                    echo "hasil bagi ".($_GET['var1']/$_GET['var2']);
                }
            ?>
        </form>
    </body>
</html>