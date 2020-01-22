<?php require 'template-parts/header.php';?>
<body>
<?php require 'includes/svg-icon.php';?>
<section class="my-profile-main">
    <div class="left-sidebar">
        <?php require 'includes/logo-bar.php';?>
        <?php require 'includes/user-bar.php';?>
        <?php require 'includes/nav-bar.php';?>
    </div>
    <div class="my-profile-main-box">
        <div class="my-profile-content-top">
            <p>Мой профиль</p>
            <a href="logout.php">
                <svg class="control-panel-logout">
                    <use xlink:href="#LogoutIcon"></use>
                </svg>
            </a>
        </div>
        <div class="my-profile-main-info">
            <div class="my-profile-main-info-left">
                <div class="my-profile-main-info-left-top">
                    <div class="my-profile-main-info-left-top-first">
                        <div class="my-profile-main-info-photo">
                            <img src="includes/img_icons/<?php echo $image;?>">
                        </div>
                        <div class="my-profile-main-info-name">
                            <h4><?php echo $surname.' '.$name.' '.$lastname;?></h4>
                            <p><?php echo $role;?></p>
                        </div>
                    </div>
                    <div class="my-profile-main-info-left-top-second">
                        <a href="edit.php?id=<?php echo $id;?>" class="my-profile-main-info-left-top-second-left">
                            <svg class="svg-edit"><use xlink:href="#myProfileEdit"></use></svg>
                            <p>Редактировать</p>
                        </a>
                        <a href="#" class="my-profile-main-info-left-top-second-right">
                            <svg class="svg-edit"><use xlink:href="#myProfilePicture"></use></svg>
                            <p>Сменить фото</p>
                        </a>
                    </div>
                </div>
                <div class="my-profile-main-info-left-bottom">
                    <p>Моя реферальная ссылка</p>
                    <div class="my-profile-main-info-left-bottom-linkblock">
                        <div class="my-profile-main-info-link"><a id="copier" href="#"><?php echo $server.'/referal-link.php?id='.$id;?></a></div>
                        <div onclick="fnk()" id="click" class="my-profile-main-info-copylink">
                            <img src="img/copy.png" alt="">
                        </div>
                    </div>
                    <script>
                    function fnk(){
                          alert("Ваша реферальная ссылка скопирована в буфер обмена!");
                    	    var $temp = $("<input>");
                    	    $("body").append($temp);
                    	    $temp.val($('#copier').text()).select();
                    	    document.execCommand("copy");
                    	    $temp.remove();

                    }

                    </script>
                </div>
            </div> <!-- /.my-profile-main-info-left -->
            <div class="my-profile-main-info-right">
                <h4>Адрес</h4>
                <div class="my-profile-main-info-right-address">
                    <div class="main-info-address-item-left">
                        <svg class="svg-address"><use xlink:href="#myProfileFlag"></use></svg>
                        <p>Страна</p>
                    </div>
                    <div class="main-info-address-item-right"><?php echo $country;?></div>
                    <div class="main-info-address-item-left">
                        <svg class="svg-address"><use xlink:href="#myProfilePlaceHolder"></use></svg>
                        <p>Город</p>
                    </div>
                    <div class="main-info-address-item-right">г. <?php echo $city;?></div>
                    <div class="main-info-address-item-left">
                        <svg class="svg-address"><use xlink:href="#myProfileStreet"></use></svg>
                        <p>Улица</p>
                    </div>
                    <div class="main-info-address-item-right"><?php echo $street;?></div>
                    <div class="main-info-address-item-left">
                        <svg class="svg-address"><use xlink:href="#myProfileHotel"></use></svg>
                        <p>Здание</p>
                    </div>
                    <div class="main-info-address-item-right"><?php echo $house;?></div>
                    <div class="main-info-address-item-left">
                        <svg class="svg-address"><use xlink:href="#myProfileRoom"></use></svg>
                        <p>Квартира</p>
                    </div>
                    <div class="main-info-address-item-right"><?php echo $room;?></div>
                </div> <!-- /.my-profile-main-info-right-address -->
                <div class="main-info-address-contacts">
                    <h4>Контакты</h4>
                    <div class="main-info-contacts-box">
                        <div class="main-info-contacts-box-left">
                            <a href="tel:<?php echo $mobile;?>" class="main-info-contacts-phone">Тел: <?php echo $mobile;?></a>
                            <a href="mailto:<?php echo $email;?>" class="main-info-contacts-phone">Email:  <?php echo $email;?></a>
                        </div>
                        <div class="main-info-contacts-box-right">
                            <div class="main-info-contacts-box-right-block1">
                                <svg class="svg-contacts"><use xlink:href="#myProfilePackage"></use></svg>
                                <p><?php echo $buisness_product;?></p>
                            </div>
                            <div class="main-info-contacts-box-right-block2">
                                <svg class="svg-contacts"><use xlink:href="#myProfileInvitation"></use></svg>
                                <p> Space line</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.my-profile-main-info-right -->
        </div> <!-- /.my-profile-main-info -->
    </div> <!-- /.my-profile-main-box -->
</section>

</body>
</html>
