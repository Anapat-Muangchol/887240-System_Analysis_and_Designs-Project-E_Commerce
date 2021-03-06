<!DOCTYPE html>
<html lang="en">
<head>
    <title>รายละเอียดของสินค้า</title>
    <!--CSS, Bootstrap-->
    <?php require("../../bin/header.php"); ?>
    <!--/CSS, Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>

        $(document).ready(function(){

            $(".star.glyphicon").click(function() {
                $(this).toggleClass("glyphicon-star glyphicon-star-empty");
            });

        });


    </script>

</head>

<body class="web-bg">
<!--แถบบาร์ข้างบน Navbar-->
<?php require("../../bin/navbar.php"); ?>
<!--/แถบบาร์ข้างบน Navbar-->

<div class="container-fluid">
    <div class="row">
        <!--โลโก้เว็บ-->
        <div class="col-sm-2">
            <?php require("../../bin/logo.php"); ?>
        </div>
        <!--/โลโก้เว็บ-->
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12">
                    <!--ช่องค้นหา พร้อมปุ่มกด-->
                    <?php require("../../bin/searchBox.php"); ?>
                    <!--/ช่องค้นหา พร้อมปุ่มกด-->
                </div>
            </div>
            <div class="row">
                <!--ประเภทสินค้ายอดนิยม-->
                <?php //require("../../bin/popularProduct.php"); ?>
                <!--/ประเภทสินค้ายอดนิยม-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <!--เมนูกดเลือกประเภทสินค้า-->
            <?php require("../../bin/categoryMenu.php"); ?>
            <!--/เมนูกดเลือกประเภทสินค้า-->
        </div>
        <!-- ทำงานที่นี่ -->
        <div class="col-sm-8">
            <div class="panel panel-danger">
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <!--รูป-->
                            <div class="row">
                                <div class="col-sm-8">
                                    <br><br><img src="https://pbs.twimg.com/profile_images/583490137385902081/3LoMyqH9.jpg" class="img-responsive">
                                </div><br><br>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="https://pbs.twimg.com/profile_images/583490137385902081/3LoMyqH9.jpg" class="img-responsive">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="https://pbs.twimg.com/profile_images/583490137385902081/3LoMyqH9.jpg" class="img-responsive">
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="https://i.ytimg.com/vi/bMbW4VSHpEg/maxresdefault.jpg"  class="img-responsive">
                                </div>
                                <div class="col-sm-4">
                                    <img src="https://pbs.twimg.com/profile_images/583490137385902081/3LoMyqH9.jpg" class="img-responsive">
                                </div>
                                <div class="col-sm-4">
                                    <img src="https://pbs.twimg.com/profile_images/583490137385902081/3LoMyqH9.jpg" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <h2>รถไฟไทย สไตล์วินเทจ&nbsp;&nbsp;<span class="star glyphicon glyphicon-star-empty"></span></h2>
                            <h5><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp&nbspพัทยา ,ชลบุรี</h5>
                            <h5>ของแบบนี้ไม่มีขายที่ไหนหรอกนอกจากที่นี่เท่านั้น!!</h5><br><br><br>
                            <h5><i class="fa fa-tags" aria-hidden="true"></i>&nbsp&nbspราคา</h5>
                            <h3 style="color:red;">200,000,000,000 บาท</h3>
                            <h5><i class="fa fa-user" aria-hidden="true"></i>&nbsp&nbspธนโชติ หนวดเฟิ้ม</h5>
                            <h5><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp&nbsp089-999-9999</h5>
                            <h5><b>L</b> : tanachot</h5>
                            <h5><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbsptanachot</h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- สินค้าทั่วไป -->
            <?php require("../../bin/commonProduct.php"); ?>
            <!-- /สินค้าทั่วไป -->
        </div>
        <!-- /ทำงานที่นี่ -->
        <div class="col-sm-2">
            <!--แสดงสินค้าแนะนำ-->
            <?php require("../../bin/recommendProduct.php"); ?>
            <!--/แสดงสินค้าแนะนำ-->
        </div>
    </div>
    <?php require("../../bin/footer.php"); ?>
</body>
</html>
