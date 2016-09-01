<div class="wrap-ai easing">
    <h2>AI함</h2>

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
                        <input type="checkbox" name="" id="check<?=$i?>">
                        <label class="type2" for="check<?=$i?>"></label>
                    </div>
                </li>

                <?php } ?>
            </ul>
        </div>

    <a href="#" class="btn-close-ai">닫기</a>
    <div class="box-notice">
        <p class="txt-notice">2개의 타스크가 삭제되었습니다.</p>
        <a class="btn-rollback" href="#">취소</a>
    </div>
    <div class="box-ai-shortcut">
        <ul>
            <li class="li-task-delete"><a href="">바로 삭제</a></li>
            <li class="li-task-confirm"><a href="">타스크 확정</a></li>
        </ul>
    </div>
</div>