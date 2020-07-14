<!DOCTYPE html>
<html>
    
    <head>
        <title>ADMIN</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" type="text/css" />

        <link rel="stylesheet" href="./css/style.css" />
        <script src="./js/header.js"></script>
        <script src="http://oksusumarket.co.kr/js/COMMON.js"></script>

        <script>
			//javascript 전역 변수 설정		
			var URL			 = "http://oksusumarket.co.kr";
			var ADMIN_URL 	 = "http://oksusumarket.co.kr/admin";
			var INCLUDE_URL  = "http://oksusumarket.co.kr/include";
			var IMAGES_URL 	 = "http://oksusumarket.co.kr/uploads";
			var API_KEY		 = "123456789";
			
			//member infor
            var ADMIN_ID 	 = "";
            
            var w = COMMON.url.urlParameter("w") == "" ? null : COMMON.url.urlParameter("w");
        </script>  

    </head>

    <style>

    </style>

    <body>
        <div class="wrap">

            <div class="header">
                <div class="hd_img"><img src="./images/logo.jpg" alt=""></div>
                <div class="hd_menu_box">
                    <div class="hbm_menu">
                        <ul>
                            <li><a href="" class = "color_00c752">옥수수마켓 바로가기</a></li>
                            <li><a href="">admin</a></li>
                            <li class = "logout">로그아웃</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="content">

                <div class="left_content">
                    <div class="left_menu">
                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_1.png" alt="">
                                챠트
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">회원</a></li>
                                    <li><a href="#">주문</a></li>
                                </ul>#                          </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_2.png" alt="">
                                설정
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">관리자목록</a></li>
                                    <li><a href="#">카테고리</a></li>
                                    <li><a href="#">행정구역</a></li>
                                    <li><a href="#">수수료</a></li>
                                    <li><a href="#">옥수수 설명서</a></li>
                                    <li><a href="#">Aligo</a></li>
                                    <li><a href="#">HDD</a></li>
                                    <li><a href="#">HardWare</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_3.png" alt="">
                                회원
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">전체</a></li>
                                    <li><a href="#">일반</a></li>
                                    <li><a href="#">판매</a></li>
                                    <li><a href="#">추천인 순위</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_4.png" alt="">
                                상품
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">전체</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_5.png" alt="">
                                주문
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">상품 주문</a></li>
                                    <li><a href="#">등록 주문</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_6.png" alt="">
                                정산
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">정산</a></li>
                                    <li><a href="#">추천인 정산</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_7.png" alt="">
                                보드
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">공지사항</a></li>
                                    <li><a href="#">Q&A</a></li>
                                    <li><a href="#">삽니다</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_8.png" alt="">
                                내용
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">전체</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_9.png" alt="">
                                로그
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href = "#">SMS</a></li>
                                    <li><a href = "#">email</a></li>
                                    <li><a href = "#">nice</a></li>
                                    <li><a href = "#">order</a></li>
                                    <li><a href = "#">ms_order</a></li>                                    
                                </ul>
                            </div>
                        </div>

                        <div class="menu_box">
                            <div class="menu_btn">
                                <img src="./images/icon_10.png" alt="">
                                팝업
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="menu_hide">
                                <ul>
                                    <li><a href="#">전체</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="right_content">

                    <div class="rc_top text_20_b">
                        <div class="rct_left">
                            <img class = "icon_img" src="./images/icons_7.png" alt="">ADMIN LIST (10)
                        </div>

                        <div class="rct_right">
                            <button class = "btn_w" fname="admin_modify">등록</button>
                        </div>

                        <!-- <div class="rct_right">
                            <button class = "btn_excel">정산</button>
                            <span>
                                <input type="radio" name="list_radio" id="list_group" value = "cal" checked>정산
                                &nbsp;
                                <input type="radio" name="list_radio" id="list_all" value = "all">전체
                            </span>                            
                        </div> -->
                    </div>

                    <div class="rc_search_box">

                        <div class="rcsb_left">
                            <ul>
                                <li><span>옥수수</span></li>
                            </ul>
                        </div>

                        <div class="rcsb_right">
                            <form name="Gsearch" method="get">
                                <select name="sfl" id="sfl">
                                    <option value="se_date" selected>기간검색</option>
                                    <option value="mb_id">ID</option>
                                    <option value="mb_name">Name</option>
                                </select>

                                <input type = "text" id = "start_date" name = "start_date" placeholder = "시작일">
                                <span id = "se_devide"> ~ </span>
                                <input type = "text" id = "end_date" name = "end_date" placeholder = "종료일">

                                <input name="page" value="1" type="hidden">
                                <input type="text" name="stx" id="stx">
                                <input type="submit" value="검색">
                            </form>
                        </div>
                        
                    </div>

                    <div class="rc_middle">

                        <table>

                            <colgroup>
                                <col width="3%">
                                <col width="7%">
                                <col width="10%">
                                <col width="10%">
                                <col width="*">
                                <col width="10%">
                                <col width="7%">
                            </colgroup>

                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="chk_all" class="chk_all"></th>
                                    <th>Num<i class="fas fa-sort"></i></th>
                                    <th>Level</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>RegDate<i class="fas fa-sort"></i></th>
                                    <th>M / D</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class = "bg_<?php echo $i%2;?>">
                                    <td class = "text_c"><input type="checkbox" id="chk_<?php echo $i;?>" name="chk[]" value = "1"></td>
                                    <td class = "text_c seq">1</td>
                                    <td class = "text_c">10</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td class = "text_c">2020-02-25</td>
                                    <td class = "text_c">
                                        <center>
                                            <input type="button" value="수정" class="btn_u" fname="admin_modify">
                                            <input type="button" value="삭제" class="btn_d" fname="admin_modify">
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="rc_bottom">
                        <div class = "page">
                            
						</div>
                    </div>

                </div>                

            </div>

            <div class="footer">
            
            </div>

        </div>
    </body>
</html> 