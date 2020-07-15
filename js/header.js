$("document").ready(function(){

    if(w == "w")
	{
		$(".wm_btn").val("등록");
	}
	else
	{
		$(".wm_btn").val("수정");
	}

    /**
     * menu click event
     */
    $(".menu_btn").each(function(i){
        $(this).click(function(){
            //before init
            $(".menu_btn").children(".fas").attr('class', 'fas fa-chevron-down');
            $(".menu_btn").css("color","#ffffff");
            $(".menu_hide").hide();
            
            //this change
            $(this).css("color","#fc637d");
            $(this).children(".fas").attr('class', 'fas fa-chevron-up');
            $(this).next().toggle();
            COMMON.cookie.setCookie("menu_active", "ma_" + i, "undefined");
        });
    });

    var menuActive =  COMMON.cookie.getCookie("menu_active");
    var activeEQ = menuActive.split("_");

    if(menuActive != "")
    {
        $(".menu_btn").eq(activeEQ[1]).css("color","#fc637d");
        $(".menu_btn").eq(activeEQ[1]).children(".fas").attr('class', 'fas fa-chevron-up');
        $(".menu_btn").eq(activeEQ[1]).next().show();
        //$(".menu_hide > ul > li > a").eq(activeEQ[2]).css("color","#fc637d").css("font-weight","bold");
    }    

    $(".menu_hide > ul > li").each(function(i){
        $(this).click(function(){
            // e.preventDefault();

            $(".menu_hide > ul > li").css("color", "#ffffff");
            $(this).css("color","#fc637d").css("font-weight","bold");
            COMMON.cookie.setCookie("menu_sub_active", "mas_" + i, "undefined");
            
            // var link = $(this).children().attr("href");
            // location.href = link;
        });
    });

    var menuSubActive =  COMMON.cookie.getCookie("menu_sub_active");
    var activeSubEQ = menuSubActive.split("_");
    
    if(menuSubActive != "")
    {
        $(".menu_hide > ul > li").eq(activeSubEQ[1]).find("a").css("color","#fc637d").css("font-weight","bold");
    }       
    

    /**
     * list btn_u click event
     */
    $(".btn_w").click(function(){
        var fName = COMMON.form.trim($(this).attr("fName"));

        location.href = "./" + fName + ".php?w=w";
    });

    $(".btn_u").each(function(){
        $(this).click(function(){
			var seq 	= COMMON.form.trim($(this).parents().siblings(".seq").text());
			var fName 	= COMMON.form.trim($(this).attr("fName"));

			location.href = "./" + fName + ".php?w=u&seq=" + seq;
        });
    });


	//btn_d
	$(".btn_d").each(function(){
		$(this).click(function(){
			var seq 	= COMMON.form.trim($(this).parents().siblings(".seq").text());
			var fName 	= COMMON.form.trim($(this).attr("fName")).split("_");
            var remove 	= $(this).parents("tr").first();
            			
			var conf 	= confirm("삭제 하시겠습니까?");

			if(conf == true)
			{
				var dataArr = {'api_key': API_KEY,'seq' : seq};
				$.ajax({
					type: "DELETE",
					cache : false,
					async : false,
					dataType: "json",
					url: URL + "/REST/" + fName[0] + "/index.php",
					data: JSON.stringify(dataArr),
					success: function(data)
					{
						remove.remove();
						alert(data['return_msg']);
					},
					error: function(r) {
						alert("통신실패...");
					}
				});	
			}
			
		});
    });

    //cancel btn event
    $(".cancel_btn").click(function(){
        history.back();
    });
    
	//modal pop open
	//modal toggle
	$(".modal_background").click(function(){
		$(".modal_background, .modal_box").hide();
	});
	
	$(".modal_list_background").click(function(){
		$(".modal_list_background, .modal_list_box").hide();
    });
    
	//mb_info load
	$(".mb_id").each(function(){
		$(this).click(function(){
			var mb_id = COMMON.form.trim($(this).text());
			
			$(".modal_background").toggle();
			$(".modal_box").css("width", "300px").css("top", "12%").css("left", "45%").toggle().load(URL + "/modal/mb_info.php?&mb_id=" + encodeURI(mb_id));
		});
	});	

	//select btn
	//checkbox chk all
	$('.chk_all').click(function(){
						
		if($(".chk_all").prop("checked")) 
		{
			$("input:checkbox[name='chk[]']").prop("checked",true);
		}
		else 
		{
			$("input:checkbox[name='chk[]']").prop("checked",false); 
		}
		
    });
    

    $.datepicker.setDefaults({
        changeMonth: true, 
        changeYear: true,
        nextText: '다음 달',
        prevText: '이전 달' ,		
        showButtonPanel: true, 
        currentText: '오늘 날짜', 
        closeText: '닫기', 
        dateFormat: "yy-mm-dd"
    });	

	//기간 검색 hide
	$("#start_date").hide();
	$("#se_devide").hide();
	$("#end_date").hide();	

	$('.rcsb_right').find("select[name='sfl']").change(function()
	{
		var sfl = $(this).val();
		
		if(sfl == "a.reg_date" || sfl == "a.delivery_date")
		{
			$("#stx").show().datepicker();	
			$("#start_date, #se_devide, #end_date").hide();
		}			
		else if(sfl == "se_date")
		{
			$("#stx").hide();
			$("#start_date, #se_devide, #end_date").show();
			
			//기간 검색
			$( "#start_date, #end_date" ).datepicker();
		}
		else
		{
			$("#stx").show();
			$("#start_date, #se_devide, #end_date").hide();
		}
    });	

    //기간검색 selected chk
    $sel_chk = $("select[name='sfl'] option:selected").val();
    
    if($sel_chk == "se_date")
    {
        $("#stx").hide();
        $("#start_date, #se_devide, #end_date").show();
        
        //기간 검색
        $( "#start_date, #end_date" ).datepicker();
        $('#start_date, #end_date').val($.datepicker.formatDate('yy-mm-dd', new Date()));
    }
    

    //logout 
    $(".logout").click(function(e){
        e.preventDefault();

        var conf = confirm("로그아웃 하시겠습니까?");
        if(conf == true)
        {
            $.ajax({
                type : "GET",
                dataType: "json",
                url: URL + "/REST/login/admin/index.php",
                cache : false,
                data: {"chk" : "logout"},
                success : function(data)
                {
                    alert(data['return_msg']);
                    location.href = URL + "/admin/login";
                },
                error : function(e)
                {
                    alert("통신 실패.");
                }
            });                
        }
    });
});