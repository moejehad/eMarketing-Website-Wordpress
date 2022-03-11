/*global $, smoothScroll*/

$(function () {
   
    "use strict";
    
    $(".count").countTo({
        
        from: 0,
        to: 100,
        speed: 10000,
        refreshInterval: 90
        
    });
    
    $(".count0").countTo({
        
        from: 0,
        to: 35,
        speed: 10000,
        refreshInterval: 90
        
    });
    
      $(".count2").countTo({
        
        from: 10,
        to: 50,
        speed: 10000,
        refreshInterval: 90
        
    });
    
      $(".count3").countTo({
        
        from: 100,
        to: 3000,
        speed: 10000,
        refreshInterval: 90
        
    });
    
});