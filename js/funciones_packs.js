var band1 = 0;
var band2 = 0;
var precio = 0;
var codigo1 = " ";
var codigo2 = " ";
var x = '0';
var y = '0';
var i = 0;
var j = 0;
var pack = 0;
var hot1 = ["1", "2", "3", "4"];
var hot2 = ["5", "6", "7", "8"];
var hot3 = ["9", "10", "11", "12"];
var hot4 = ["13", "14", "15", "16"];
var a = 0;
var h = 0;




function iniciar() {

    var id = document.getElementById('id');
    var nom = document.getElementById('nombre');
    var dir = document.getElementById('direccion');
    var fec = document.getElementById('fecha');
    var conf = document.getElementById('confirmar');
    var limp = document.getElementById('limpiar');
    var results = document.getElementById('resultado');

    var db = openDatabase("Clientes", "1.0", "Clientes Reserva", 200000);
    var createStatement = "CREATE TABLE IF NOT EXISTS Reservas (id INTEGER PRIMARY KEY AUTOINCREMENT, nom TEXT, dir TEXT, fec TEXT, pack TEXT, precio TEXT)";
    var selectAllStatement = "SELECT * FROM Reservas";
    var insertStatement = "INSERT INTO Reservas (nom, dir, fec, pack, precio) VALUES (?, ?, ?, ?, ?)";
    var deleteStatement = "DELETE FROM Reservas WHERE id=?";
    var dropStatement = "DROP TABLE Reservas";

    var dataset;

    createTable();

    conf.addEventListener("click", insertRecord, false);
    limp.addEventListener("click", dropTable, false);


    function onError(tx, error) {
        alert(error.message);
    }

    function showRecords() {
        results.innerHTML = '';
        db.transaction(function (tx) {
            tx.executeSql(selectAllStatement, [], function (tx, result) {
                dataset = result.rows;
                for (var i = 0, item = null; i < dataset.length; i++) {
                    item = dataset.item(i);
                    results.innerHTML += '<li>' + item['nom'] + ' , ' + item['dir'] + ' , ' + item['fec'] + ' , Pack ' + item['pack'] + ' , ' + item['precio'] + '€';
                }
            });
        });
    }

    function createTable() {
        db.transaction(function (tx) {
            tx.executeSql(createStatement, [], showRecords, onError);
        });
    }

    function insertRecord() {
        db.transaction(function (tx) {
            tx.executeSql(insertStatement, [nom.value, dir.value, fec.value, pack, precio], loadAndReset, onError);
        });
    }


    function loadRecord(i) {
        var item = dataset.item(i);
        nom.value = item['nom'];
        dir.value = item['dir'];
        fec.value = item['fec'];
        id.value = item['id'];
    }

    function updateRecord() {
        db.transaction(function (tx) {
            tx.executeSql(updateStatement, [nom.value, dir.value, fec.value, pack, precio], loadAndReset, onError);
        });
    }

    function deleteRecord(id) {
        db.transaction(function (tx) {
            tx.executeSql(deleteStatement, [id], showRecords, onError);
        });
        resetForm();
    }

    function dropTable() {
        db.transaction(function (tx) {
            tx.executeSql(dropStatement, [], showRecords, onError);
        });
        resetForm();
        createTable();
    }

    function loadAndReset() {
        resetForm();
        showRecords();
    }


    function resetForm() {
        nom.value = 'Nombre y apellidos';
        dir.value = 'Calle no';
        fec.value = '';

    }





    var h1 = document.getElementById("h1");
    var h2 = document.getElementById("h2");
    var h3 = document.getElementById("h3");
    var h4 = document.getElementById("h4");

    var h5 = document.getElementById("h5");
    var h6 = document.getElementById("h6");
    var h7 = document.getElementById("h7");
    var h8 = document.getElementById("h8");
 


    var hotel = document.getElementById("hotel");
    var atraccion = document.getElementById("atraccion");




    
        h1.addEventListener('dragstart', arrastrado1, false);
        h2.addEventListener('dragstart', arrastrado1, false);
        h3.addEventListener('dragstart', arrastrado1, false);
        h4.addEventListener('dragstart', arrastrado1, false);

        hotel.addEventListener('dragenter', function (e) {
            e.preventDefault();
        }, false);

        hotel.addEventListener('dragover', function (e) {
            e.preventDefault();
        }, false);

        hotel.addEventListener('drop', soltado1, false);
        
    

    
        h5.addEventListener('dragstart', arrastrado2, false);
        h6.addEventListener('dragstart', arrastrado2, false);
        h7.addEventListener('dragstart', arrastrado2, false);
        h8.addEventListener('dragstart', arrastrado2, false);


        atraccion.addEventListener('dragenter', function (e) {
            e.preventDefault();
        }, false);


        atraccion.addEventListener('dragover', function (e) {
            e.preventDefault();
        }, false);

        atraccion.addEventListener('drop', soltado2, false);
        
    

    var p = document.getElementById("precio");
    var c = document.getElementById("cancelar");
    c.addEventListener("click", function () {
        document.getElementById('hotel').innerHTML = "Drag here your favorite hotel";
        document.getElementById('atraccion').innerHTML = "Drag here your favorite attraction";
        precio = 0;
        p.innerHTML = precio;
        i = 0;
        j = 0;
        band1 = 0;
        band2 = 0;
        document.getElementById("formulario").style.display = "none";
    }, false);

    var res = document.getElementById("reservar");
    res.addEventListener("click", function () {
        if (band1==1 && band2==1) {
        pack = i[j];
        document.getElementById("formulario").style.display = "block";
        }
        else {
            alert('Choose your favorite hotel and attraction first!');
        }
    }, false);
}


