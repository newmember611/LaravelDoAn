$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

(function($) {
    "use strict"
    
    
    new quixSettings({
        version: "light", //2 options "light" and "dark"
        layout: "vertical", //2 options, "vertical" and "horizontal"
        navheaderBg: "color_1", //have 10 options, "color_1" to "color_10"
        headerBg: "color_1", //have 10 options, "color_1" to "color_10"
        sidebarStyle: "full", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
        sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
        sidebarPosition: "static", //have two options, "static" and "fixed"
        headerPosition: "static", //have two options, "static" and "fixed"
        containerLayout: "wide",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
        direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
    });

    $('button[name=deactivebutton]').on("click", function () {
        var id = ($(this).attr('data-id'));
        $.ajax({
            type: 'PATCH',  
            url: "/user/"+id+"/deactive",
            success: function(){
                $("#statusdeactive_"+id).load(window.location.href + " #statusdeactive_"+id);
                $("#contentdeactive_"+id).load(window.location.href + " #contentdeactive_"+id);
                $.notify(
                    "Success", "success" 
                  );
            },
            error: function() {
                $("#statusdeactive_"+id).load(window.location.href + " #statusdeactive_"+id);
                $("#contentdeactive_"+id).load(window.location.href + " #contentdeactive_"+id);
                $.notify(
                    "Success", "success" 
                  );
            }
        })
    });

    $('button[name=editbutton]').on("click", function (){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var id = ($(this).attr('data-id'));
        var username = $('#username_'+id).val();
        var email = $('#email_'+id).val();
        var phonenumber = $('#phone_'+id).val();
        var img = $('#img_'+id).val();
        var pass = $('#pass_'+id).val();
        var status = $('#status_'+id).val();
        $.ajax({
            type: 'PATCH',  
            url: "/user/"+id+"/update",
            data: {_token: CSRF_TOKEN, Username: username, Email: email, Password: pass, PhoneNumber: phonenumber, Img: img, Status: status},
            success: function(){
                $("#editcontent").load(window.location.href + " #editcontent");
                $.notify("Success", "success" );
            },
            error: function() {
                $("#editcontent").load(window.location.href + " #editcontent");
                $.notify("Success", "success" );
            }
        })
    });


})(jQuery);