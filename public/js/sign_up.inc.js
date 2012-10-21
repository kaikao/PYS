$signUp = {};

$signUp.checkForm = function() {
    $('#sign_up_form').submit(function() {
        // account
        var account = $('#account').val();
        if ($.trim(account).length < 1) {
            $('#account').addClass('inValid').focus();
            alert('錯誤的 account ');
            return false
        }
        
        // password
        var password = $('#password').val();
        var verify_password = $('#verify_password').val();
        if (password != verify_password || password.length < 6) {
            $('#password').addClass('inValid').focus();
            alert('錯誤的 password ');
            return false
        }
        
        // name
        var name = $('#name').val();
        if ($.trim(name).length < 1) {
            $('#name').addClass('inValid').focus();
            alert('錯誤的 name ');
            return false
        }
        
        // tel
        var tel = $("#tel").val();
        var pattern;
        if ( tel.indexOf("09") === 0 || tel.indexOf("02") === 0 ) {
            pattern =/^[0-9]{10,10}$/;
        } else {
            pattern =/^[0-9]{6,}$/;
        }
        
        var rt = pattern.test(tel);
        if(!rt) {
            $('#tel').addClass('inValid').focus();
            alert('錯誤的 tel ');
            return false;
        }
        
        // email
        var email = $("#email").val();
        var pattern =/^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
        var rt = pattern.test(email);
        if(!rt) {
            $('#email').addClass('inValid').focus();
            alert('錯誤的 email ');
            return false;
        }
    });
    
}

// document ready
$(function() {
    // check form value
    $signUp.checkForm();
})