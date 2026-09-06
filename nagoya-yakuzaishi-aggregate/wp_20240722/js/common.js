/* Javascript */

$(document).ready(function () {
  if ($(".registPostMain").length > 0) {
    if ($(".wpuf-form-add").length > 0) {
      $(".confirmPostBox, .wpuf-form-add").hide();
      $(".confirmPostBox, .btnPrint").hide();
    } else {
      $(".editPostBox, .btnSubmit").hide();
    }
  }

  $(".btnPrint").on("click", function () {
    window.scrollTo(0, 0);
    window.print();
  });

  $(".datepicker").datepicker({
    dateFormat: "yy/mm/dd",
    monthNames: [
      "1月",
      "2月",
      "3月",
      "4月",
      "5月",
      "6月",
      "7月",
      "8月",
      "9月",
      "10月",
      "11月",
      "12月",
    ],
    dayNamesMin: ["日", "月", "火", "水", "木", "金", "土"],
    showOn: "button",
    buttonImageOnly: true,
    buttonImage:
      "https://www.nagoya-yakuzaishi.com/membersite/aggregate/wp-content/themes/nagoya-yakuzaishi-aggregate/image/common/icon_calendar.png",
    beforeShow: function (input, inst) {
      var year = $(this).parent().find(".selectBox.year input").val();
      var month = $(this).parent().find(".selectBox.month input").val() - 1; // JavaScriptの月は0から始まるため
      var date = $(this).parent().find(".selectBox.day input").val();
      if (year && month >= 0 && date) {
        $(this).datepicker("setDate", new Date(year, month, date));
      }
    },
    onSelect: function (dateText, inst) {
      var dates = dateText.split("/");
      var date = new Date(dates[0], dates[1] - 1, dates[2]); // 月は0から始まるため
      var dayNames = ["日", "月", "火", "水", "木", "金", "土"];

      // 日付の部分を設定
      $(this).parent().find(".selectBox.year input").val(dates[0]);
      $(this).parent().find(".selectBox.month input").val(dates[1]);
      $(this).parent().find(".selectBox.day input").val(dates[2]);

      // 曜日の部分を設定
      $(this)
        .parent()
        .find(".selectBox.yobi input")
        .val(dayNames[date.getDay()]);
    },
  });
});

//======================================================================================================
// setSchoolSelect( )
// 機能  ：区に連動した学校フォーム生成
// 引数  ：select_id, ward_id, school_type
// 戻り値：なし
//======================================================================================================
function setSchoolSelect(select_id, ward_id, school_type) {
  $(".select_ward").on("change", function () {
    $(".select_school option:nth-child(n+2)").remove(); // 学校フォームクリア
    const obj = document.getElementById(select_id);
    const obj_ward_id = document.getElementById(ward_id);
    let index = obj.selectedIndex;
    let select_ward = ("00" + index).slice(-2);
    let key = Number(index) - 1;
    $.getJSON(
      "/membersite/aggregate/wp-content/themes/nagoya-yakuzaishi-aggregate/js/school_list_front.json",
      function (data) {
        // console.log("school_list", data);
        // console.log("select_id", select_id);
        // console.log("ward_id", ward_id);
        // console.log("school_type", school_type);
        for (var i = 0; i < data[key][select_ward].school.length; i++) {
          if (data[key][select_ward].school[i].type === "00") {
            continue; // typeが"00"の場合はこのループをスキップ
          }
          $(".select_school").append(
            '<option value="' +
              data[key][select_ward].school[i].name +
              '" data-type="' +
              data[key][select_ward].school[i].type +
              '">' +
              data[key][select_ward].school[i].name +
              "</option>"
          );
        }
      }
    );
    obj_ward_id.value = select_ward;
  });

  $(".select_school").on("change", function () {
    $("#" + school_type).val($(".select_school option:selected").data("type"));
  });
}
