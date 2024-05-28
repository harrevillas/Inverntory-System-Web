  

    $(document).ready(function() {

              let api = "http://localhost/Inverntory-System-Web/pages/config/api/";
     
               ///////////////////////////////////sales this month///////////////////////////////

               $.getJSON(api+'count_salesthismonth.php', function(json) {

                /// var p=[];
                  for (var i = 0; i < json.length; i++) {

                      function thousands_separators(num) {
                            var num_parts = num.toString().split(".");
                            num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            return num_parts.join(".");
                        }

                     document.getElementById("count_salesthismonth").innerHTML = "₱ " +  thousands_separators(json[i].totalsales);
                  }
                  
              });

              ///////////////////////////////////end sales this month///////////////////////////////
  
 
               ///////////////////////////////////sales last month///////////////////////////////

               $.getJSON(api+'count_saleslastmonth.php', function(json) {

                /// var p=[];
                  for (var i = 0; i < json.length; i++) {

                      function thousands_separators(num) {
                            var num_parts = num.toString().split(".");
                            num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            return num_parts.join(".");
                        }

                     document.getElementById("count_saleslastmonth").innerHTML = "₱ " +  thousands_separators(json[i].totalsales);
                  }
                  
              });

              ///////////////////////////////////end sales last month///////////////////////////////
  


               ///////////////////////////////////sales this year///////////////////////////////

               $.getJSON(api+'count_salesthisyear.php', function(json) {

                /// var p=[];
                  for (var i = 0; i < json.length; i++) {

                      function thousands_separators(num) {
                            var num_parts = num.toString().split(".");
                            num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            return num_parts.join(".");
                        }

                     document.getElementById("count_salesthisyear").innerHTML = "₱ " +  thousands_separators(json[i].totalsales);
                  }
                  
              });

              ///////////////////////////////////end sales this year///////////////////////////////

          });