// Front End Javascript code file
// Get references to the radio buttons and the billing address div
const sameAsShippingRadio = document.getElementById("sameAsShipping");
const differentBillingRadio = document.getElementById("differentBilling");
const billingAddressDiv = document.getElementById("billingAddressDiv");

// Function to handle radio button changes
function handleRadioButtonChange() {
    if (sameAsShippingRadio.checked) {
        // If "Same as shipping address" is checked, remove the billing address div
        billingAddressDiv.style.display = "none";
    } else if (differentBillingRadio.checked) {
        // If "Use a different billing address" is checked, show the billing address div
        billingAddressDiv.style.display = "block";
    }
}
// Add event listeners to both radio buttons
sameAsShippingRadio.addEventListener("change", handleRadioButtonChange);
differentBillingRadio.addEventListener("change", handleRadioButtonChange);

// Call the function initially to set the initial state
handleRadioButtonChange();

/// second function
// Get references to the elements
const showInputButton = document.getElementById("showInput");
const inputContainer = document.getElementById("inputContainer");

// Add a click event listener to the "Add apartment, suite, etc." element
showInputButton.addEventListener("click", function () {

    // Toggle the visibility of the input container
    if (inputContainer.style.display === "none" || inputContainer.style.display === "") {
        inputContainer.style.display = "block";
    } else {
        inputContainer.style.display = "none";
    }
});
// Get references to the elements
const showInputButtonTwo = document.getElementById("showInput2");
const inputContainerTwo = document.getElementById("inputContainer2");

// Add a click event listener to the "Add apartment, suite, etc." element
showInputButtonTwo.addEventListener("click", function () {

    // Toggle the visibility of the input container
    if (inputContainerTwo.style.display === "none" || inputContainerTwo.style.display === "") {
        inputContainerTwo.style.display = "block";
    } else {
        inputContainerTwo.style.display = "none";
    }
});

// Make the AJAX GET request to bring product details to page starts
$.ajax({
    url: 'http://localhost/shopify-backend/public/api/get-single?param=products&id=4772854497463',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
        console.log('helo')
        // Assuming that data is the JSON response you provided
        if (data.data) {
            // Loop through the product data
            let productInfo = data.data;
            // $.each(data.data, function (index, product) { 
            console.log(productInfo.variants[0]['price'])
            productInfo = data.data;
            $('#productAppend').prepend(`<div class="right-div">
                <div class="main-right">
                  <div class="title-product">  
                    <div>
                      <img width = "100px" class="br5" src=${productInfo.image.src} alt="img" />
                    </div>
                    <div class="ps20">
                      <p class="pr-title">
                         ${productInfo.title}
                      </p>
                      
                    </div>
                  </div>
                  <div>
                    <p> USD ${productInfo.variants[0]['price']}</p>
                  </div>
                </div>
              </div>`);
            // save prodcut id as global variable 
            currentProductId = productInfo.id

            $('#subTotal').text(productInfo.variants[0]['price'])
            $('#totalAmount').text(productInfo.variants[0]['price'])
            // append hidden input values required for backend 
            $('#variant_id').val(productInfo.variants[0]['id'])
            $('#title').val(productInfo.title)
            $('#priceHidden').val(productInfo.variants[0]['price'])
            $('#quantityHidden').val(2)
            $('#grams').val(productInfo.variants[0]['grams'])
            // });
        } else {
            console.log('No product data found.');
        }
    },
    error: function (xhr, status, error) {
        console.error('AJAX Request Error:', error);
    }
});
// Make the AJAX GET request to bring product details to page ends

