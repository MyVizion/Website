let bool = false;

function DarkMode(){
    if(!bool){ 
        document.documentElement.style.setProperty('--mainColor', '#1F2525');
        document.documentElement.style.setProperty('--secondColor', '#293030');
        document.documentElement.style.setProperty('--letterColor', '#959A9A');
    }
    else if(bool){ 
        document.documentElement.style.setProperty('--mainColor', 'white');
        document.documentElement.style.setProperty('--secondColor', 'white');
        document.documentElement.style.setProperty('--letterColor', 'black');
    }
}
