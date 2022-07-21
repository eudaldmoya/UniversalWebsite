function nieve() {
    
        var d = new Date();
        var m = d.getMonth();
        var snow = document.getElementById("snow");
    
    if(m==0 || m==11){
        snow.style.display="block";
    }
    
    else{
        snow.style.display="none";
    }
}