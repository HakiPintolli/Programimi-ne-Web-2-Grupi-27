function addToCart(productName) {
    // Merr vlerën aktuale të cookies për produktet në shportë
    var cartProducts = JSON.parse(getCookie("cart_products"));

    // Shto produktin në listën e produkteve në shportë
    cartProducts.push(productName);

    // Rifresko vlerën e cookies për produktet në shportë
    setCookie("cart_products", JSON.stringify(cartProducts), 30);

    // Njofto përdoruesin se produkti është shtuar në shportë (shembull)
    alert("Product added to cart: " + productName);
}

// Funksion për të marrë një cookie nga emri i tij
function getCookie(cookieName) {
    var name = cookieName + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');
    for(var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i];
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) == 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return "";
}

// Funksion për të vendosur një cookie me emrin, vlerën, dhe ditët e skadimit
function setCookie(cookieName, cookieValue, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = cookieName + "=" + cookieValue + expires + "; path=/";
}

function functio(small) {
    var full = document.getElementById("imagebox")
    full.src = small.src
}