<?php
    class Customers {
        public $hovaten , $tentaikhoan,$matkhau;
      
        function Customer($hovaten , $tentaikhoan,$matkhau){
            $this->hovaten = $hovaten;
            $this->tentaikhoan = $tentaikhoan;
            $this->matkhau = $matkhau;
        }
        function Get_Hovaten(){
           return $this->hovaten;
        }
        function Get_Tentaikhoan(){
            return $this->tentaikhoan;
         }
         function Get_Makhau(){
            return $this->matkhau;
         }
    }
?>