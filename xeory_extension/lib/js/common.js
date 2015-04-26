var now_post_num = 5; // 現在表示されている数
var get_post_num = 5; // 一度に取得する数
 
$(function() {
    $("#more_disp a").live("click", function() {
    	alert("読み込みOK");
         
        // $("#more_disp").html('<img class="ajax_loading" src="http://localhost/wordpress/wp-content/themes/xeory_extension_child/images/ajax_loader.gif" />');
         
        // $.ajax({
        //     type: 'post',
        //     url: 'http://192.168.2.100:8888/wordpress/wp-content/themes/xeory_extension_child/more-disp.php',
        //     data: {
        //         'now_post_num': now_post_num,
        //         'get_post_num': get_post_num
        //     },
        //     success: function(data) {
        //         now_post_num = now_post_num + get_post_num;
        //         $("#content").append(data);
        //         $("#more_disp").remove();
        //         $("#content").append('<div id="more_disp"><a href="#">もっと表示</a></div>');
        //     }
        // });
        // return false;
    });
});