
  jQuery(function () {
  
    jQuery(".wrapper .search-container .fa-search").click(function(){
      jQuery(".search-container, .search-field").toggleClass("active");
      jQuery("input[type='text']").focus();
    });
    
  });