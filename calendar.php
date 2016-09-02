<?php 
    $page_name = (int)date('m').'월';
?>
<?php include('header.php') ?>
    <div class="box-mainlist">
        <div class="box-data">
            <h3 class="head-data">
                <table>
                    <tr>
                        <td>일</td>
                        <td>월</td>
                        <td>화</td>
                        <td>수</td>
                        <td>목</td>
                        <td>금</td>
                        <td>토</td>
                    </tr>
                </table>
            </h3>
            <ul id="calendar">
                <li class="li-prev"> </li> 
                <li class="li-current"> </li>
                <li class="li-next"> </li>
            </ul>
        </div>   

        <div class="box-data">
            <h3 class="head-data">오늘, 월 <a class="btn-trans-week" href="#"></a></h3>
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
                        <label class="type1" for=""></label>
                    </div>
                </li>

                <?php } ?>
            </ul>
        </div>
    </div>
<?php include('footer.php') ?>