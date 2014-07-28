

function evalVIP(vip)
  {
          enteredVIP = vip;
        
          if (enteredVIP == "")
              {
                  $('#dataGrid').text('');
                  return;
              }   

          // $(".displayContainer").hide();

          $.get("support-files/admin-edit.php", { vip: enteredVIP })
              .done(function(data) {
                  var vipData;
                  //$(".displayFirstName").text("");
                  //$("span").text("");
                  vipData = $.parseHTML(data)
                  $("#dataGrid").html(vipData);

              });
  }

