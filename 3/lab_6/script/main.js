function pow(x, n) {
    var res = 1;
    for (var i = 0; i < n; i++) {
        res *= x;
    }
    return res;
}

function gcd(a, b) {
    var x = 0;
    for (var i = 1; i <= Math.min(a,b); i++) {
        if(a%i == 0 && b%i == 0){
            x = i;
        }
        
    }
    return x;
}

function minDigit(x) {
    var numText = x.toString().split('');
    var min = 10;
    for (var i = 0; i < numText.length; i++) {
        if (min>Number(numText[i])){
            min = Number(numText[i]);
        }
    }
    
    return min;
}

function pluralizeRecords(n) {
    var text = ""
    if (n%10 == 1 && n%100 != 11) {
        text = "В результате выполнения запроса была найдена " +  n + " запись"
    } else if ((n%10 >= 2 && n%10 <= 4) && (n%100 < 12 ||  n%100 > 14)){
        text = "В результате выполнения запроса было найдено " +  n + " записи"
    } else if((n%10 == 0) || (n%10 >= 5 && n%10 <= 9 ) || (n%100 >= 11 && n%100 <= 14)){
        text = "В результате выполнения запроса было найдено " +  n + " записей"
    }
    return text
}

function fibb(n) {
    var result = 1;
    nm1 = 1;
    nm2 = 1;
    if (n == 1){
        return 1;
    } else if (n == 2){
        return 1;
    }else{
        for(var i = n; i > 2; i--){
            result = nm1 + nm2;
            nm1 = nm2;
            nm2 = result;
        }
    }
    return result;
}

function checkForm(el) {
    var f1Number1 = el.f1Number1.value;
    var f1Number2 = el.f1Number2.value;
    var f2Number1 = el.f2Number1.value;
    var f2Number2 = el.f2Number2.value;
    var f3Number = el.f3Number.value;
    var f4Number = el.f4Number.value;
    var f5Number = el.f5Number.value;

    var f1reply = document.getElementById("f1reply");
    var f2reply = document.getElementById("f2reply");
    var f3reply = document.getElementById("f3reply");
    var f4reply = document.getElementById("f4reply");
    var f5reply = document.getElementById("f5reply");

    var result1 = pow(f1Number1, f1Number2);
    var result2 = gcd(f2Number1,f2Number2);
    var result3 = minDigit(f3Number);
    var result4 = pluralizeRecords(f4Number);
    var result5 = fibb(f5Number);


    f1reply.textContent = "Ответ: " + result1;
    f2reply.textContent = "Ответ: " + result2;
    f3reply.textContent = "Ответ: " + result3;
    f4reply.textContent = "Ответ: " + result4;
    f5reply.textContent = "Ответ: " + result5;
    
    return false;
}
