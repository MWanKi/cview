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
    </div>
<?php include('footer.php') ?>