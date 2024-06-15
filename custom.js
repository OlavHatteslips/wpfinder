
$(document).ready(function() {

  
    $('#btnSearchScript').on('click', function(e){
        //var result = "";
        e.preventDefault();
        var result = $("input#inputJSURL").val();
        showHint(result, e);
    });

    function showHint(str, e) {
        if (str.length == 0) {
             // getOrCreateInstance example
            const popover = bootstrap.Popover.getOrCreateInstance('#btnSearchScript') // Returns a Bootstrap popover instance
            //$('div#txtHint').html("Du glemte at indtaste noget i feltet...");
              // setContent example
            popover.setContent({
                '.popover-header': 'Error',
                '.popover-body': 'You forgot to enter something '
            });
            popover.show();
    /*        const bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBottom')
            bsOffcanvas.show();*/
/*
            const myModal = new bootstrap.Modal('#staticBackdrop', {
                keyboard: false
              });
            myModal.show();     */
            
            
          
            /*myModal.addEventListener('show.bs.modal', function(event) {
                // Get the reference of the triggering button
                const button = event.relatedTarget;
 
                // Get the data for inserting into modal
                const heading = button.getAttribute('data-bs-heading');
                const modalcontent = button.getAttribute('data-bs-modalcontent');
                const footercontent = button.getAttribute('data-bs-footercontent');
 
                // Set the value in the modal
                myModal.querySelector('.modal-title').textContent = heading;
                myModal.querySelector('.modal-body').textContent = modalcontent;
                myModal.querySelector('.modal-footer').textContent = footercontent;
            });
           */

            return;
        }else{
             // getOrCreateInstance example
           /* const popover = bootstrap.Popover.getOrCreateInstance('#btnSearchScript') // Returns a Bootstrap popover instance
            popover.setContent({
                '.popover-header': 'Loading',
                '.popover-body': 'Content loading... '
            });
            popover.show();*/
           /* const bsOffcanvas = new bootstrap.Offcanvas('#offcanvasBottom')
            bsOffcanvas.show();*/
        
       //     myModal.querySelector('.modal-title').textContent = "HEST";
    
           

           $.ajax({
                type: 'GET',
                url: 'findscript.php',
                data: { 'q': str },
                success: function(data) {
                    const myModal = new bootstrap.Modal('#staticBackdrop', {
                        keyboard: false
                      });
                    $('div#txtHint').html(data);
                    myModal.show();   
                    var homepagename = $('input#inputJSURL').val();
                    $('h1#staticBackdropLabel').html(homepagename);
                }
            });
        }


    /*
    function showHint(str, gre, e) {
        var formData = 'q=' + str + "&grecaptcha=" + gre;
        if (str.length == 0) {
            $('span#txtHint').html("Du glemte at indtaste noget i feltet...");
            return;
        }else{
            $.ajax({
                type: 'get',
                url: 'findscript.php?',
                data: formData,
                success: function(results) {
                    $('span#txtHint').html(results);

                }
            });
        }
        */
/*
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
         //   e.preventDefault();
         
            xmlhttp.open("GET", "findscript.php?q=" + str+"&grecaptcha="+gre, true);
            xmlhttp.send();
        }
*/
    }

});