window.onload = function () {
    var button = document.getElementById("button");
    var name = document.getElementById("name");
    var image = document.getElementById("image");
    var age = document.getElementById("age").value;
    var attraction = document.getElementById("attraction");
    var range = document.getElementById("range");
    var color = document.getElementById("color");
    var extra = document.getElementById("extra");

    button.addEventListener("click", function () {
        var age = document.getElementById("age").value;
        var a = 1;
        var b = 1;
        if (name.value != "" && age != "") {
            if (age >= 16 && age <= 50) {
                image1.innerHTML = "<img src='img/ride5.jpg' height='350px'/>"
                image2.innerHTML = "<img src='img/pulsera_5.png' height='250px'/>"
                range.value = "5";
                attraction.value=5;
                color.value="#000000";
                extra.innerHTML = "INFORMATION SELECTED:"+"<br>"+ "Name: " + name.value +"<br>"+ "Age: " + age +"<br>"+"Ride: Hollywood Rip Ride Rockit"+"<br>"+ "Difficulty level: " + range.value+"/5";
            } else if (age >= 14 && age <= 65) {
                image1.innerHTML = "<img src='img/ride4.jpg' height='350px'/>"
                image2.innerHTML = "<img src='img/pulsera_4.png' height='250px'/>"
                range.value = "4";
                attraction.value=4;
                color.value="#0000ff";
                extra.innerHTML = "INFORMATION SELECTED:"+"<br>"+ "Name: " + name.value +"<br>"+ "Age: " + age +"<br>"+"Ride: MEN IN BLACK Alien Attack"+"<br>"+ "Difficulty level: " + range.value+"/5";
            } else if (age >= 12 && age <= 77) {
                image1.innerHTML = "<img src='img/ride3.jpg' height='350px'/>"
                image2.innerHTML = "<img src='img/pulsera_3.png' height='250px'/>"
                range.value = "3";
                attraction.value=3;
                color.value="#cd0000";
                extra.innerHTML = "INFORMATION SELECTED:"+"<br>"+ "Name: " + name.value +"<br>"+ "Age: " + age +"<br>"+"Ride: Revenge of the Mummy"+"<br>"+ "Difficulty level: " + range.value+"/5";

            } else if (age >= 9 && age <= 88) {
                image1.innerHTML = "<img src='img/ride2.jpg' height='350px'/>"
                image2.innerHTML = "<img src='img/pulsera_2.png' height='250px'/>"
                range.value = "2";
                attraction.value=2;
                color.value="#FFFF00";
                extra.innerHTML = "INFORMATION SELECTED:"+"<br>"+ "Name: " + name.value +"<br>"+ "Age: " + age +"<br>"+"Ride: E.T. Adventure"+"<br>"+ "Difficulty level: " + range.value+"/5";

            } else if (age >= 1 && age <= 100) {
                image1.innerHTML = "<img src='img/ride1.jpg' height='350px'/>"
                image2.innerHTML = "<img src='img/pulsera_1.png' height='250px'/>"
                range.value = "1";
                attraction.value=1;
                color.value="#008000";
                extra.innerHTML = "INFORMATION SELECTED:"+"<br>"+ "Name: " + name.value +"<br>"+ "Age: " + age +"<br>"+"Ride: Despicable Me Minion Mayhem"+"<br>"+ "Difficulty level: " + range.value+"/5";
            }
            else if (age <=0 || age >= 101) {
                extra.innerHTML = '<span style="color:#FF0000"> Please enter a valid age </span>';
            }
        }
        else{
            extra.innerHTML = '<span style="color:#FF0000"> Please fill all the gaps </span>';
        }
    }, false);

}


/* */