function arrastrado1(e) {
    elem=e.target;
    e.dataTransfer.setData("Text", elem.getAttribute('id'));

    x = this.getAttribute('src');

    switch (x) {
        case 'img/hotel1.jpg':
            a = 40;
            i = hot1;
            break;
        case 'img/hotel2.jpg':
            a = 35;
            i = hot2;
            break;
        case 'img/hotel3.jpg':
            a = 28;
            i = hot3;
            break;
        case 'img/hotel4.jpg':
            a = 60;
            i = hot4;
            break;
    }

}

function arrastrado2(e) {

    elem=e.target;
    e.dataTransfer.setData("Text", elem.getAttribute('id'));

    y = this.getAttribute('src');

    switch (y) {
        case 'img/atraccion1.png':
            h = 12;
            j = 0;
            break;
        case 'img/atraccion2.jpg':
            h = 20;
            j = 1;
            break;
        case 'img/atraccion3.jpg':
            h = 16;
            j = 2;
            break;
        case 'img/atraccion4.jpg':
            h = 30;
            j = 3;
            break;
    }
}

function soltado1(e) {
    e.preventDefault();
    var id=e.dataTransfer.getData('Text');
    if (id <= 'h4') {
        var src=document.getElementById(id).src;
        hotel.innerHTML = '<img src="'+src+'" class="imagenes2">';

        var p = document.getElementById("precio");
        precio = a + h;
        p.innerHTML = precio;
        band1=1;
        
    } 
    else {
        hotel.innerHTML = 'Drag here your favorite hotel';
        band1=0;
    }


}

function soltado2(e) {
    e.preventDefault();
    var id=e.dataTransfer.getData('Text');
    if (id>='h5') {
        var src=document.getElementById(id).src; 
        atraccion.innerHTML = '<img src="'+src+'" class="imagenes2">';

        var p = document.getElementById("precio");
        precio = a + h;
        p.innerHTML = precio;
        band2=1;
        
    } else {
        atraccion.innerHTML = 'Drag here your favorite attraction';
        band2=0;
    }

}




window.addEventListener("load", iniciar, false);
