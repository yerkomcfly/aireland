
function modal_menu3()
{
  document.getElementById("menu3").classList.toggle("display-none"); 
}

function modal_menu_hamurger()
{
  document.getElementById("modal-menu-hamburger").classList.toggle("menu-ham"); 
  document.getElementById("modal-menu-hamburger").classList.toggle("display-none"); 
}
function modal_menu_filter()
{
  document.getElementById("modal_menu_filtro").classList.toggle("menu-filter"); 
  document.getElementById("modal_menu_filtro").classList.toggle("display-none"); 
}
function modal_ordernar()
{
  document.getElementById("modal_ordenar").classList.toggle("modal-ordenar"); 
  document.getElementById("modal_ordenar").classList.toggle("display-none"); 

  //document.getElementById("modal_ordenar").classList.toggle("display-none"); 
}
document.getElementById("btn_h3").onclick = function (){
  modal_menu3();
}
document.getElementById("btn_hamburger").onclick = function (){
  modal_menu_hamurger();
}
document.getElementById("btn_menu_exit").onclick = function (){
  modal_menu_hamurger();
}
document.getElementById("btn_filter").onclick = function (){
  modal_menu_filter();
}
document.getElementById("btn_filter_exit").onclick = function (){
  modal_menu_filter();
}
document.getElementById("btn_ordendar").onclick = function (){
  modal_ordernar();
}