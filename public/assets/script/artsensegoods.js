function myFunction() {

  
    $('#copy-html').attr("data-target","#neonOutputModal");
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
          'Delivery Date: ' + $('.deiverDate').text().replace(';', '') + '\n' +
          'price: ' + $('.price').text().replace(';', '');
    if($('#phone_number').val() !=''){ html+='\n'+'10. Phone: '+$('#phone_number').val();}
      $('#copy_content').val(html);
      $('#modal-content-text').val($('#copy_content').val())
      var copyText = document.getElementById("copy_content");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      // alert('Congratulations on finalizing the design. You are now being redirected to our sales page on ETSY. The customization details of your neon sign have been copied, just paste them to personalization field  when placing order on ETSY sales page.')
      $('.wrapper-secleted-output').css('display', 'none');
      html2canvas(document.getElementById('sence'), {
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
  
           var fd = {
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
            }
            
            if($('#phone_number').val()!=''){
              fd = {...fd,["phone_number"]:$('#phone_number').val()};
            }
            
            $.ajax({
            type: 'POST',
            url: "api/create-order",
            data: fd,
            success: function(data) {
                //   window.location = "https://www.etsy.com/listing/970938327";
            }
        })
    });
    
}

function copy() {
//  if($('#phone_number').val() !== ''){
//         $('#phoneValidate').addClass('d-none')
//     }
//     else{
//         $('#phoneValidate').removeClass('d-none')
//         return false;
//     }
    
    
    window.location = "https://www.etsy.com/listing/970938327";
}