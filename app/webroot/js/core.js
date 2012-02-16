$('#auth_facebook_button').click(function () {
    var signinWin = window.open("/facebook_auths/auth_start?start_auth=1", "SignIn", "width=1000,height=640,toolbar=0,scrollbars=0,status=0,resizable=0,location=0,menuBar=0,left=" + 100 + ",top=" + 100);
    return false;
});
$('#auth_twitter_button').click(function () {
    var signinWin = window.open("/twitter_auths/request_token?start_auth=1", "SignIn", "width=1000,height=640,toolbar=0,scrollbars=0,status=0,resizable=0,location=0,menuBar=0,left=" + 100 + ",top=" + 100);
    return false;
});
