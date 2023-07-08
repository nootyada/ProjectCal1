<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div>
            <p class="fs-1 bg bg-primary text-white mt-3 p-3">โปรแกรมคำนวณหาสี่เหลี่ยม</p>
        </div>

        <form action="Ex3.php" method="GET">

        <div  class="row ">
                <div class="col">
                    <div class="col">
                        <label form="widht" class="form-label">ความกว้าง</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class=" form-control" id="widht" name="widht" value=""/>
                    </div>  

                    <div class="col">
                        <label form="height" class="form-label">ความสูง</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class=" form-control" id="height" name="height" value=""/>
                    </div>
                    <div  class="row mt-3">
                        <div class="col-6">
                            <input type="submit" class="btn btn-primary cal-3" id="cal" name="cal" value="คำนวณ"/>
                        </div>
                    </div>
                 </div>



            <div class="col">
                <?php
                $w = $_GET['widht'];
                $h = $_GET['height'];

                $area = $w * $h;

                ?> 
            
                <div class="row justify-content-around">
                    <div class="col-3 alert alert-warning  " role="alert">
                        <?php
                            echo "ความกว้าง = ".$w ."เซนติเมตร <br>";
                            echo  "ความสูง = ".$h ."เซนติเมตร <br>";
                        ?>
                    </div>
            
                    <div class="col-3 alert alert-danger " role="alert">
                        <?php
                            echo  "พื้นที่สี่เหลี่ยมพื้นผ้า = ".$area ."ตารางเซนติเมตร";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        </form>
        
    </div>
   

</body>
</html>

