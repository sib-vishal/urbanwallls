// for word captcha start
var code;
function createCaptcha() {
  //clear the contents of captcha div first
  document.getElementById("captcha").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 120;
  canv.height = 35;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
$("#refresh_captcha").click(function () {
  createCaptcha();
});
function validateCaptcha(action) {
  //   debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    $("#enquiryForm").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox").val("");
    return false;
  }
}

// for word captcha start
var code2;
function createCaptcha2() {
  //clear the contents of captcha div first
  document.getElementById("captcha2").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha2 = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha2.indexOf(charsArray[index]) == -1)
      captcha2.push(charsArray[index]);
    else i--;
  }
  var canv2 = document.createElement("canvas");
  canv2.id = "captcha2";
  canv2.width = 120;
  canv2.height = 35;
  var ctx2 = canv2.getContext("2d");
  ctx2.font = "25px Georgia";
  ctx2.strokeText(captcha2.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code2 = captcha2.join("");
  document.getElementById("captcha2").appendChild(canv2); // adds the canvas to the body element
}
$("#refresh_captcha2").click(function () {
  createCaptcha2();
});
function validateCaptcha2() {
  //   debugger
  if (document.getElementById("cpatchaTextBox2").value == code) {
    $("#enquiryForm2").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm2").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox2").val("");
    return false;
  }
}

$(function () {
  AOS.init();
  window.addEventListener("load", AOS.refresh);
  $(window).on("scroll", function () {
    $(function () {
      if ($(".stricky").length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
          $(".stricky").addClass("stricky-fixed");
          $(".scroll-to-top").fadeIn(1500);
        } else if ($(this).scrollTop() <= strickyScrollPos) {
          $(".stricky").removeClass("stricky-fixed");
          $(".scroll-to-top").fadeOut(1500);
        }
      }
    });
  });
});
$(function () {
  $(window).on("scroll", function () {
    var scrolled = $(window).scrollTop();
    if (scrolled > 80) $(".go-top").addClass("active");
    if (scrolled < 80) $(".go-top").removeClass("active");
  });
  $(function () {
    $(".go-top").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: "0",
        },
        500
      );
    });
  });
});
$(function () {
  $(".dropDown").click(function () {
    $(this).siblings("li").find("ul").slideUp();
    $(this)
      .siblings("li")
      .find("i")
      .removeClass("fa-chevron-up")
      .addClass("fa-chevron-down");
    $(this).find("ul").slideToggle();
    $(this).find("i").toggleClass("fa-chevron-up");
  });
});
$(".popularSlider1").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(".popularSlider2").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(".popularSlider3").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(".blogSlider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(function () {
  $(".inputAction").on("keypress", function () {
    $(".btnForm").addClass("active");
    $(".btnForm").prop("disabled", false);
  });
  $(".inputAction").on("input", function () {
    if ($(this).val().length === 0) {
      $(".btnForm").removeClass("active");
      $(".btnForm").prop("disabled", true);
    }
  });
  $(".btnPopup").click(function (event) {
    event.stopPropagation();
    $(".popupForm").fadeIn();
  });

  $(".closePopup").click(function () {
    $(".popupForm").fadeOut();
  });

  $(".innerPopup").click(function (event) {
    event.stopPropagation();
  });

  $(document).click(function () {
    $(".popupForm").fadeOut();
  });
});

const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

// form tabs
$(document).ready(function () {
  $(".form-tabs li").click(function () {
    var target = $(this).data("target");

    $(".form-tabs li").removeClass("active");
    $(".tab-content").addClass("d-none");
    $(this).addClass("active");
    $("#" + target).removeClass("d-none");
  });
});

let propertytype = "residential";
$(document).ready(function () {
  // Click event handler for tab items
  $(".form-tabs li").click(function () {
    var target = $(this).data("target");

    if (target === "residential") {
      propertytype = "residential";

      $(".residential-property").removeClass("d-none");
      $(".commercial-property").addClass("d-none");
      document.getElementById("min-budget").value = "";
      document.getElementById("max-budget").value = "";
    } else if (target === "commercial") {
      propertytype = "commercial";

      $(".commercial-property").removeClass("d-none");
      $(".residential-property").addClass("d-none");

      // reset value

      document.getElementById("min-budget").value = "";
      document.getElementById("max-budget").value = "";
    }
  });
});

// home form