// loader and timimg variables 
$('#loader').show()
let typingTimer;
beingCountriesStateData();
var countryJson;
var currentProductId;
var currentCustomerId;
//on page load fetch countries and states
function beingCountriesStateData() {
    // call ajax for appending coutries and states from DB 
    $.ajax({
        type: 'GET',
        url: 'http://localhost/shopify-backend/public/api/bring-countries-states-data',
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function (data) {
            if (data) {
                console.log(data);
                countryJson = data;
                // Empty the select to ensure no duplicates are appended
                $('#address1_country').empty();

                // Append the countries to the select
                $.each(countryJson, function (index, country) {
                    $('#address1_country').append($('<option>', {
                        value: country.iso, // assuming you want to use the ISO code as the value
                        text: country.name
                    }));
                    $('#address2_country').append($('<option>', {
                        value: country.iso, // assuming you want to use the ISO code as the value
                        text: country.name
                    }));
                });
                // Add a "Select Country" option at the beginning
                // $('#address1_country').prepend($('<option>', {
                //     value: 'null',
                //     text: 'Select Country',
                //     selected: 'selected'
                // }));

                // Trigger the change event to load initial states for the initially selected country
                $('#address1_country').trigger('change');
                $('#address2_country').trigger('change');
            }
            else {
                console.log('error');
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Request Error:', error);
        }
    });
}
// handle function on country change to append states 
$('#address1_country').change(function () {
    var selectedCountryIso = $(this).val(); // Get selected country's iso if null return from here
    if (selectedCountryIso == 'null') {
        return;
    }
    // Find the country object
    var selectedCountry = countryJson.find(function (country) {
        return country.iso === selectedCountryIso;
    });

    if (selectedCountry) {
        // Empty states dropdown
        $('#address1_provice').empty();

        // Append states for selected country
        $.each(selectedCountry.states, function (index, state) {
            $('#address1_provice').append($('<option>', {
                value: state.name, // usually we use the ID for the value
                text: state.name
            }));
        });

        // append selected option to select 
        $('#address1_provice').prepend($('<option>', {
            value: 'null',
            text: 'Select State',
            selected: 'selected'
        }));
    }

    var selectedCountryCode = $(this).val();

    // Use the selected country code to find the corresponding shipping rate
    findShippingRateByCountry(selectedCountryCode);

});
// handle when billing country is changed, append states 
$('#address2_country').change(function () {
    var selectedCountryIso = $(this).val(); // Get selected country's iso if null return from here
    if (selectedCountryIso == 'null') {
        return;
    }
    // Find the country object
    var selectedCountry = countryJson.find(function (country) {
        return country.iso === selectedCountryIso;
    });

    if (selectedCountry) {
        // Empty states dropdown
        $('#address2_provice').empty();

        // Append states for selected country
        $.each(selectedCountry.states, function (index, state) {
            $('#address2_provice').append($('<option>', {
                value: state.name, // usually we use the ID for the value
                text: state.name
            }));
        });

        // append selected option to select 
        $('#address2_provice').prepend($('<option>', {
            value: 'null',
            text: 'Select State',
            selected: 'selected'
        }));
    }
});
// When user changes the country selection ends

// handle function on country change to append states 
$('#address1_provice').change(function () {
    var seelctedState = $(this).val(); // Get selected country's iso
    if (seelctedState == 'null') {
        return;
    }
    var selectedCountryCode = $('#address1_country').val();
    console.log('state changed')
    // Use the selected country code to find the corresponding shipping rate
    findShippingRateByCountry(selectedCountryCode);

});
// Function to find the shipping rate for a given country code starts
function findShippingRateByCountry(countryCode) {
    var shippingData;
    // call ajax for fetching shipping details 
    $.ajax({
        type: 'POST',
        url: 'http://localhost/shopify-backend/public/api/bring-shipping-details',
        data: {

        }, // Pass the FormData object directly
        processData: false, // Prevent jQuery from processing the data
        contentType: false, // Prevent jQuery from setting the content type
        dataType: 'json',
        success: function (data) {
            shippingData = data.body;
            var found = false; // Flag to check if the desired entry is found.

            for (var i = 0; i < shippingData.shipping_zones.length; i++) {
                var countries = shippingData.shipping_zones[i].countries;
                for (var j = 0; j < countries.length; j++) {
                    if (countries[j].code === countryCode) {
                        if (countries[j].provinces.length > 0) {
                            // Iterating through all provinces since we're not sure which index may satisfy our condition.
                            for (var k = 0; k < countries[j].provinces.length; k++) {

                                if (countries[j].provinces[k].name == $('#address1_provice').val()) {
                                    var result = {
                                        countryName: countries[j].name,
                                        tax: countries[j].tax,
                                        tax_name: countries[j].tax_name,
                                        shippingName: shippingData.shipping_zones[i].price_based_shipping_rates[0].name,
                                        shippingPrice: shippingData.shipping_zones[i].price_based_shipping_rates[0].price,
                                    };
                                    appendResultofAPIToShippingMethods(result);
                                    found = true; // Setting the flag as true as we've found the desired entry.
                                    break; // Exiting the provinces loop as we found the relevant province.
                                }
                            }
                            if (found) break; // If found in provinces, no need to continue the outer loop.
                        } else {
                            // No provinces available for this country entry.
                            var result = {
                                countryName: countries[j].name,
                                tax: countries[j].tax,
                                tax_name: countries[j].tax_name,
                                shippingName: shippingData.shipping_zones[i].price_based_shipping_rates[0].name,
                                shippingPrice: shippingData.shipping_zones[i].price_based_shipping_rates[0].price,
                            };
                            appendResultofAPIToShippingMethods(result);
                            found = true; // Setting the flag as true since we've processed this entry.
                            break; // Exiting the countries loop.
                        }
                    }
                }
                if (found) break; // If found in countries, no need to continue with other shipping zones.
            }

            // If after checking every possibility, no match is found, you might want to handle that case here.
            if (!found) {
                restOfWorldFound = false;
                for (var i = 0; i < shippingData.shipping_zones.length; i++) {
                    if (shippingData.shipping_zones[i].name === "Rest of World") {
                        var result = {
                            countryName: countryCode,
                            tax: countries[0].tax,
                            tax_name: countries[0].tax_name,
                            shippingName: shippingData.shipping_zones[i].price_based_shipping_rates[0].name,
                            shippingPrice: shippingData.shipping_zones[i].price_based_shipping_rates[0].price,
                        };
                        appendResultofAPIToShippingMethods(result);
                        restOfWorldFound = true;
                        break;
                    }
                    else {
                        // Handle the scenario when no matching country/province was found. 
                        $('#shippingMethodDiv').html(``)
                        $('#shippingMethodDiv').append(` <div class="ship-pra">
                            <div class="" style="display: flex;justify-content:space-between; font-size: 18px">
                            No matching shipping zone found Please add complete address or Change shipping Zone.
                            </div>
                            
                        </div>`)
                    }
                }

            }

        },
        error: function (xhr, status, error) {
            console.error('AJAX Request Error:', error);
        }
    });

}
// Function to find the shipping rate for a given country code ends
function appendResultofAPIToShippingMethods(result) {
    console.log(result);
    if (result) {
        var countryName = result.countryName;
        var shippingName = result.shippingName;
        var shippingPrice = parseFloat(result.shippingPrice);
        var tax = parseFloat(result.tax);
        var taxName = (result.tax_name);

        // Now you have the country name, shipping name, and price
        $('#shippingMethodDiv').html(``)
        $('#shippingMethodDiv').append(` <div class="ship-pra">
        <div class="" style="display: flex;justify-content:space-between; font-size: 20px">
        <div>${shippingName} <br />
        <span style="margin-left:5px">(${countryName})</span>
        </div>
        <div id="shippingPrice">
        <span>${shippingPrice}</span> <br />
        <span>+(${tax} ${taxName})</span>
        </div>
        </div> 
        </div>`)
        totalShippingPrice = tax + shippingPrice;
        $('#shippingPriceProduct').html(totalShippingPrice.toFixed(2))
        subTotalPrice = parseFloat($('#subTotal').text())
        totalPrice = totalShippingPrice + subTotalPrice;
        $('#totalAmount').text((totalShippingPrice + subTotalPrice).toFixed(2))
        $('#tax_price').val(tax)
        $('#tax_rate').val(tax)
        $('#tax_title').val(taxName)
        $('#totalAmountHidden').val(totalPrice)
        $('#shipping_name').val(shippingName)
        $('#shipping_price').val(shippingPrice)

    } else {
        console.error('Shipping rate not found for selected country or "Rest of World": ' + countryName);
    }
}

// check for customers details and if exists fetch data function starts
function checkCustomerDetails() {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(function () {
        var formData = new FormData(document.getElementById('order-form'));
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: 'http://localhost/shopify-backend/public/api/bring-customer-details',
            data: formData,     // Pass the FormData object directly
            processData: false, // Prevent jQuery from processing the data
            contentType: false, // Prevent jQuery from setting the content type
            dataType: 'json',
            success: function (data) {
                if (data.body.customers[0]) {
                    console.log('filling data....');
                    response = data.body.customers[0].addresses[0];
                    currentCustomerId = data.body.customers[0].id;
                    $('#address1_country').val(response.country_code)
                    $('#address_first_name').val(response.first_name)
                    $('#address_last_name').val(response.last_name)
                    $('#address').val(response.address1)
                    $('#city').val(response.city)
                    $('#address1_provice').val(response.province)
                    $('#zip_code').val(response.zip)
                    $('#emailInfo').html('<p style= color:green>Data Fetched Completed.</p>');
                }
                else {
                    console.log('else');
                    $('#emailInfo').html('<p style= color:red>No Record against Email. New Record will be inserted.</p>');

                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Request Error:', error);
            }
        });
    }, 5000);
}
// check for customersd details and if exists fetch data function ends

