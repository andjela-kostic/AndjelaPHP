
    var regUsername=/^([A-ZČĆŽĐŠ][a-zčćžđš]+([ ]?[a-zčćžđš]?["-]?[A-ZČĆŽĐŠ][a-zčćžđš]+)*)$/;
    var regEmail=/\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b/;
    var regPassword=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    var regNumber=/[^a-z ]\ *([.0-9])*\d/g;
    var br;
    var podaciZaSlanje= [];
    var ime,username,mejl,sifra,kontakt,grad,pol;
    function regEx(vrednost,id){
        console.log("usli smo u funkciju");
    var getEl=id;

    let polje=document.getElementById(getEl);
        if(id=="mail"){
            let regex=regEmail;
            if(regex.test(vrednost)){
               polje.nextElementSibling.innerHTML='';
               document.getElementById('submit').disabled = false; 
                polje.classList.remove("alert","alert-danger")
               polje.classList.add("alert","alert-success")
                mejl=vrednost;
            }
            else{
               polje.nextElementSibling.innerHTML="<span class='text text-warning'>Dozvoljen format je: text@mail.domain!</span>";
               var disableSelection =document.getElementById("submit")
               disableSelection.setAttribute("disabled","true");
               polje.classList.add("alert","alert-danger")
               br++;
            }
        }
        else if(id=="fnm"){
           let regex=regUsername;
           if(regex.test(vrednost)){
               polje.nextElementSibling.innerHTML='';
              document.getElementById('submit').disabled = false; 
               polje.classList.remove("alert","alert-danger")
              polje.classList.add("alert","alert-success")
               ime=vrednost;
           }
           else{
              polje.nextElementSibling.innerHTML="<span class='text text-warning'>Imena počinju velikim slovom i ne sadrže brojeve.</span>";
              var disableSelection =document.getElementById("submit")
              disableSelection.setAttribute("disabled","true");
              polje.classList.add("alert","alert-danger")
              br++;
           }
       }
       else if(id=="pwd"){
           let regex=regPassword;
           if(regex.test(vrednost)){
               polje.nextElementSibling.innerHTML='';
              document.getElementById('submit').disabled = false; 
               polje.classList.remove("alert","alert-danger")
              polje.classList.add("alert","alert-success")
               sifra=vrednost;
           }
           else{
              polje.nextElementSibling.innerHTML="<span class='text text-warning'>Minimalno osam karaktera, barem jedno veliko slovo, i barem jedan broj</span>";
              var disableSelection =document.getElementById("submit")
              disableSelection.setAttribute("disabled","true");
              polje.classList.add("alert","alert-danger")
              br++;
           }
       }
       else if(id=="cpwd"){
        let regex=regPassword;
        if((vrednost==document.getElementById('pwd').value)&&(vrednost!="")){
            polje.nextElementSibling.innerHTML='';
           document.getElementById('submit').disabled = false; 
            polje.classList.remove("alert","alert-danger")
           polje.classList.add("alert","alert-success")
            sifra=vrednost;
        }
        else{
            if(vrednost=="")
           {polje.nextElementSibling.innerHTML="<span class='text text-warning'>Polje ne sme biti prazno!</span>";}
           else {polje.nextElementSibling.innerHTML="<span class='text text-warning'>Lozinke moraju biti iste!!!</span>";}
           var disableSelection =document.getElementById("submit")
           disableSelection.setAttribute("disabled","true");
           polje.classList.add("alert","alert-danger")
           br++;
        }
    }
       else if(id=="contact"){
           let regex=regNumber;
           if(regex.test(vrednost)){
               polje.nextElementSibling.innerHTML='';
              document.getElementById('submit').disabled = false; 
               polje.classList.remove("alert","alert-danger")
              polje.classList.add("alert","alert-success")
               kontakt=vrednost;
           }
           else{
              polje.nextElementSibling.innerHTML="<span class='text text-warning'>Samo brojevi idu u broj telefona!</span>";
              var disableSelection =document.getElementById("submit")
              disableSelection.setAttribute("disabled","true");
              polje.classList.add("alert","alert-danger")
              br++;
           }
       }
       else if((id=="city")&& (vrednost!='Odaberi')){
            grad=vrednost;
        }
       else if(id=="m"){
           pol=vrednost;
       }
       else if(id=="f"){
           pol=vrednost;
       }
       else if(id=="unm"){
           username=vrednost;
       }
    }
      
    
       
    function ispisDdlGradova(){
        let html=``;
        var nizGradova=['Odaberi','Jagodina', 'Velika Plana', 'Beograd', 'Novi Sad', 'Niš', 'Kragujevac', 'Gornji Milanovac','Leskovac','Šabac','Ćuprija','Kraljevo','Zaječar','Pančevo'];
        for(let i=0;i<nizGradova.length;i++){
            html+=`<option value='${nizGradova[i]}'>${nizGradova[i]}</option>`
        }
        $('#city').html(html);
        console.log(nizGradova)
    }
    ispisDdlGradova();

    function slanje(){
         podaciZaSlanje={
            "fnm":ime,
            "unm":username,
            "pwd":sifra,
            "gender":pol,
            "mail":mejl,
            "contact":kontakt,
            "city":grad
         };
         console.log('usli smo u ajax pitanje');
         console.log(podaciZaSlanje);
         /* var jsonString = JSON.stringify(podaciZaSlanje);
         console.log(jsonString); */
       $.ajax({
          url:"includes/formCheck.php",
          method:"POST",
          data:podaciZaSlanje,
          dataType:"JSON",
          success:function(result){
              console.log('uspeh');
              
          },
          error:function(xhr){
            //  console.error(xhr);
          }
        });
        document.getElementById("registration").innerHTML="Uspešno ste se registrovali!";
        setTimeout(function(){

         window.location.href = 'index.php';
      }, 1000);
   }
   
  