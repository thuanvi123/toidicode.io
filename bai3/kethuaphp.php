<?php
class childClass extends parentClass
{
    //code
}
//tao lớp cha
Class Connguoi{
    var $chan ;
    var $tay ;
    var $mui ;
    var $mieng ;
     function  an(){

     }

}
//muốn lớp nguoilon kế thừa thì ta chỉ cần extend
 Class nguoilon extends Connguoi {
    var $longnach ;
    function di(){

    }
    function noi(){

    }
 }
 //tao lơp tre con
 Class Trecon extends  Connguoi {
    function bo(){

    }
 }