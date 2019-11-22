$(document).ready(function() {
  /**
   * 前端驗證規則
   */
  let acFlag, pwFlag, rNameFlag, rAcFlag, rPwFlag;
  let rule1 = /^.+$/;
  let rule2 = /^\w{6,12}$/;
  /**
   * 前端登入帳號驗證
   */
  $("#loginAccount").blur(function() {
    if (rule2.test($(this).val())) {
      $(".error2").text("");
      $("#loginAccount").css("border-color", "green");
      acFlag = true;
    } else {
      $(".error2").text("請輸入6-12位英文或數字的帳號");
      $(".error2").css({
        color: "red",
        "font-size": "0.8rem"
      });
      $("#loginAccount").css("border-color", "red");
    }
  });
  /**
   * 前端登入密碼驗證
   */
  $("#loginPassword").blur(function() {
    if (rule2.test($(this).val())) {
      $(".error4").text("");
      $("#loginPassword").css("border-color", "green");
      pwFlag = true;
    } else {
      $(".error4").text("請輸入6-12位英文或數字的密碼");
      $(".error4").css({
        color: "red",
        "font-size": "0.8rem"
      });
      $("#loginPassword").css("border-color", "red");
    }
  });
  /**
   * 前端註冊暱稱驗證
   */
  $("#name").blur(function() {
    if (rule1.test($(this).val())) {
      $(".errorName").text("");
      $("#name").css("border-color", "green");
      rNameFlag = true;
    } else {
      $(".errorName").text("請輸入姓名");
      $(".errorName").css({
        color: "red",
        "font-size": "0.8rem"
      });
      $("#name").css("border-color", "red");
    }
  });
  /**
   * 前端註冊帳號驗證
   */
  $("#account").blur(function() {
    if (rule2.test($(this).val())) {
      $(".errorAccount").text("");
      $("#account").css("border-color", "green");
      rAcFlag = true;
    } else {
      $(".errorAccount").text("請輸入6-12位英文或數字的帳號");
      $(".errorAccount").css({
        color: "red",
        "font-size": "0.8rem"
      });
      $("#account").css("border-color", "red");
    }
  });
  /**
   * 前端註冊密碼驗證
   */
  $("#password").blur(function() {
    if (rule2.test($(this).val())) {
      $(".errorPw").text("");
      $("#password").css("border-color", "green");
      rPwFlag = true;
    } else {
      $(".errorPw").text("請輸入6-12位英文或數字的密碼");
      $(".errorPw").css({
        color: "red",
        "font-size": "0.8rem"
      });
      $("#password").css("border-color", "red");
    }
  });
  /**
   * 註冊按鈕事件
   */
  $("#register").click(function() {
    if (rNameFlag === true && rAcFlag === true && rPwFlag === true) {
      $.ajax({
        type: "post",
        url: "../php/memberSwitch.php",
        data: {
          method: "register",
          name: $("#name").val(),
          account: $("#account").val(),
          password: $("#password").val()
        },
        success: function(e) {
          e = JSON.parse(e);
          if (e === true) {
            // alert("註冊成功");
            swal
              .fire({
                type: "success",
                title: "註冊成功",
                text: "2秒後跳轉",
                timer: 2000
              })
              .then(function() {
                window.location.href = "member.html";
              });
          } else if (e === false) {
            swal.fire({
              type: "error",
              title: "帳號已存在<3"
            });
          } else {
            swal.fire({
              type: "error",
              title: "格式不符<3"
            });
          }
        }
      });
    }
  });
  /**
   * 登入按鈕事件
   */
  $("#login").click(function() {
    if (acFlag === true && pwFlag === true) {
      $.ajax({
        type: "post",
        url: "../php/memberSwitch.php",
        data: {
          method: "login",
          account: $("#loginAccount").val(),
          password: $("#loginPassword").val()
        },
        success: function(c) {
          c = JSON.parse(c);
          if (c === true) {
            swal
              .fire({
                type: "success",
                title: "登入成功",
                text: "2秒後回首頁",
                timer: 2000
              })
              .then(function() {
                window.location.href = "../php/index.php";
              });
          } else {
            Swal.fire({
              type: "error",
              title: "帳號或密碼錯誤!"
            }).then(function() {
              $("#loginPassword").val("");
              window.location.href = "member.html";
            });
            // }else if(c==="error"){
            //     Swal.fire({
            //         type: 'error',
            //         title: '帳號不存在',
            //     }).then(
            //         function () {
            //             $("#loginPassword").val("");
            //             $("#loginAccount").val("");
            //             window.location.href = "member.html";
            //         }
            //     )
            // }else{
            //     Swal.fire({
            //         type: 'error',
            //         title: '格式不符<3',
            //     }).then(
            //         function () {
            //             $("#loginPassword").val("");
            //             $("#loginAccount").val("");
            //             window.location.href = "member.html";
            //         }
            //     )
          }
        }
      });
    }
  });
});
