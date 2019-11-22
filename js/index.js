$(document).ready(function() {
  /**
   * 登出
   */
  $("#logout").click(function() {
    $.ajax({
      type: "post",
      url: "memberSwitch.php",
      data: {
        method: "logout"
      },
      success: function(e) {
        // JSON.parse(e);
        if (JSON.parse(e) === true) {
          Swal.fire({
            type: "success",
            title: "登出成功",
            text: "2秒後跳轉",
            timer: 2000
          }).then(function() {
            window.location.href = "index.php";
          });
        }
      }
    });
  });
  /**
   * 新增留言
   */
  $("#message").click(function() {
    $.ajax({
      type: "post",
      url: "messageSwitch.php",
      data: {
        method: "create",
        subject: $("#subject").val(),
        content: $("#content").val()
      },
      success: function(c) {
        c = JSON.parse(c);
        if (c === true) {
          swal
            .fire({
              type: "success",
              title: "留言成功",
              text: "2秒後回首頁",
              timer: 2000
            })
            .then(function() {
              window.location.href = "index.php";
            });
        } else {
          Swal.fire({
            type: "error",
            title: "留言失敗"
          }).then(function() {
            window.location.href = "index.php";
          });
        }
      }
    });
  });
});
/**
 * 刪除留言
 */
function del(e) {
  // console.log(e);
  $.ajax({
    type: "post",
    url: "messageSwitch.php",
    data: {
      method: "delete",
      del: e
    },
    success: function(e) {
      e = JSON.parse(e);
      if (e === true) {
        swal
          .fire({
            type: "success",
            title: "留言已刪除",
            timer: 1000
          })
          .then(function() {
            window.location.href = "index.php";
          });
      } else {
        Swal.fire({
          type: "error",
          title: "刪除失敗"
        }).then(function() {
          window.location.href = "index.php";
        });
      }
    }
  });
}
/**
 * 更新留言
 */
function upd(e) {
  $.ajax({
    type: "post",
    url: "messageSwitch.php",
    data: {
      method: "update",
      id: e,
      content: $("#content" + e).val()
    },
    success: function(e) {
      e = JSON.parse(e);
      if (e === true) {
        swal
          .fire({
            type: "success",
            title: "留言已修改",
            timer: 1000
          })
          .then(function() {
            window.location.href = "index.php";
          });
      } else {
        Swal.fire({
          type: "error",
          title: "更新失敗"
        }).then(function() {
          window.location.href = "index.php";
        });
      }
    }
  });
}
