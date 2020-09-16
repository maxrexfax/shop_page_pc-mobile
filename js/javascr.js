function clickAction(sentid) {
    console.log('clickAction worked');
    if(detectMob()){
        console.log('Mobile device detected, id=' + sentid);
        showPopup(sentid);
    }else{
        window.location.href = "#form";
        console.log('PC detected, id=' + sentid);
    }    
} 
function resetPopup(){
    console.log('resetPopup worked');
    let popup_w = document.getElementById('popup');
    let shadow = document.getElementById('back_shadow');
    popup_w.style.display = "none";
    shadow.style.display = "none";
}

function showPopup(inClickId){
    console.log('showPopup worked');
    let popup_w = document.getElementById('popup');
    let shadow = document.getElementById('back_shadow');
    popup_w.style.display = "block";
    shadow.style.display = "block";
}

function gotoForm(){
    console.log('gotoForm worked');
    window.location.href = "#form";
    resetPopup();
}

function detectMob() {
    return ( ( window.innerWidth <= 800 ) || ( window.innerHeight <= 600 ) );
}
