      const form   = document.getElementById('formCad');
      const campos = document.querySelectorAll('.required');
      const spans  = document.querySelectorAll('.span-required');
      const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var valido = false;
      const btn = document.getElementById('btn-cad');

      function erro(index){
          campos[index].style.borderBottom = '2px solid red';
          spans[index].style.display= 'block';
          valido = false;
      }

      function removeErro(index){
          campos[index].style.border = '';
          spans[index].style.display= 'none';

      }
      function validarNome(){
        if(campos[0].value.length<3){
            erro(0);
        }else{
            removeErro(0);
        }
    }
    function validarEmail(){
        if(!emailRegex.test(campos[1].value)){
            erro(1);
        }else{
            removeErro(1);
        }
    }

    function validarDataN(){
        var data = document.getElementsByName("dataNasc")[0].value;
        var anos = parseInt(moment(data, "YYYY-MM-DD").endOf('year').fromNow().split(" ")[0]); 

        if(isNaN(anos) || anos < 10 || anos >= 110){
            erro(2);
        }else{
            removeErro(2);
        }

    }

    function validarSenha(){
        if(campos[3].value.length<8 || campos[3].value.length>20){
            erro(3);
        }else{
            removeErro(3);
            compararSenhas();
        }
    }
    function compararSenhas(){
        if(campos[4].value== ""){
            erro(4);
        }
        else if(campos[3].value == campos[4].value){
                valido = true;
                btn.disabled = !valido;
                removeErro(4);
        }
        else{
            erro(4);}
    }
    
