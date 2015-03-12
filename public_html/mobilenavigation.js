  function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }    
    
    
     function toggle_visibilitydual(id,id2) {
       var e = document.getElementById(id);
       var f = document.getElementById(id2);
       e.style.display = 'none';
       f.style.display = 'block';
    }    
