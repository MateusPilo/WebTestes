function onSalva() {
    var par = {'nome':document.getElementById('nome').value,
              'sobre':document.getElementById('tel').value 
             };
    console.log(par);
    $.ajax({
        url:'php/teste.php',
        type:'POST',
        dataType:"json",
        data:{"par":par},
        success:successOk,
        beforeSend:progressDialog,
        error:erroRequest
    });
   
    function erroRequest(ers,data,mens){
        console.log(ers);

    }
    function progressDialog(){
        console.log("Carregando...");
    }

    function successOk(data){
        console.log(data);
    }

}