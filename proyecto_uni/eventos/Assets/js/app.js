var myModal = new bootstrap.Modal(document.getElementById('myevento')); //link de modal jv
let frm = document.getElementById('formulario');
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale:'es',
      headerToolbar: {
        left: 'prev,next,today',
        center: 'title',
        right: 'dayGridMonth'
      },
      dateClick: function(info){
        //console.log(info);
        document.getElementById('inicio').value = info.datestr;
        document.getElementById('titulo').textContent = 'evento';
        myModal.show();
      } 
    });
    calendar.render();
    
    frm.addEventListener('submit', function(e){
        e.preventDefault();
        const title = document.getElementById('title').value;
        const inicio = document.getElementById('inicio').value;
        const color = document.getElementById('color').value;
        if(title == ''|| fecha == '' || color == ''){
            swal.fire(
                'aviso',
                'todos los campos son requeridos',
                'weaning'
            )
        } else{
            const url = base_url + 'home/registar';
            const http = new XMLHttpRequest();
            http.open('post', url, true);
            http.send(new FormData(frm));
            http.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    console.log(this.responseText);
                }
            }
        }
    })
  });
