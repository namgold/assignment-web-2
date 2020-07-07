function validateData(){
    var cusName = document.getElementById("cusName").value;
    var street = document.getElementById("street").value;
    var town = document.getElementById("town").value;
    var city = document.getElementById("city").value;
    var pNumber = document.getElementById("pNumber").value;
    var email = document.getElementById("email").value;

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var ph = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    if (cusName.replace(/ /g,'').length < 2 || cusName.replace(/ /g,'').length > 30){
        alert("Tên phải nằm trong khoảng 2 - 30 ký tự");
        return false;
    }
    
    if (street.replace(/ /g,'').length < 20 || street.replace(/ /g,'').length > 100){
        alert("Địa chỉ phải nằm trong khoảng 20 - 100 ký tự");
        return false;
    }

    if (town.replace(/ /g,'').length < 5 || town.replace(/ /g,'').length > 30){
        alert("Địa chỉ phải nằm trong khoảng 5 - 30 ký tự");
        return false;
    }

    if (city == "none"){
        alert("Vui lòng chọn Tỉnh / Thành phố ");
        return false;
    }
   
    if (!ph.test(pNumber)){
        alert("Số điện thoại không hợp lệ");
        return false;
    }
    if (!re.test(String(email).toLowerCase())){
        alert("Email không hợp lệ");
        return false;
    }

    
    
    alert("Completed!");
    return true;
}