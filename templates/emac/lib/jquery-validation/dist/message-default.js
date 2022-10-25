jQuery.extend(jQuery.validator.messages, {
    required: "Vui lòng nhập giá trị.",
    remote: "Vui lòng sửa lại giá trị.",
    email: "Vui lòng nhập đúng địa chỉ.",
    url: "Vui lòng nhập đúng URL.",
    date: "Vui lòng nhập đúng ngày.",
    dateISO: "Vui lòng nhập đúng ngày (ISO).",
    number: "Vui lòng nhập số.",
    digits: "Vui lòng chỉ nhập chữ số.",
    creditcard: "Vui lòng nhập đúng mã thẻ.",
    equalTo: "Vui lòng nhập đúng giá trị.",
    accept: "Vui lòng nhập đúng giá trị có phần mở rộng hợp lệ.",
    maxlength: jQuery.validator.format("Vui lòng nhập tối đa {0} ký tự."),
    minlength: jQuery.validator.format("Vui lòng nhập tối thiểu {0} ký tự."),
    rangelength: jQuery.validator.format("Vui lòng nhập từ {0} đến {1} ký tự."),
    range: jQuery.validator.format("Vui lòng nhập giá trị giữa {0} và {1}."),
    max: jQuery.validator.format("Vui lòng nhập giá trị nhỏ hơn {0}."),
    min: jQuery.validator.format("Vui lòng nhập giá trị lớn hơn {0}.")
});

//jQuery.extend(jQuery.validator.messages, {
//    required: "This field is required.",
//    remote: "Please fix this field.",
//    email: "Please enter a valid email address.",
//    url: "Please enter a valid URL.",
//    date: "Please enter a valid date.",
//    dateISO: "Please enter a valid date (ISO).",
//    number: "Please enter a valid number.",
//    digits: "Please enter only digits.",
//    creditcard: "Please enter a valid credit card number.",
//    equalTo: "Please enter the same value again.",
//    accept: "Please enter a value with a valid extension.",
//    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
//    minlength: jQuery.validator.format("Please enter at least {0} characters."),
//    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
//    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
//    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
//    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
//});