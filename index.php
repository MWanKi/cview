<?php 
    $page_name = '오늘함';
?>
<?php include('header.php') ?>
    <div class="box-mainlist">
        <div class="box-data">
            <h3 class="head-data">오늘, 월</h3>
            <ul class="ul-task">
                <?php for ($i=0; $i < 4; $i++) { ?>
                
                <li class="li-taskdata">
                    <div class="box-txt">
                        <a href="#">
                            <p class="tit-task">타스크 내용</p>
                            <ul class="ul-data">
                                <li class="li-date">2015년 12월 25일</li>
                                <li class="li-time">오후 3시 40분</li>
                                <li class="li-place">씨사이드코리아 본사</li>
                                <li class="li-member">손예진, 서인국, GD</li>
                            </ul>
                        </a>
                    </div>
                    <div class="box-check">
                        <input type="checkbox" name="" id="">
                        <label for=""></label>
                    </div>
                </li>

                <?php } ?>
            </ul>
        </div>

        <div class="box-data">
            <h3 class="head-data">마감일이 지난 작업</h3>
            <ul class="ul-task">
                <?php for ($i=0; $i < 4; $i++) { ?>
                
                <li class="li-taskdata">
                    <div class="box-txt">
                        <a href="#">
                            <p class="tit-task">타스크 내용</p>
                            <ul class="ul-data">
                                <li class="li-date">2015년 12월 25일</li>
                                <li class="li-time">오후 3시 40분</li>
                                <li class="li-place">씨사이드코리아 본사</li>
                                <li class="li-member">손예진, 서인국, GD</li>
                            </ul>
                        </a>
                    </div>
                    <div class="box-check">
                        <input type="checkbox" name="" id="">
                        <label for=""></label>
                    </div>
                </li>

                <?php } ?>
            </ul>
        </div>
    </div>
<?php include('footer.php') ?>