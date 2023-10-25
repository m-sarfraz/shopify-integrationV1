function myFunction() {

    let fontArr ={ Alexa: 29, Bayshore: 31, Dancer: 28, Gruenewald: 27, NewCursive: 30, Barcelony: 31, Vintage: 31, Amanda: 27, Budhayan: 24, Sebastian: 27, Signature: 24, Assalwa: 31, Hamilton: 27, Hesterica: 33, LoveNote: 27, Northwell: 35, Quinzey: 28, RedVelvet: 24, Rocket: 27, WildScript: 29, AvantGrade: 34, Bauhaus: 27, DOLCEVITA: 31, KIONA: 26, NixieOne: 26, Typewriter: 29, PaperDaisy: 52, Roboto: 30, BRAVE: 31, LOVELO: 10, Marquee: 18, NeonGlow: 16, NeonLite: 24, NEONTUBE: 16, Outline: 16, SciFi: 9 };
    let dataWidth1 = fontArr[''+$('.noenText1').attr("data-class")+'']
    let dataWidth2 =  fontArr[''+$('.noenText2').attr("data-class")+'']
    let dataWidth3 =  fontArr[''+$('.noenText3').attr("data-class")+'']
    
    var activtab = $("#myTabContent").find(".active").attr("id");
              if(activtab == 'oneline'){
              // Limit Exceed code start
              if($('.txt_area_1')[0].value.length > dataWidth1){
                  alert(`Max character limit for this font is ${dataWidth1}`);
                  $('#copy-html').attr("data-target","");
                  return false;
              }
              else{
                      $('#copy-html').attr("data-target","#neonOutputModal");
              }
                          // Limit Exceed code end     
                  }
           
           if(activtab == 'twoline'){
                // Limit Exceed code 2nd start
              if($('.txt_area_1')[1].value.length > dataWidth1){
                  alert(`Max character limit for this font is ${dataWidth1}`)
                  $('#copy-html').attr("data-target","");
                  return false;
              } else{
                  $('#copy-html').attr("data-target","#neonOutputModal");
          }
              if($('.txt_area_2')[0].value.length > dataWidth2){
                  alert(`Max character limit for this font is ${dataWidth2}`)
                  $('#copy-html').attr("data-target","");
                  return false;
              } else{
                  $('#copy-html').attr("data-target","#neonOutputModal");
          }
              // Limit Exceed code 2nd end
           }
         
          
          if(activtab == 'threeline'){
          // Limit Exceed code 3rd start
          if($('.txt_area_1')[2].value.length > dataWidth1){
              alert(`Max character limit for this font is ${dataWidth2}`)
              $('#copy-html').attr("data-target","");
              return false;
          } else{
              $('#copy-html').attr("data-target","#neonOutputModal");
      }
        
          if($('.txt_area_2')[1].value.length > dataWidth2){
              alert(`Max character limit for this font is ${dataWidth2}`)
              $('#copy-html').attr("data-target","");
              return false;
          } else{
              $('#copy-html').attr("data-target","#neonOutputModal");
      }
      
          if($('.txt_area_3')[0].value.length > dataWidth3){
              alert(`Max character limit for this font is ${dataWidth3}`)
              $('#copy-html').attr("data-target","");
              return false;
          } else{
              $('#copy-html').attr("data-target","#neonOutputModal");
      }
          // Limit Exceed code 3rd end
          }
  
          
      modalImage.innerHTML = '';
      $('.main-loader').removeClass('d-none');
      // $('#copy_content').val($('#copyText').text().replace(/\s/g, "").replace(/\;/g, "\n"));
      var html =
          'ID#' + $('.unique_id').text().replace(';', '') + '\n' +
          '1. Text: ' + $('#lineonefinaltext').text().replace(';', '') + $('#linetwofinaltext').text().replace(';', '') + $('#linethreefineltext').text().replace(';', '') + '\n' +
          '2. Font: ' + $('.text-one-font-name').text().replace(';', '') + $('.text-two-font-name').text().replace(';', '') + $('.text-three-font-name').text().replace(';', '') + '\n' +
          '3. Colors: ' + $('.text-one-color-name').text().replace(';', '') + $('.text-two-color-name').text().replace(';', '') + $('.text-three-color-name').text().replace(';', '') + '\n' +
          '4. Backing Color: ' + $('.backing-color-text').text().replace(';', '').replace(/\s+/g, ' ') + '\n' +
          '5. Backing Shape: ' + $('.backing-shape-text').text().replace(';', '').replace(/\s+/g, ' ') + '\n' +
          '6. Install: ' + $('.install-text').text().replace(';', '') + '\n' +
          'Size: ' + $('.size').text().replace(';', '') + '\n' +
          'Deliver: ' + $('.deiverDate').text().replace(';', '') + '\n' +
          'price: ' + $('.price').text().replace(';', '');
      $('#copy_content').val(html);
      $('#modal-content-text').val($('#copy_content').val())
      var copyText = document.getElementById("copy_content");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      // alert('Congratulations on finalizing the design. You are now being redirected to our sales page on ETSY. The customization details of your neon sign have been copied, just paste them to personalization field  when placing order on ETSY sales page.')
      $('.wrapper-secleted-output').css('display', 'none');
      html2canvas(document.getElementById('copyimage'), {
          allowTaint: true,
          logging: true
      }).then(function(canvas) {
          // Get base64URL
          canvas.style.width = "300px"
          canvas.style.height = "240px"
          modalImage.append(canvas);
          $('.main-loader').addClass('d-none');
          var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');
          $('.wrapper-secleted-output').css('display', 'block');
  
        $.ajax({
            type: 'POST',
            url: "api/create-order",
            data: {
                _token: '{{csrf_token()}}',
                order_id: $('.unique_id').text().replace(';', ''),
                line_one_text: $('#lineonefinaltext').text().replace(';', ''),
                line_two_text: $('#linetwofinaltext').text().replace(';', ''),
                line_three_text: $('#linethreefineltext').text().replace(';', ''),
                backing_color: $('.backing-color-text').text().replace(';', ''),
                backing_shape: $('.backing-shape-text').text().replace(';', ''),
                size: $('.size').text().replace(';', ''),
                deliver_date: $('.deiverDate').text().replace(';', ''),
                price: $('.price').text().replace(';', ''),
                install: $('.install-text').text().replace(';', ''),
                font: $('.text-one-font-name').text().replace(';', '') + $('.text-two-font-name').text().replace(';', '') + $('.text-three-font-name').text().replace(';', ''),
                colors: $('.text-one-color-name').text().replace(';', '') + $('.text-two-color-name').text().replace(';', '') + $('.text-three-color-name').text().replace(';', ''),
                image: base64URL
            },
            success: function(data) {
                //   window.location = "https://www.etsy.com/listing/970938327";
            }
        })
    });
function copy() {
                  window.location = "https://www.etsy.com/listing/970938327";
}
}