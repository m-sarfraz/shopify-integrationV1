<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>ASB</title>
  <link rel="stylesheet" href="{{ asset('css/sop/asb.blade.css') }}">
</head>

<body>
  <div class="page-asb__wrapper">
    <!-- page 1 -->
    <div class="page-asb">
      <div class="page-asb__container">
        <header class="page-asb__header">
          <div class="page-asb__cols-2 col-between col-item-center">
            <div class="page-asb__brand">
              <div class="page-asb__arrow">
                <img  class="page-asb__arrow-img" src="{{ asset('images/sop/asb.arrow.blade.png') }}" alt="">
              </div>
              <div class="page-asb__title-box">
                <h1 class="page-asb__title">Personal Finance</h1>
                <h2 class="page-asb__subtitle">Application Form</h2>
              </div>
            </div>
            <div class="page-asb__logo">
              <img src="{{ asset('images/sop/asb.blade.png') }}" alt="">
            </div>
          </div>
        </header>
        <div class="page-asb__content">
          <form action="/action_page.php">
            <div class="page-asb__form">

              <div class="flex items-center bg-[#E6E7E9] py-2 px-3">
                <div class="flex-1">
                  <p class="mb__1"><strong>For Bank use Only</strong></p>
                  <div class="asb-input__checkbox-group">
                    <label class="asb-input__checkbox-label">Joint Account
                      <input class="asb-input__checkbox-input" type="checkbox">
                      <span class="asb-input__checkmark"></span>
                    </label>
                  </div>
                </div>

                <div class="flex-none w-[25%] mr__6">
                  <label for="">Number of Signatures Required</label>
                  <div class="asb-input__col-box">
                    <input class="asb-form__input w-full" type="text" name="">
                  </div>
                </div>

                <div>
                  <label for="">ASB Account Number</label>
                  <div class="asb-input__col-box">
                    <input class="asb-form__input asb-input__col-16" type="text" name="" placeholder="123">
                    <div>
                      <span class="asb-input-box asb-input-box-1"></span>
                      <span class="asb-input-box asb-input-box-2"></span>
                      <span class="asb-input-box asb-input-box-3"></span>
                      <span class="asb-input-box asb-input-box-4"></span>
                      <span class="asb-input-box asb-input-box-5"></span>
                      <span class="asb-input-box asb-input-box-6"></span>
                      <span class="asb-input-box asb-input-box-7"></span>
                      <span class="asb-input-box asb-input-box-8"></span>
                      <span class="asb-input-box asb-input-box-9"></span>
                      <span class="asb-input-box asb-input-box-10"></span>
                      <span class="asb-input-box asb-input-box-11"></span>
                      <span class="asb-input-box asb-input-box-12"></span>
                      <span class="asb-input-box asb-input-box-13"></span>
                      <span class="asb-input-box asb-input-box-14"></span>
                      <span class="asb-input-box asb-input-box-15"></span>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class=""><strong>1. Customer/Shareholder/Trustee details:</strong> This information will be treated
                  in the strictestconfidence.</p>
              </div>

              <div class="page-asb__cols-2 pt__3">
                <div class="page-asb__col-1/2 pr__4">
                  <h4 class="page-asb__heading-4">Applicant</h4>

                  <div class="box__flex">
                    <div class="">
                      <p>Title</p>
                      <div class="box__flex">
                        <div class="asb-input__col-box mr__1">
                          <input class="asb-form__input asb-input__col-1" type="text" name="" placeholder="Mr">
                        </div>
                        <div class="asb-input__col-box mr__1">
                          <input class="asb-form__input asb-input__col-28px" type="text" name="" placeholder="Mrs">
                        </div>
                        <div class="asb-input__col-box mr__1">
                          <input class="asb-form__input asb-input__col-28px" type="text" name="" placeholder="Miss">
                        </div>
                        <div class="asb-input__col-box mr__1">
                          <input class="asb-form__input asb-input__col-1" type="text" name="" placeholder="Ms">
                        </div>
                      </div>
                    </div>
                    <div class="flex__1">
                      <p>Other</p>
                      <div class="asb-input__col-box">
                        <input class="asb-form__input asb-form__input-full" type="text" name="" placeholder="Mr">
                      </div>
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Surname</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>First Names</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <label for="">Date of Birth</label>
                    <div>
                      <div class="asb-input__col-box box-inline">
                        <input class="asb-form__input asb-input__col-8" type="text" name="" placeholder="DDMMYYYY">
                        <div>
                          <span class="asb-input-box asb-input-box-1"></span>
                          <span class="asb-input-box asb-input-box-2"></span>
                          <span class="asb-input-box asb-input-box-3"></span>
                          <span class="asb-input-box asb-input-box-4"></span>
                          <span class="asb-input-box asb-input-box-5"></span>
                          <span class="asb-input-box asb-input-box-6"></span>
                          <span class="asb-input-box asb-input-box-7"></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Number of dependants and ages</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Home address (if less than 12 months please provide previous address)</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="page-asb__cols-10 page-asb__border">
                      <div class="page-asb__col-4/10">
                        <div class="box__flex">
                          <div class="flex__1 pl__1 bg-white">
                            <p class="leading-[24px]">Postcode:</p>
                          </div>
                          <div class="flex-none">
                            <input class="asb-form__input-noborder" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-asb__col-6/10">
                        <div class="box__flex">
                          <div class="flex-none w-auto pl__1 bg-white">
                            <p class="leading-[24px]">Duration at address:</p>
                          </div>
                          <div class="flex__1">
                            <input class="asb-form__input-noborder" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Previous address</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="page-asb__cols-10 page-asb__border">
                      <div class="page-asb__col-4/10">
                        <div class="box__flex">
                          <div class="flex__1 pl__1 bg-white">
                            <p class="leading-[24px]">Postcode:</p>
                          </div>
                          <div class="flex-none">
                            <input class="asb-form__input-noborder" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-asb__col-6/10">
                        <div class="box__flex">
                          <div class="flex-none w-auto pl__1 bg-white">
                            <p class="leading-[24px]">Duration at address:</p>
                          </div>
                          <div class="flex__1">
                            <input class="asb-form__input-noborder" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="page-asb__cols-2 pt__2">
                    <div class="page-asb__col-1/2">
                      <div class="">
                        <p>Telephone home</p>
                        <div class="asb-input__col-box">
                          <input class="asb-form__input asb-form__input-full" type="text" name="">
                        </div>
                      </div>
                    </div><!-- end page-asb__col-1/2 -->
                    <div class="page-asb__col-1/2">
                      <div class="">
                        <p>Work</p>
                        <div class="asb-input__col-box">
                          <input class="asb-form__input asb-form__input-full" type="text" name="">
                        </div>
                      </div>
                    </div><!-- end page-anz__col-1/2 -->
                  </div>

                  <div class="pt__2">
                    <p>Mobile</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Email</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Occupation</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Employer (if applicable)</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                </div><!-- end page-asb__col-1/2 -->
                <div class="page-asb__col-1/2 pl__4">
                  <h4 class="page-asb__heading-4">Joint Applicant</h4>

                  <div class="box__flex">
                    <div class="">
                      <p>Title</p>
                      <div class="box__flex">
                        <div class="asb-input__col-box mr__1">
                          <input class="asb-form__input asb-input__col-1" type="text" name="" placeholder="Mr">
                        </div>
                        <div class="asb-input__col-box mr__1">
                          <input class="asb-form__input asb-input__col-28px" type="text" name="" placeholder="Mrs">
                        </div>
                        <div class="asb-input__col-box mr__1">
                          <input class="asb-form__input asb-input__col-28px" type="text" name="" placeholder="Miss">
                        </div>
                        <div class="asb-input__col-box mr__1">
                          <input class="asb-form__input asb-input__col-1" type="text" name="" placeholder="Ms">
                        </div>
                      </div>
                    </div>
                    <div class="flex__1">
                      <p>Other</p>
                      <div class="asb-input__col-box">
                        <input class="asb-form__input asb-form__input-full" type="text" name="" placeholder="Mr">
                      </div>
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Surname</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>First Names</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <label for="">Date of Birth</label>
                    <div>
                      <div class="asb-input__col-box box-inline">
                        <input class="asb-form__input asb-input__col-8" type="text" name="" placeholder="DDMMYYYY">
                        <div>
                          <span class="asb-input-box asb-input-box-1"></span>
                          <span class="asb-input-box asb-input-box-2"></span>
                          <span class="asb-input-box asb-input-box-3"></span>
                          <span class="asb-input-box asb-input-box-4"></span>
                          <span class="asb-input-box asb-input-box-5"></span>
                          <span class="asb-input-box asb-input-box-6"></span>
                          <span class="asb-input-box asb-input-box-7"></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Number of dependants and ages</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Home address (if less than 12 months please provide previous address)</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="page-asb__cols-10 page-asb__border">
                      <div class="page-asb__col-4/10">
                        <div class="box__flex">
                          <div class="flex__1 pl__1 bg-white">
                            <p class="leading-[24px]">Postcode:</p>
                          </div>
                          <div class="flex-none">
                            <input class="asb-form__input-noborder" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-asb__col-6/10">
                        <div class="box__flex">
                          <div class="flex-none w-auto pl__1 bg-white">
                            <p class="leading-[24px]">Duration at address:</p>
                          </div>
                          <div class="flex__1">
                            <input class="asb-form__input-noborder" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Previous address</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text"
                        name="">
                    </div>
                    <div class="page-asb__cols-10 page-asb__border">
                      <div class="page-asb__col-4/10">
                        <div class="box__flex">
                          <div class="flex__1 pl__1 bg-white">
                            <p class="leading-[24px]">Postcode:</p>
                          </div>
                          <div class="flex-none">
                            <input class="asb-form__input-noborder" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-asb__col-6/10">
                        <div class="box__flex">
                          <div class="flex-none w-auto pl__1 bg-white">
                            <p class="leading-[24px]">Duration at address:</p>
                          </div>
                          <div class="flex__1">
                            <input class="asb-form__input-noborder" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="page-asb__cols-2 pt__2">
                    <div class="page-asb__col-1/2">
                      <div class="">
                        <p>Telephone home</p>
                        <div class="asb-input__col-box">
                          <input class="asb-form__input asb-form__input-full" type="text" name="">
                        </div>
                      </div>
                    </div><!-- end page-asb__col-1/2 -->
                    <div class="page-asb__col-1/2">
                      <div class="">
                        <p>Work</p>
                        <div class="asb-input__col-box">
                          <input class="asb-form__input asb-form__input-full" type="text" name="">
                        </div>
                      </div>
                    </div><!-- end page-anz__col-1/2 -->
                  </div>

                  <div class="pt__2">
                    <p>Mobile</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Email</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Occupation</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Employer (if applicable)</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

    <!-- page 2 -->
    <div class="page-asb">
      <div class="page-asb__container">
        <div class="page-asb__content">
          <form action="/action_page.php">
            <div class="page-asb__form">

              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class="">1. Customer/Shareholder/Trustee details: (continued)</p>
              </div>

              <div class="page-asb__cols-2">
                <div class="page-asb__col-1/2 pr__4">
                  <div class="pt__2">
                    <p>If less than 12 months, who was your previous employer
                      and how long did you work there?</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Type of residence</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="" placeholder="Other">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Country(s) of Citizenship</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                </div>
                <div class="page-asb__col-1/2 pl__4">
                  <div class="pt__2">
                    <p>If less than 12 months, who was your previous employer
                      and how long did you work there?</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Type of residence</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="" placeholder="Other">
                    </div>
                  </div>

                  <div class="pt__2">
                    <p>Country(s) of Citizenship</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="pt__4">
                <p><strong>Your tax residency:</strong></p>
                <p>Please read the "Tax Residency Self-certification" information on page 6 before filling in the
                  details in the section below.</p>
              </div>

              <div class="pt__2">
                <p>Applicant:</p>
              </div>

              <div>
                <table class="asb-table">
                  <thead>
                    <tr>
                      <th>Country/Jurisdiction(s) of tax residence</th>
                      <th>Taxpayer Identification Number (TIN)</th>
                      <th>Enter Reason A,B or C if no TIN is available</th>
                      <th>If you have selected Reason B, please explain why a TIN was not issued to you.</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class="">2. Finance details</p>
              </div>

              <div class="pt__4">
                <p>What would you like to apply for:</p>
              </div>

              <div class="flex items-center space-x-6 pt__3">
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">Personal Loan
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">Credit Card
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">Overdraft
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">Home Load
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
              </div>

              <div class="page-asb__cols-2">
                <div class="page-asb__col-1/2 pr__4">
                  <div class="pt__2">
                    <p>What are you for (e.g. to buy a car)?</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                </div>
                <div class="page-asb__col-1/2 pl__4">
                  <div class="pt__2">
                    <p>How much would you like to borrow? Or for Credit Cards what limit would you like?</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="pt__2">
                <p>For home loans and personal loans, how long do you require your loan for (months or years)?</p>
                <div class="asb-input__col-box">
                  <input class="asb-form__input asb-form__input-full" type="text" name="">
                </div>
              </div>

              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class="">3. For Home Loans only</p>
              </div>

              <div class="pt__4">
                <p>How much deposit do you have and what is its source (evidence of deposit is required)?</p>
              </div>

              <div class="page-asb__cols-2 pt__3">
                <div class="page-asb__col-1/2 pr__4">
                  <table class="asb-table">
                    <thead>
                      <tr>
                        <th>Source</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Savings</td>
                        <td>$</td>
                      </tr>
                      <tr>
                        <td>KiwiSaver</td>
                        <td>$</td>
                      </tr>
                      <tr>
                        <td>Subsidy</td>
                        <td>$</td>
                      </tr>
                      <tr>
                        <td>Gifted</td>
                        <td>$</td>
                      </tr>
                      <tr>
                        <td>Borrowed</td>
                        <td>$</td>
                      </tr>
                      <tr>
                        <td>Proceeds of property sale</td>
                        <td>$</td>
                      </tr>
                      <tr>
                        <td>Other</td>
                        <td>$</td>
                      </tr>
                      <tr>
                        <td
                          style="background: white;border-left-color:transparent;border-bottom-color:transparent;text-align:right;">
                          Total</td>
                        <td style="text-align:right;">0</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="pt__4">
                <p><strong>Security</strong></p>
                <p>Does this loan involve a guarantor?</p>
              </div>

              <div class="flex items-center space-x-10 pt__3">
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">Yes
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">No
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
              </div>

              <div class="pt__4">
                <p><strong>If security for the loan is a dwelling or vacant land give details here:</strong></p>
                <p>Address of property</p>
              </div>

              <div class="asb-input__col-box">
                <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text" name="">
              </div>

              <div class="asb-input__col-box">
                <input class="asb-form__input asb-form__input-full" type="text" name="">
              </div>

              <div class="pt__4">
                <p>Address(es) of additional security property(ies)</p>
              </div>

              <div class="asb-input__col-box">
                <input class="asb-form__input asb-form__input-full" style="border-bottom: none;" type="text" name="">
              </div>

              <div class="asb-input__col-box">
                <input class="asb-form__input asb-form__input-full" type="text" name="">
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

    <!-- page 3 -->
    <div class="page-asb">
      <div class="page-asb__container">
        <div class="page-asb__content">
          <form action="/action_page.php">
            <div class="page-asb__form">

              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class="">4. Current income and commitment details</p>
              </div>

              <div class="pt__4">
                <table class="asb-table">
                  <thead>
                    <tr>
                      <th>Gross annual income</th>
                      <th>Applicant</th>
                      <th>Joint Applicant</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Total annual income from all sources (before tax). Please provide proof ot ncome, Lee payslips
                      </td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Kiwisaver contribution(%)</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="pt__2">
                <table class="asb-table">
                  <thead>
                    <tr>
                      <th>Monthly income</th>
                      <th>Applicant</th>
                      <th>Joint Applicant</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Salary/wages (before tax)</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Rent received</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Interest/dividends</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Self employed/business income (including drawings and any net trading surplus). Latest
                        financial statements to be
                        provided.</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Other regular income (including part time employment, commission or benefits)</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="border-top-width: 2px;border-bottom-width: 2px;text-align:left;">SUB TOTALS</td>
                      <td style="border-top-width: 2px;border-bottom-width: 2px;text-align:right;">0</td>
                      <td style="border-top-width: 2px;border-bottom-width: 2px;text-align:right;">0</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="page-asb__cols-2 col-end pt__3">
                <div class="page-asb__col-1/2">
                  <table class="asb-table" style="border-width: 2px;">
                    <tbody>
                      <tr>
                        <td class="bg-white">COMBINED TOTAL GROSS MONTHLY INCOME</td>
                        <td style="text-align:right;width:104px;">0</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="page-asb__cols-2 pt__2">
                <div class="page-asb__col-1/2 pr__4">
                  <div class="pt__2">
                    <table class="asb-table">
                      <thead>
                        <tr>
                          <th colspan="3">Liabilities (show amounts to nearest $100)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="asb-table__even-bg" colspan="3">
                            <p>Are you currently acting as guarantor for any loan?</p>
                            <div class="flex items-center space-x-4 pt__1">
                              <div class="asb-input__checkbox-group">
                                <label class="asb-input__checkbox-label">No
                                  <input class="asb-input__checkbox-input" type="checkbox">
                                  <span class="asb-input__checkmark"></span>
                                </label>
                              </div>
                              <div class="asb-input__checkbox-group">
                                <label class="asb-input__checkbox-label">Yes - please give details below
                                  <input class="asb-input__checkbox-input" type="checkbox">
                                  <span class="asb-input__checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" style="padding: 0;">
                            <div class="box__flex">
                              <div class="pl__1 bg-white">
                                <p class="leading-[24px]">Amount:</p>
                              </div>
                              <div class="flex__1">
                                <input class="asb-form__input-noborder" type="text" name="">
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="asb-table__even-bg">Money on mortgages -
                            List names ot organisations/banks
                          </td>
                          <td class="asb-table__even-bg">Repayment amount</td>
                          <td class="asb-table__even-bg">Amount owing</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="asb-table__even-bg">Overdrafts</td>
                          <td class="asb-table__even-bg">Credit limit</td>
                          <td class="asb-table__even-bg">Amount owing</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="asb-table__even-bg">Personal loan</td>
                          <td class="asb-table__even-bg">Repayment amount</td>
                          <td class="asb-table__even-bg">Amount owing</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="asb-table__even-bg">Owed to hire purchase companies</td>
                          <td class="asb-table__even-bg">Repayment amount</td>
                          <td class="asb-table__even-bg">Amount owing</td>
                        </tr>
                        <tr>
                          <td style="padding: 0;">
                            <div class="box__flex">
                              <div class="flex__1 pl__1 bg-white">
                                <p class="leading-[24px]">1. Cornpany: Payments:</p>
                              </div>
                              <div class="flex-none">
                                <input class="asb-form__input-noborder" type="text" name="">
                              </div>
                            </div>
                          </td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td style="padding: 0;">
                            <div class="box__flex">
                              <div class="flex__1 pl__1 bg-white">
                                <p class="leading-[24px]">2. Company: Payments:</p>
                              </div>
                              <div class="flex-none">
                                <input class="asb-form__input-noborder" type="text" name="">
                              </div>
                            </div>
                          </td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="asb-table__even-bg">Other (Give details of any other money
                            owed to financial organisations, plus tax
                            owing, private loans, student loans, buy
                            now pay later schemes e.g. afterpay,
                            outstanding overdue accounts or commitments etc.)
                          </td>
                          <td class="asb-table__even-bg">Repayment amount</td>
                          <td class="asb-table__even-bg">Amount owing</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="bg-white" colspan="2">
                            TOTAL LIABILITIES (A)
                          </td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td class="bg-white" colspan="2">
                            Calculate the surplus by subtracting
                            Total Afrom Total B

                          </td>
                          <td>0</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="page-asb__col-1/2 pl__4">
                  <div class="pt__2">
                    <table class="asb-table">
                      <thead>
                        <tr>
                          <th colspan="4">Assets (show amounts to nearest $100)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="asb-table__even-bg" colspan="4">
                            <p>Real estate property owned</p>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="asb-table__even-bg">Regd/Govt
                            valuation
                          </td>
                          <td class="asb-table__even-bg">Valuation date</td>
                          <td class="asb-table__even-bg">&nbsp;</td>
                          <td class="asb-table__even-bg">Estimated market
                            value</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" class="asb-table__even-bg">Deposits and investments
                            (if ASB account - account number please)
                          </td>
                          <td class="asb-table__even-bg">Current balance</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" class="asb-table__even-bg">Life assurance/superannuation
                            Name of the company the policy or scheme with
                          </td>
                          <td class="asb-table__even-bg">Surrender value
                            (where known)</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" class="asb-table__even-bg">Vehicles (Show type -car, boat, caravan, trailer,
                            motorbike, etc.)
                          </td>
                          <td rowspan="2" class="asb-table__even-bg">Estimated market
                            value
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" class="asb-table__even-bg">Type and make</td>
                          <td class="asb-table__even-bg">Year</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" class="asb-table__even-bg">Furniture/personal effects</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3" class="asb-table__even-bg">Other - (Indude Shares and debentures,
                            plant/machinery,
                            livestock, farm produce, stock intrade, monies owed by debtors and any depsit paid for
                            property purchase)</td>
                          <td class="asb-table__even-bg">Estimated market
                            value
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="bg-white" colspan="3">
                            TOTAL ASSETS (B)
                          </td>
                          <td>0</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

    <!-- page 4 -->
    <div class="page-asb">
      <div class="page-asb__container">
        <div class="page-asb__content">
          <form action="/action_page.php">
            <div class="page-asb__form">
              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class="">4. Current income and commitment details (continued)</p>
              </div>

              <div class="pt__2">
                <table class="asb-table">
                  <thead>
                    <tr>
                      <th colspan="4">Monthly expense outgoings - Combine amounts if joint application (Expenses should
                        reflect what you would expect to pay if you get this lending, and 12
                        months after)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="asb-table__even-bg" rowspan="5">
                        <p>Household</p>
                      </td>
                      <td class="asb-table__bg-white">Food</td>
                      <td class="asb-table__bg-white">Groceries, food, meat and vegetables.</td>
                      <td class="w-[10%]">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Utilities</td>
                      <td class="asb-table__bg-white">Phone (landline/mobile), power, internet, gas, water bills.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Rates</td>
                      <td class="asb-table__bg-white">Owner occupied property rates.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Transport</td>
                      <td class="asb-table__bg-white">Parking, petrol/diesel, wof, rego, vehicle servicing, public
                        transport.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Ongoing Household Expenses</td>
                      <td class="asb-table__bg-white">Regular household maintenance, lawnmowing, cleaners.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__even-bg" rowspan="5">
                        <p>Personal</p>
                      </td>
                      <td class="asb-table__bg-white">Childcare</td>
                      <td class="asb-table__bg-white">Daycare, after school care, babysitting, au pair.</td>
                      <td class="w-[10%]">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Healthcare/ Medical Care</td>
                      <td class="asb-table__bg-white">Doctors, dentists, prescriptions, physio.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Personal Care and Clothing</td>
                      <td class="asb-table__bg-white">Clothes, footwear, personal care suchas hairdressing.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Public education</td>
                      <td class="asb-table__bg-white">Public school fees/donations.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Private education</td>
                      <td class="asb-table__bg-white">Private school fees/donations. We will ask for evidence of this
                        expense e.g school
                        fee's posted on website ora bill.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__even-bg" rowspan="4">
                        <p>Insurance</p>
                      </td>
                      <td class="asb-table__bg-white">House and Contents Insurance</td>
                      <td class="asb-table__bg-white">Premiums for house and contents insurance.</td>
                      <td class="w-[10%]">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Vehicle Insurance</td>
                      <td class="asb-table__bg-white">Cars, boats, trailers, motorcycles, jetskis, campervans etc.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Health/ Medical/ Funeral/ Pet
                        Insurance</td>
                      <td class="asb-table__bg-white">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Life and Disability Insurance</td>
                      <td class="asb-table__bg-white">Life, income, disability, trauma insurance.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__even-bg" rowspan="4">
                        <p>Disposable</p>
                      </td>
                      <td class="asb-table__bg-white">Savings/ Investments</td>
                      <td class="asb-table__bg-white">Regular savingsand investments that you are not willing togive up.
                      </td>
                      <td class="w-[10%]">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Entertainment and Recreation</td>
                      <td class="asb-table__bg-white">Pay TV and streaming, alcohol, restaurants, pubs clubs and bars,
                        takeaways, sport
                        registrations, hobbies, gym membership that you are unwilling to give up.
                      </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Tithing</td>
                      <td class="asb-table__bg-white">Regular religious/churchdonations. We will ask for evidence of
                        this expense.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="asb-table__bg-white">Other</td>
                      <td class="asb-table__bg-white">Any frequent or regular outgoings that are material to your
                        expenses and that you
                        are unwilling or unable togive up. We will ask for evidence ot this.</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="bg-white" colspan="3" style="padding-top: 8px;padding-bottom:8px">
                        TOTAL MONTHLY OUTGOINGS
                      </td>
                      <td>0</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

    <!-- page 5 -->
    <div class="page-asb pb__4">
      <div class="page-asb__container">
        <div class="page-asb__content">
          <form action="/action_page.php">
            <div class="page-asb__form">
              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class="">5. Privacy Act 2020</p>
              </div>

              <div class="pt__4 space-y-2">
                <p><strong>Pursuant to the PRIVACY ACT 2020 ASB Bank Limited ("ASB") advises that:</strong></p>
                <p>a) This Application collects personal information about you;</p>
                <p>b) The information is being collected to deter mine your eligibility for the credit you seek;</p>
                <p>c) The intended recipients of the information are ASB and other providers of credit, credit reference
                  agencies and previous and currentemployers;</p>
                <p>d) The information is being collected and held by ASB, PO Box 35, Auckland;</p>
                <p>e) Failure to provide this information or provision of incorrect information may result in your
                  application for credit being declined;</p>
                <p>f) You do have rights of access to, and correction of, this information to the extent that it is not
                  evaluative material pursuant to S. Privacy Act 2020.</p>
              </div>

              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class="">6. Customer authorisation and agreement</p>
              </div>

              <div class="pt__4">
                <ul class="list__disc">
                  <li>If the above information is being provided by someone other than the Applicant, l/we am authorised
                    to provide personal information on behalf of the Applicant and evidence of this authority is
                    provided.</li>
                  <li>l/We agree that all personal information held by ASB may be used by ASB for the purpose of mailing
                    to me/us/the Applicant information of any other ASB products or services.</li>
                  <li>l/We authorise the release to ASB at any time of all personal information held by:
                    <ul class="space-y-1">
                      <li>a) any other credit providers and credit reference agencies; and</li>
                      <li>b) any previous or current employer regarding my employment history and income.</li>
                    </ul>
                  </li>
                  <li>l/We authorise ASB to disclose to their credit providers, credit reference agencies and any other
                    party expressly authorised by me/us/the Applicant, at any time, my/our personal information held by
                    ASB.</li>
                  <li>l/We authorise ASB to obtain a personal credit and fraud check.</li>
                  <li>l/We authorise ASB's credit reference agency to:
                    <ul class="space-y-1">
                      <li>i) hold my/our personal information on its systems and use my/our personal information to
                        provide its credit reporting services;</li>
                      <li>ii) provide my/our personal information to its customers when they use its credit reporting
                        services.</li>
                    </ul>
                  </li>
                  <li>l/We authorise ASB to use its credit reference agency in the future for purposes related to the
                    provision of credit to me/us.</li>
                  <li>l/We authorise:
                    <ul class="space-y-1">
                      <li>i) ASB to give its credit reference agency information about any default in my/our payment
                        obligations to ASB;</li>
                      <li>ii) ASB's credit reference agency to give information about my/our default to its other
                        customers.</li>
                    </ul>
                  </li>
                  <li>l/We declare that the information contained in this application is true and correct.</li>
                  <li>l/We will advise ASB as soon as any of this information changes, including any change in my/our
                    tax residency status.</li>
                  <li>l/We have not withheld any information on my/our financial position or commitments that might
                    affect ASB's decision on this application.</li>
                  <li>This application is the property of ASB.</li>
                  <li>l/We acknowledge that ASB may supply upon request details of this application or the outstanding
                    balance to a guarantor or proposed guarantor.</li>
                  <li>The valuation report remains the propertyof ASB.</li>
                  <li>If ASB accepts this application, l/we nominate the following as the solicitors who will act both
                    for me/us and ASB (at my/our expense) to prepare the loan documents, settle the loan and register
                    the loan documents (if required).</li>
                  <li>l/We am not/are not an undischarged bankrupt nor am l/are we liable under any proceedings under
                    the Insolvency Act 2006 or its amendments.</li>
                  <li>ASB charge a home loan processing fee up to $400, personal loan processing fee of $99 and
                    overdraft establishment fee of $25.</li>
                  <li>l/We acknowledge that certain information contained in this form may be shared with the IRD and
                    that the IRD may then exchange this information with tax authorities of another country/jurisdiction
                    in which l/we may be tax resident.</li>
                </ul>
              </div>

              <div class="pt__4">
                <p><strong>I agree to obtain the following services:</strong></p>
              </div>

              <div class="flex items-center space-x-6 pt__3">
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">FastNet Classic
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">ASB TXT Banking
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">Alerts
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">FastPay
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
                <div class="asb-input__checkbox-group">
                  <label class="asb-input__checkbox-label">FastCash
                    <input class="asb-input__checkbox-input" type="checkbox">
                    <span class="asb-input__checkmark"></span>
                  </label>
                </div>
              </div>

              <div class="page-asb__cols-2 pt__3">
                <div class="page-asb__col-1/2 pr__4">
                  <div class="pt__2">
                    <p>Applicant's Name(please print)</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                  <div class="pt__2">
                    <p>Signature</p>
                    <div class="asb-input__col-box">
                      <textarea class="asb-form__textarea asb-form__input-full" name="" id="" cols="30"
                        rows="4"></textarea>
                    </div>
                  </div>
                  <div class="pt__2">
                    <label for="">Date</label>
                    <div>
                      <div class="asb-input__col-box box-inline">
                        <input class="asb-form__input asb-input__col-8" type="text" name="" placeholder="DDMMYYYY">
                        <div>
                          <span class="asb-input-box asb-input-box-1"></span>
                          <span class="asb-input-box asb-input-box-2"></span>
                          <span class="asb-input-box asb-input-box-3"></span>
                          <span class="asb-input-box asb-input-box-4"></span>
                          <span class="asb-input-box asb-input-box-5"></span>
                          <span class="asb-input-box asb-input-box-6"></span>
                          <span class="asb-input-box asb-input-box-7"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pt__2">
                    <p>Primary ID</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                  <div class="pt__2">
                    <p>Secondary ID</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>

                </div>
                <div class="page-asb__col-1/2 pl__4">
                  <div class="pt__2">
                    <p>Joint Applicant's Name(please print)</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                  <div class="pt__2">
                    <p>Signature</p>
                    <div class="asb-input__col-box">
                      <textarea class="asb-form__textarea asb-form__input-full" name="" id="" cols="30"
                        rows="4"></textarea>
                    </div>
                  </div>
                  <div class="pt__2">
                    <label for="">Date</label>
                    <div>
                      <div class="asb-input__col-box box-inline">
                        <input class="asb-form__input asb-input__col-8" type="text" name="" placeholder="DDMMYYYY">
                        <div>
                          <span class="asb-input-box asb-input-box-1"></span>
                          <span class="asb-input-box asb-input-box-2"></span>
                          <span class="asb-input-box asb-input-box-3"></span>
                          <span class="asb-input-box asb-input-box-4"></span>
                          <span class="asb-input-box asb-input-box-5"></span>
                          <span class="asb-input-box asb-input-box-6"></span>
                          <span class="asb-input-box asb-input-box-7"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pt__2">
                    <p>Primary ID</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                  <div class="pt__2">
                    <p>Secondary ID</p>
                    <div class="asb-input__col-box">
                      <input class="asb-form__input asb-form__input-full" type="text" name="">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

    <!-- page 6 -->
    <div class="page-asb">
      <div class="page-asb__container">
        <header class="page-asb__header">
          <div class="page-asb__cols-2 col-between col-item-center">
            <div class="page-asb__brand">
              <div class="page-asb__arrow">
                <img class="page-asb__arrow-img" src="{{ asset('images/sop/asb.arrow.blade.png') }}" alt="">
              </div>
              <div class="page-asb__title-box">
                <h1 class="page-asb__title-2">Tax Residency Self-Certification Information</h1>
              </div>
            </div>
            <div class="page-asb__logo">
              <img src="{{ asset('images/sop/asb.blade.png') }}" alt="">
            </div>
          </div>
        </header>
        <div class="page-asb__content">
          <form action="/action_page.php">
            <div class="page-asb__form">

              <div
                class="bg-[#FEC210] py-1 mt-6 relative before:absolute before:content-[''] before:w-6 before:h-full before:-left-6 before:top-0 before:bg-[#FEC210] before:z-0">
                <p class="">Please read the following information before completing the "Country/Jurisdiction(s) of Tax
                  Residence" details on Page 2</p>
              </div>

              <div class="pt__4">
                <p class="mb__2"><strong>Why do you need to provide this information?</strong></p>
                <p>The Tax Administration Act 1994 supports the implementation of the Common Reporting Standard (CRS)
                  and the Foreign Account Tax Compliance Act
                  (FATCA) in New Zealand. CRS and FATCA require certain New Zealand Financial Institutions to collect
                  and report particular infor mation about an Account
                  Holder's tax residence.
                </p>
              </div>

              <div class="pt__4">
                <p class="mb__2"><strong>What is tax residence?</strong></p>
                <p class="mb__2">Each country/jurisdiction has its own rules to define tax residence. Generally your
                  jurisdiction of
                  tax residence is the country where you have a permanent
                  place of abode. Special circumstances may cause you to be tax resident elsewhere or tax resident in
                  more than one country at the same time. If you are
                  a citizen of the United States (US) or a Green Card holder, you must indicate that you are a US tax
                  resident on this form. If your tax residence is located
                  outside of New Zealand, we may be legally obliged to pass on the information in this form and other
                  information with respect to your financial accounts to
                  the IRD. The IRD may then exchange this information with tax authorities of another
                  country/jurisdiction.
                </p>
                <p class="mb__2">If you are unsure about your tax residence, please contact your tax advisor.
                  Alternatively you can check the OECD website, which includes tax residence
                  information for a number of countries or the Inland Revenue website for further information on NZ tax
                  residence.</p>
                <p class="mb__2">Please note that as a Financial Institution, we are not allowed to give tax advice.</p>
              </div>

              <div class="pt__4">
                <p class="mb__2"><strong>What is a taxpayer identification number (TIN) or functional
                    equivalent?</strong></p>
                <p>A TIN or equivalent is a unique combination of letters or numbers assigned by a country/jurisdiction
                  to an individual and used to identify the individual for
                  the purposes of administering the tax laws of such country/jurisdiction. In New Zealand the TIN is
                  equivalent to the IRD number. Other examples of a TIN or
                  its equivalent for an individual include a social security/insurance number, citizen/personal
                  identification/service code/number, and resident registration
                  number.
                </p>
              </div>

              <div class="pt__4">
                <p class="mb__2"><strong>Completing the tax residence table in Section 1</strong></p>
                <p class="mb__2">In this table, please list all applicable country/jurisdiction(s) where you are tax
                  resident,
                  including New Zealand. For each country/jurisdiction, except New
                  Zealand, you will need to provide a taxpayer identification number (TIN) or equivalent.
                </p>
                <p class="mb__2">If a TIN is not available for that country/jurisdiction, use the appropriate reason A,
                  B or C. See below for details on each reason.</p>
                <p class="mb__2"><strong class="box-inline w-14">Reason A</strong> The country/jurisdiction where lam
                  tax resident
                  does not
                  issue a TIN to its residents</p>
                <p class="mb__2"><strong class="box-inline w-14">Reason B</strong> I have not been issued a TIN by my
                  country/jurisdiction
                  of tax residence (please include an explanation as to why a TIN was not issued to you in
                  the "Explanation for Reason B" column for the corresponding entry number)</p>
                <p class="mb__2"><strong class="box-inline w-14">Reason C</strong> The domestic law of the
                  country/jurisdiction
                  where lam
                  tax residentdoes not require the collection ofa TIN.</p>
              </div>

              <div class="pt__4">
                <p class="mb__2"><strong>Additional information</strong></p>
                <p>Based on the infor mation you provide us, we may contact you for further information.
                </p>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

  </div>

</body>

</html>