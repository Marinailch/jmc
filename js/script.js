
  //Функция показа
      function block(block){
          document.getElementById('menu').style.display = "block";
          document.getElementById('menu_mob').style.display = "none";

      }
  function none(none){
      document.getElementById('menu').style.display = "none";
      document.getElementById('menu_mob').style.display = "block";

  }

  function geo_block(block){
      document.getElementById('menu_geo').style.display = "block";
      document.getElementById('ico_geo').style.display = "none";

  }
  function geo_none(none){
      document.getElementsById('menu_geo').style.display = "none";
      document.getElementById('ico_geo').style.display = "block";

  }

  function bshow(){
      $('.map_info').css('margin-left', '-215px');
      document.getElementById('hiden_map').style.display = "block";
      document.getElementById('show_map').style.display = "none";

  }
  function bhiden(none){
      $('.map_info').css('margin-left', '0');
      document.getElementById('show_map').style.display = "block";
      document.getElementById('hiden_map').style.display = "none";

  }
