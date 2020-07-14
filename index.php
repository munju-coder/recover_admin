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

                    <div class="rc_top text_20_b">INDEX</div>


                    <div class="rc_middle">

                        <div class="order_box">
                            <div class="rcm_left">
                                <div class="rcm_subject">Last Order</div>
                                <div class="rcm_table">
                                    <table>
                                        <colgroup>
                                            <col width="17%">
                                            <col width="10%">
                                            <col width="12%">
                                            <col width="*">
                                            <col width="10%">

                                            <col width="10%">
                                        </colgroup>

                                        <thead>
                                            <tr>
                                                <th>주문번호</th>
                                                <th>주문일</th>
                                                <th>ID</th>
                                                <th>상품</th>
                                                <th>수량</th>

                                                <th>가격</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        
                                            <tr>
                                                <td class = "text_l" >20200705_sdfkjhwek&nbsp;&nbsp;<i class="fa fa-window-restore delivery_open color_00c752" aria-hidden="true"></i></td>
                                                <td class = "text_c" >2020-07-05</td>
                                                <td class = "text_c cursor mb_id" >test</td>
                                                <td>
                                                    <div class = "product_info_box">
                                                        <div class = "pib_img">
                                                            <img src = "http://oksusumarket.co.kr/uploads/images/product/320/20200712230339_1594562619894420.jpg">
                                                        </div>
                                                        <div class = "pib_txt">
                                                            <ul>
                                                                <li>상품명 : test</li>
                                                                <li>가격 <span id = "semicolon_13">:</span> 12,000 원</li>
                                                                <li>재고 <span id = "semicolon_13">:</span> 10 개</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class = "text_r">1 개</td>
                                                <td class = "text_r">12,000 원</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="rcm_right">
                                <div class="rcm_subject">Today Confirm</div>
                                <div class="rcm_table">
                                    <table>
                                        <colgroup>
                                            <col width="25%">
                                            <col width="25%">
                                            <col width="25%">
                                            <col width="25%">
                                        </colgroup>

                                        <thead>
                                            <tr>
                                                <th>주문번호</th>
                                                <th>아이디</th>
                                                <th>구매일</th>
                                                <th>확정일</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class = "text_c">20204587_askdjhflj</td>
                                                <td class = "text_c">test</td>
                                                <td class = "text_c">2020-07-59</td>
                                                <td class = "text_c">2020-07-85</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="calendar_box"></div>

                        <div class="board_box">
                            <div class="rcm_subject">Board</div>
                           
                        
                            <div class = "board_list">
                                <div class = "b_top">
                                    <ul>
                                        <li class = "ccbt_subject">notice</li>
                                        <li class = "ccbt_more"><a href = "#">+</a></li>
                                    </ul>
                                </div>
                                
                                <div class = "b_content">
                                    <ul>
                                        <li class = "ccbc_subject"><a href = "#">test</a></li>
                                        <li class = "ccbc_date">2020-07-05</li>
                                    </ul>
                                
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="rc_bottom">
                    </div>

                </div>

            </div>

            <div class="footer">
            
            </div>

        </div>
    </body>
</html> 