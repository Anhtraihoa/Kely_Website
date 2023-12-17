<!-- bắt đầu navbar -->
        <nav class="navbar navbar-expand-md navbar-light p-0" style="background-color:red;">
        <div class="container">                                   
                    <form class="navbar-form navbar-left" action="index.php?a=8<?php 
                        $str = "";
                         if(isset($_GET['idMaHangSanXuat']))
                            $str = "&idMaHangSanXuat=".$_GET['idMaHangSanXuat'];
                        if(isset($_GET['idLoai']))
                            $str = $str."&idLoai=".$_GET['idLoai'];
                        if(isset($_GET['Min']) && isset($_GET['Max']))
                            $str = $str."&Min=".$_GET['Min']."&Max=".$_GET['Max'];
                        echo $str;  
                    ?>" method="post" style="background-color: red; flex:2;">
                    <div class="input-group mt-1" style="align-items:center; ">
                    <a class="navbar-brand ml-1 mr-1"  href="index.php"><img style="width:50px" src="img/Kely_logo_no_bg.svg" alt="logo"></a>
                        <input type="text" class="resize ml-1" placeholder="Tìm sản phẩm" name="search">
                        <button  class=" resizesearch" type="submit">
                        <svg viewBox="0 0 24 24" fill="none" width="20px" height="20px" xmlns="http://www.w3.org/2000/svg">
								<path d="M10.9999 19C15.4182 19 18.9999 15.4183 18.9999 11C18.9999 6.58172 15.4182 3 10.9999 3C6.5816 3 2.99988 6.58172 2.99988 11C2.99988 15.4183 6.5816 19 10.9999 19Z" stroke="#111111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M20.9999 21L16.6499 16.65" stroke="#111111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
                        </button>
                    </div>
                    </form>                                   
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-lg-0 menunavbar">
                    <li class="nav-item">
                        <a class="nav-link p-0 text-center" href="#">
                            <div id="icontuvan"></div>
                            <span class="iconnav">TƯ VẤN</span>
                      
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link p-0 text-center" href="#">
                            <div id="icontintuc"></div>
                            <span class="iconnav">TIN TỨC</span>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link p-0 text-center" href="#">
                            <div id="iconlaptop"></div>
                            <span  class="iconnav">LAPTOP</span>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link p-0 text-center" href="#">
                            <div id="iconpc"></div>
                            <span  class="iconnav">DESKTOP</span>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link p-0 text-center" href="#">
                            <div id="iconlinhkien"></div>
                            <span  class="iconnav">LINH KIỆN</span>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item border-right">
                        <a class="nav-link p-0 text-center" href="#">
                            <div id="iconkhuyenmai"></div>
                            <span  class="iconnav">KHUYẾN MÃI</span>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <?php
                        if(isset($_SESSION["MaTaiKhoan"]))
                        {
                            ?>
                                <li class="ml-2 menunguoidung text-center">
                                    <a class="nav-link pt-0" href="#">
                                        <div id="iconnguoidung"></div>
                                        <span class="sr-only">(current)</span>
                                    </a>

                                    <ul class="menutaikhoan">
                                        <li><a href="#">Thông tin cá nhân</a></li>
                                        <li><a href = "modules/xlDangXuat.php">Đăng xuất</a></li>    
                                    </ul>

                                    <span style="font-size: 14px; text-align: center;"><?php 
                                        if (strlen($_SESSION["TenHienThi"]) <= 10)
                                            echo $_SESSION["TenHienThi"];
                                        else
                                            echo substr($_SESSION["TenHienThi"], 0, 10)."..." ;
                                    
                                    ?></span>
                                </li>
                                
                            <?php
                        }
                        else
                        {
                            ?>
                                <li class="ml-2 menunguoidung">
                                    <a class="nav-link pt-0" href="#">
                                        <div id="iconnguoidung"></div>
                                        
                                        <span class="sr-only">(current)</span>
                                    </a>

                                    <ul class="menutaikhoan">
                                        <li><a href="index.php?a=7">Đăng nhập</a></li>
                                        <li><a href="index.php?a=6" onclick="showCustomer()">Đăng ký</a></li>
                                        <li><a href="#">Quên mật khẩu</a></li>
                                    </ul>
                                </li>
                            <?php
                        }
                    ?>
                    
                    


                    <li>
                        <a class="nav-link pt-0" href="<?php if(isset($_SESSION["MaTaiKhoan"])) echo "index.php?a=5" ?>" >
                            <div id="icongiohang"></div>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    
                    <!-- <li>
                        <a class="nav-link pt-0" href="#" style="background-color: red; font-weight: bold; color: white; text-align: center;">
                            199999
                            <span class="sr-only">(current)</span>
                        </a>
                    </li> -->

                    
    
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                </div>
                </nav>
        


    <!-- hết phần navbar -->
    <?php
        include "modules/mSlide.php";
    ?>
    <!-- kết thúc tìm kiếm nâng cao -->