//  discount functionality function which changes subtotal value starts
function checkForDiscount() {
    console.log('hi');

    $.ajax({
        type: 'POST',
        url: 'http://localhost/shopify-backend/public/api/check-product-discount',
        data: {
            discount: $('#discount').val()
        }, // Pass the FormData object directly 
        dataType: 'json',
        success: function (data) {
            if (data != 'Code Not Matched') {
                console.log(data);

                // Assuming 'response' is the JSON object you received from the API.
                var response = data;

                // Current date for comparison
                var currentDate = new Date();

                // Parse necessary dates
                var startsAt = new Date(response.body.price_rule.starts_at);
                var endsAt = response.body.price_rule.ends_at ? new Date(response.body.price_rule.ends_at) : null;

                // The key for storing usage limit and customer application limit
                var usageLimitKey = 'usageLimit' + response.body.price_rule.id;
                var customerAppliedKey = 'customerApplied' + response.body.price_rule.id;
                $('#discountDiv').text("");
                $('#discountDivSuccess').text("");
                if (response.body.price_rule.entitled_product_ids.length > 0 && !response.body.price_rule.entitled_product_ids.includes(currentProductId)) {
                    $('#discountDiv').text("Coupon is not applicable for this product.*");
                } else if (startsAt > currentDate || (endsAt !== null && endsAt < currentDate)) {
                    $('#discountDiv').text("Coupon is expired.*");
                } else if (parseInt(localStorage.getItem(usageLimitKey)) >= response.body.price_rule.usage_limit) {
                    $('#discountDiv').text("Coupon usage limit has been reached.*");
                } else if (response.body.price_rule.once_per_customer && localStorage.getItem(customerAppliedKey)) {
                    $('#discountDiv').text("Coupon can be applied once per customer and has already been used.*");
                }
                else if (response.body.price_rule.prerequisite_customer_ids.length > 0 && !response.body.price_rule.prerequisite_customer_ids.includes(currentCustomerId)) {
                    $('#discountDiv').text("Coupon is not applicable for this Customer.*");
                } else {
                    // If we passed all checks, apply the coupon

                    // Decreasing the usage limit and storing the new value
                    var newUsageLimit = (parseInt(localStorage.getItem(usageLimitKey)) || response.body.price_rule.usage_limit) - 1;
                    localStorage.setItem(usageLimitKey, newUsageLimit);

                    // If applicable, marking that the coupon has been used by this customer
                    if (response.body.price_rule.once_per_customer) {
                        localStorage.setItem(customerAppliedKey, 'true');
                    }


                    var discount = parseFloat(response.body.price_rule.value);
                    var subtotal = parseFloat($('#subTotal').text());
                    $('#discountAmount').text((discount).toFixed(2))
                    $('#discountDivSuccess').text("Coupon applied successfully.");
                    // Get the discount from the 'data' variable
                    // Check if 'subtotal' and 'discount' are valid numbers

                    // Perform the calculation if both 'subtotal' and 'discount' are valid numbers
                    var amountAfterDiscount = parseFloat(subtotal + discount);
                    var shippingPrice = parseFloat($('#shippingPriceProduct').text())
                    var amountAfterDiscount = amountAfterDiscount + shippingPrice;
                    $('#totalAmountHidden').val(amountAfterDiscount)
                    $('#totalAmount').text(amountAfterDiscount.toFixed(2)); // Assuming you want to display 2 decimal places

                    console.log('type ' + response.body.price_rule.value_type + 'amount ' + response.body.price_rule.value + 'code ' + $('#discount').val());
                    $('#discount_type').val(response.body.price_rule.value_type)
                    $('#discount_amount').val(-(response.body.price_rule.value))
                    $('#discount_code').val($('#discount').val())
                }

            } else if (data == 'Code Not Matched') {
                $('#discountDiv').text("Discount Code is Incorrect.*");
            }
            else {
                $('#discountDiv').text("API Response Format is not Correct.*");
            }

        },
        error: function (xhr, status, error) {
            console.error('AJAX Request Error:', error);
        }
    });
}
//  discount functionality function starts which changes subtotal value ends

// main function to create order/customer and complete order starts
function createOrder() {
    var formData = new FormData(document.getElementById('order-form'));
    console.log(formData);
    $.ajax({
        type: 'POST',
        url: 'http://localhost/shopify-backend/public/api/create-shopify-order',
        data: formData, // Pass the FormData object directly
        processData: false, // Prevent jQuery from processing the data
        contentType: false, // Prevent jQuery from setting the content type
        dataType: 'json',
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status, error) {
            console.error('AJAX Request Error:', error);
        }
    });
}
// main function to create order/customer and complete order ends
