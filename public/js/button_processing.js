/* Test */
var lm = 5;
var sellerwidth = $(".sellerbutton").width();
var settingposition = $("#settingbutton").position();
var dataposition = $("#databutton").position();
var analyticsposition = $("#analyticsbutton").position();
var industryposition = $("#industrybutton").position();
var serviceposition = $("#servicebutton").position();
var distributionposition = $("#distributionbutton").position();
var retailposition = $("#retailbutton").position();
var humancapposition = $("#humancapbutton").position();
var virtualcabinetposition = $("#virtualcabinetbutton").position();
var reportposition = $("#reportbutton").position();

firstposition = $($(".butns").children()[0]).position()

if (typeof analyticsposition != "undefined") {
  var analyticsmargin = analyticsposition.left - firstposition.left;
  $("#analyticsdropdown").css("marginLeft", analyticsmargin - lm);
  $("#analyticsdropdown").css("top", 3);
}

if (typeof industryposition != "undefined") {
  var oilandgasmargin = industryposition.left - firstposition.left;

  $("#industrydropdown").css("marginLeft", oilandgasmargin - lm);
  $("#industrydropdown").css("top", 3);
}

if (typeof dataposition != "undefined") {
  var datamargin = dataposition.left - firstposition.left;
  $("#datadropdown").css("marginLeft", datamargin - lm);
  $("#datadropdown").css("top", 3);
}

if (typeof virtualcabinetposition != "undefined") {
  var virtualcabinetmargin = virtualcabinetposition.left - firstposition.left;
  $("#virtualcabinetdropdown").css("marginLeft", virtualcabinetmargin - lm);
  $("#virtualcabinetdropdown").css("top", 3);
}

if (typeof serviceposition != "undefined") {
  var servicemargin = serviceposition.left - firstposition.left;
  $("#servicedropdown").css("marginLeft", servicemargin - lm);
  $("#servicedropdown").css("top", 3);
}

if (typeof distributionposition != "undefined") {
  var distributionmargin = distributionposition.left - firstposition.left;
  $("#distributiondropdown").css("marginLeft", distributionmargin - lm);
  $("#distributiondropdown").css("top", 3);
}

if (typeof retailposition != "undefined") {
  var retailmargin = retailposition.left - firstposition.left;
  $("#retaildropdown").css("marginLeft", retailmargin - lm);
  $("#retaildropdown").css("top", 3);
}

if (typeof humancapposition != "undefined") {
  var humancapmargin = humancapposition.left - firstposition.left;
  $("#humancapdropdown").css("marginLeft", humancapmargin - lm);
  $("#humancapdropdown").css("top", 3);
}

if (typeof reportposition != "undefined") {
  var reportmargin = reportposition.left - firstposition.left;
  $("#reportdropdown").css("marginLeft", reportmargin - lm);
  $("#reportdropdown").css("top", 3);
}

/*--------- This is for THIRD Tier buttons -------------*/
$(document.body).click(function (event) {
  if (this.id != "") {
    if (
      event.target.id == "jaguarbutton" ||
      event.target.id == "jaguarbuttona"
    ) {
      var t1 = $("#jaguarbutton").position().top;
      var top = t1 + 2 * sellerwidth;
      var sys = systemposition.left - settingposition.left;
      var left = $("#jaguarbutton").position().left + sys - 2 * lm;
      $(".sellerdropdownchild").css("marginLeft", left);
      $(".sellerdropdownchild").css("marginTop", top);
      $(".sellerdropdownchild").slideUp(500, function () {});
    } else if (
      event.target.id == "hcapbutton" ||
      event.target.id == "hcapbuttona"
    ) {
      var t1 = $("#hcapbutton").position().top;
      var top = t1 + 2 * sellerwidth;
      var sys = systemposition.left - settingposition.left;
      var left = $("#hcapbutton").position().left + sys - 2 * lm;
      $(".sellerdropdownchild").css("marginLeft", left);
      $(".sellerdropdownchild").css("marginTop", top);
      $(".sellerdropdownchild").slideUp(500, function () {});
    } else {
      $(".sellerdropdown").slideUp(500, function () {});
      $(".sellerdropdownchild").slideUp(500, function () {});
    }
  } else {
    $(".sellerdropdown").slideUp(500, function () {});
    $(".sellerdropdownchild").slideUp(500, function () {});
  }
});

$(".dropdownnn").click(function (event) {
  event.stopPropagation();
  $(".hide").slideUp(500);

  switch (this.id) {
    case "servicebutton":
      /*--------- Service & Maintenance Button: Rigging listener and action */
      $("#servicedropdown").slideToggle(500);
      break;
    case "databutton":
      /*--------- Data Button: Rigging listener and action */
      $("#datadropdown").slideToggle(500);
      break;
    case "analyticsbutton":
      /*--------- Analytics Button: Rigging listener and action */
      $("#analyticsdropdown").slideToggle(500);
      break;
    case "virtualcabinetbutton":
      /*--------- Virtual Cabinet Button: Rigging listener and action */
      $("#virtualcabinetdropdown").slideToggle(500);
      break;
    case "industrybutton":
      /*--------- Virtual Cabinet Button: Rigging listener and action */
      $("#industrydropdown").slideToggle(500);
      break;
    case "distributionbutton":
      /*--------- Distribution Button: Rigging listener and action */
      $("#distributiondropdown").slideToggle(500);
      break;
    case "retailbutton":
      /*--------- Retail Button: Rigging listener and action */
      $("#retaildropdown").slideToggle(500);
      break;
    case "humancapbutton":
      /*--------- HumanCap Button: Rigging listener and action */
      $("#humancapdropdown").slideToggle(500);
      break;
    case "reportbutton":
      /*--------- Report Button: Rigging listener and action */
      $("#reportdropdown").slideToggle(500);
      break;
    default:
  }

  return false;
});