$(document).ready(function () {
  $(".propertyType").click(function () {
    $(".budget").removeClass("show-dropdown");
    $(".newselect").removeClass("active");
    $(".property-type-dropdown").toggleClass("show-dropdown");

    if (!$(".property-type-dropdown").hasClass("show-dropdown")) {
      $(".price_filter").removeClass("show-dropdown");
    }
  });
  $(".newselect").click(function () {
    $(".budget").removeClass("show-dropdown");
    $(".property-type-dropdown").removeClass("show-dropdown");
  });
  $("#commercial-select").click(function () {
    $(".budget").removeClass("show-dropdown");
    $(".newselect").removeClass("active");
    $(".property-type-dropdown").removeClass("show-dropdown");
  });
  $("#residential-select").click(function () {
    $(".budget").removeClass("show-dropdown");
    $(".newselect").removeClass("active");
    $(".property-type-dropdown").removeClass("show-dropdown");
  });

  $("#area_filter").click(function () {
    $(".price_filter").toggleClass("show-dropdown");
  });
  $(".other_properties_filter").click(function () {
    $(".other_properties_filter_option").toggleClass("d-none ");
  });
  $(".residential_filter").click(function () {
    $(".residential_options").toggleClass("d-none ");
  });
  $(".commercial_filter ").click(function () {
    $(".commercial_filter_option").toggleClass("d-none ");
  });

  // budget
  $(".budget-btn ").click(function () {
    $(".budget").toggleClass("show-dropdown");
    $(".property-type-dropdown").removeClass("show-dropdown");
    $(".newselect").removeClass("active");
  });
  $("#max-budget").focus(function () {
    $(".min-budget-option ").addClass("d-none");
    $(".max-budget-option ").removeClass("d-none");
  });
  $("#min-budget").focus(function () {
    $(".min-budget-option ").removeClass("d-none");
    $(".max-budget-option ").addClass("d-none");
  });

  $(".min-budget-option p").click(function () {
    var selectedValue = $(this).data("value");
    console.log(selectedValue);
    $("#min-budget").val(selectedValue);
    $(".min-budget-option").addClass("d-none");
    $(".max-budget-option").removeClass("d-none");
  });
  $(".max-budget-option p").click(function () {
    var selectedValue = $(this).data("value");

    $("#max-budget").val(selectedValue);
    $(".max-budget-option").addClass("d-none");
    if (
      $("#min-budget").val().trim() !== "" ||
      $("#max-budget").val().trim() !== ""
    ) {
      $(".budget").removeClass("show-dropdown");
    }
  });
});

// PROPERTY PAGE
$(document).ready(function () {
  $('input[name="property-type"]').on("change", function () {
    if ($("#commercial").is(":checked")) {
      $(".commercial_property").removeClass("d-none").addClass("d-block");
      $(".residential_property").addClass("d-none");
      $(".bhkfilter").addClass("d-none");
    } else {
      $(".commercial_property").removeClass("d-block").addClass("d-none");
      $(".residential_property").removeClass("d-none");

      $(".bhkfilter").removeClass("d-none");
    }
  });
});

// property details
$(".property-images").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});

// home pagee form

document.addEventListener("DOMContentLoaded", () => {
  const searchButton = document.getElementById("search-btn");

  searchButton.addEventListener("click", () => {
    const residentialSelect =
      document.getElementById("residential-select").value;
    const commercialSelect = document.getElementById("commercial-select").value;
    // const location = document.getElementById("location").value;
    const minBudget = document.getElementById("min-budget").value;
    const maxBudget = document.getElementById("max-budget").value;

    const checkedPropertyTypes = Array.from(
      document.querySelectorAll('input[name="property-type"]:checked')
    ).map((checkbox) => checkbox.value);
    console.log("propertytype", propertytype);
    console.log("Residential Select:", residentialSelect);
    console.log("Commercial Select:", commercialSelect);
    console.log("Location:", propertyLocation);
    console.log("Min Budget:", minBudget);
    console.log("Max Budget:", maxBudget);
    console.log("Property Types:", checkedPropertyTypes);

    window.location.href =
      "https://marketingexperts.in/projects/urbanwall-realty/property.php";
  });
});

document.querySelectorAll(".newselect").forEach((select) => {
  select.addEventListener("click", () => {
    if (document.querySelector(".locationFeild .active")) {
      document
        .querySelector(".locationFeild .active")
        .classList.remove("active");
    } else {
      select.classList.add("active");
    }
  });
});

let propertyLocation;

document.querySelectorAll('.newselect input[type="radio"]').forEach((radio) => {
  radio.addEventListener("change", (e) => {
    const select = e.target.closest(".newselect");
    const selected = select.querySelector(".newselected");
    const checkedLabel = select.querySelector(`label[for="${e.target.id}"]`);
    if (checkedLabel) {
      selected.textContent = checkedLabel.getAttribute("data-txt");
      propertyLocation = selected.textContent;
    }
    select.classList.remove("active");
  });
});

document.querySelectorAll(".new-btnBox ul li").forEach((item, i) => {
  item.addEventListener("click", () => {
    document.querySelector(".new-btnBox ul .active").classList.remove("active");
    item.classList.add("active");
    document.querySelector(".activeBox").classList.remove("activeBox");
    document.querySelectorAll(".box-new")[i].classList.add("activeBox");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const inputs = [
    document.getElementById("min-budget"),
    document.getElementById("max-budget"),
  ];

  inputs.forEach((input) => {
    input.addEventListener("keydown", (e) => {
      e.preventDefault();
    });

    input.addEventListener("paste", (e) => {
      e.preventDefault();
    });

    input.addEventListener("input", (e) => {
      e.preventDefault();
      input.value = e.target.defaultValue;
    });
  });
});

// new prjects

const propertyLists = document.querySelectorAll(".new_projects_list");

propertyLists.forEach((link) => {
  link.addEventListener("click", function (event) {
    if (!event.target.classList.contains('callback') && !event.target.classList.contains('share-whatsapp') && !event.target.classList.contains('btn-primary')) {
      
      const url = this.getAttribute('data-url');
      window.location.href = url;
  }
  });
});
