const cookieStorage = {
    getItem: (key) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce ((acc, [key, value]) => ({...acc, [key.trim()]: value }), {})
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value}`;
    },
};

const storageType = cookieStorage;
const consentPropertyName = 'myVizion';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    const consentPopup = document.getElementById('consent-popup');
    const acceptBtn = document.getElementById('accept');

    const acceptFn = event => {
        saveToStorage(storageType); 
        consentPopup.classList.add('hidden');
    };

    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup()){
        consentPopup.classList.remove('hidden');
    }
}

$(document).ready(function(){
    //navbar dropdown list
    $(".dropdown").click(function(){
        $(".dropdown-list ul").toggleClass("active");
    });

    /*select dropdown list category*/
    $(".dropdown-list ul li").click(function(){
        var icon_text = $(this).html();
        $(".default-option").html(icon_text);
    });

    $(document).on("click",function(event){
        if(!$(event.target).closest(".dropdown").length){
            $(".dropdown-list ul").removeClass("active");
        }
    });
    //hamburger menu
    $('.toggle').click(function(){
        $('.toggle').toggleClass('active');
        $('nav').toggleClass('active');
    })

    $('.close-btn').click(function(){
        $('.close-btn').toggleClass('.hide');
        $('.success').toggleClass('.hide');
    })
});



