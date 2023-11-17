<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>BNZ</title>
  <link rel="stylesheet" href="{{ asset('css/sop/bnz.blade.css') }}">
</head>

<body>
  <div class="page-bnz__wrapper">
    <!-- page 1 -->
    <div class="page-bnz">
      <div class="page-bnz__container">
        <header class="page-bnz__header">
          <div class="page-bnz__cols-2 col-between col-item-center">
            <div class="page-bnz__brand">
              <h1 class="page-bnz__title">Statement of Position</h1>
            </div>
            <div class="page-bnz__logo">
              <img class="page-bnz__image" src="{{ asset('images/sop/bnz.blade.png') }}" alt="">
            </div>
          </div>
        </header>
        <div class="page-bnz__content">
          <form action="/action_page.php">
            <div class="page-bnz__form">

              <div class="page-bnz__box">
                <p>Please note that where there is more than one applicant but the applicants are not a couple
                  (married/engaged/defacto etc), Person 2 must complete a separate form.</p>
                <div class="page-bnz__section-title">
                  <p><strong>Section one -</strong> Please complete for all requests</p>
                </div>

                <div class="page-bnz__cols-2">
                  <div class="page-bnz__col-1/2 pt__2 pr__3">
                    <div class="page-bnz__cols-2">
                      <div class="page-bnz__col-1/2">
                        <p><strong>Personal details</strong> (Person 1)</p>
                      </div>
                      <div class="page-bnz__col-1/2">
                        <div class="bnz-input__checkbox-wrapper">
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Borrower
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Guarantor
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    @php
                    $application =  $data['data']['application']
                    @endphp
                    <div>
                      <p><strong>Name</strong></p>
                      <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                        <label class="bnz-input__label">First</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="" value="{{$application['consumer']['first_name']}}">

                        </div>
                      </div>
                      <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                        <label class="bnz-input__label">Middle (if applicable)</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="">
                        </div>
                      </div>
                      <div class="bnz-box__input-wrapper">
                        <label class="bnz-input__label">Last</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="" value="{{$application['consumer']['last_name']}}">
                        </div>
                      </div>
                    </div>

                    <div class="bnz-input__wrapper pt__1">
                      <label class=""><strong>Email address*</strong></label>
                      <div class="">
                        <input class="bnz-input__input-full" type="text" name="" value="{{$application['consumer']['email']}}">
                      </div>
                    </div>

                    <div class="flex pt-2">
                      <div class="bnz-input__wrapper w-[38%] flex-none">
                        <label class="text-[9px] leading-[20px]">Number of dependants in your care</label>
                        <div class="">
                          <input class="bnz-input__input-full" type="text" name="">
                        </div>
                      </div>
                      <div class="flex-1 pl-4 pt-1">
                        <p class="text-[10px]">*By providing your email address, you consent to the BNZ
                          Group contacting you electronically (e.g. by email, text,
                          website link) from time to time with information about
                          our products, services, and promotions, and without an
                          unsubscribe facility. </p>
                      </div>
                    </div>
                  </div>
                  <div class="page-bnz__col-1/2 pt__2 pl__3">
                    <div class="page-bnz__cols-2">
                      <div class="page-bnz__col-1/2">
                        <p><strong>Personal details</strong> (Person 2)</p>
                      </div>
                      <div class="page-bnz__col-1/2">
                        <div class="bnz-input__checkbox-wrapper">
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Borrower
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Guarantor
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <p><strong>Name</strong></p>
                      <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                        <label class="bnz-input__label">First</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="">
                        </div>
                      </div>
                      <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                        <label class="bnz-input__label">Middle (if applicable)</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="">
                        </div>
                      </div>
                      <div class="bnz-box__input-wrapper">
                        <label class="bnz-input__label">Last</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="">
                        </div>
                      </div>
                    </div>

                    <div class="bnz-input__wrapper pt__1">
                      <label class=""><strong>Email address*</strong></label>
                      <div class="">
                        <input class="bnz-input__input-full" type="text" name="">
                      </div>
                    </div>

                    <div class="flex pt-2">
                      <div class="bnz-input__wrapper w-[38%] flex-none">
                        <label class="text-[9px] leading-[20px]">Number of dependants in your care</label>
                        <div class="">
                          <input class="bnz-input__input-full" type="text" name="">
                        </div>
                      </div>
                      <div class="flex-1 pl-4 pt-1">
                        <p class="text-[10px]">*By providing your email address, you consent to the BNZ
                          Group contacting you electronically (e.g. by email, text,
                          website link) from time to time with information about
                          our products, services, and promotions, and without an
                          unsubscribe facility. </p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="page-bnz__box">
                <div class="page-bnz__section-title">
                  <p><strong>Section two -</strong> Complete this section only if you are a new BNZ customer, or your
                    details have changed since your last application. Otherwise go to section 3.</p>
                </div>

                <div class="page-bnz__cols-2">
                  <div class="page-bnz__col-1/2 pt__2 pr__3">
                    <div class="pt-2">
                      <p><strong>Person 1</strong></p>
                    </div>

                    <div class="flex space-x-6">
                      <div>
                        <p class="mb-1"><strong>Date of birth</strong></p>
                        <div class="page-bnz__form-input">
                          <div class="bnz-input__col-box">
                            <input class="bnz-form__input bnz-input__col-2" type="text" id="fdate" name="fdate"
                              placeholder="DD">
                            <div>
                              <span class="bnz-input-box bnz-input-box-1"></span>
                            </div>
                          </div>
                          <div class="bnz-input__col-box">
                            <input class="bnz-form__input bnz-input__col-2" type="text" id="fmonth" name="fmonth"
                              placeholder="MM">
                            <div>
                              <span class="bnz-input-box bnz-input-box-1"></span>
                            </div>
                          </div>
                          <div class="bnz-input__col-box">
                            <input class="bnz-form__input bnz-input__col-4" type="text" id="fyear" name="fyear"
                              placeholder="YYYY">
                            <div>
                              <span class="bnz-input-box bnz-input-box-1"></span>
                              <span class="bnz-input-box bnz-input-box-2"></span>
                              <span class="bnz-input-box bnz-input-box-3"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div>
                        <p class="mb-1"><strong>Gender</strong></p>
                        <div class="bnz-input__checkbox-wrapper">
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Male
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Female
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <p class="mb-1"><strong>Relationship status</strong></p>
                      <div class="bnz-input__checkbox-wrapper">
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Single
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Married
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">De facto
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Divorced
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div>
                      <p><strong>Residential address</strong></p>
                      <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                        <label class="bnz-input__label">Street
                          address</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="">
                        </div>
                      </div>
                      <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                        <label class="bnz-input__label">Suburb</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="">
                        </div>
                      </div>

                      <div class="page-bnz__cols-10">
                        <div class="page-bnz__col-7/10">
                          <div class="bnz-box__input-wrapper">
                            <label class="bnz-input__label">Town/City</label>
                            <div class="flex__1">
                              <input class="bnz-input__input" type="text" name="">
                            </div>
                          </div>
                        </div>
                        <div class="page-bnz__col-3/10">
                          <div class="bnz-box__input-wrapper" style="border-left: none;">
                            <label class="bnz-input__label">Postcode</label>
                            <div class="flex__1">
                              <input class="bnz-input__input" type="text" name="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="flex pt__2">
                      <div class="page-bnz__col-1/2">
                        <p>How long have you lived here?</p>
                      </div>
                      <div class="page-bnz__col-1/2 page-bnz__cols-2">
                        <div class="page-bnz__col-1/2 bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                        <div
                          class="page-bnz__col-1/2 bnz-input__wrapper flex h-5 border border-l-0 border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Months</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="pt__2">
                        <p>If you have lived at the above
                          address for less than 3 years, what was your previous address?
                        </p>
                      </div>
                      <div>
                        <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                          <label class="bnz-input__label">Street
                            address</label>
                          <div class="flex__1">
                            <input class="bnz-input__input" type="text" name="">
                          </div>
                        </div>
                        <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                          <label class="bnz-input__label">Suburb</label>
                          <div class="flex__1">
                            <input class="bnz-input__input" type="text" name="">
                          </div>
                        </div>

                        <div class="page-bnz__cols-10">
                          <div class="page-bnz__col-7/10">
                            <div class="bnz-box__input-wrapper">
                              <label class="bnz-input__label">Town/City</label>
                              <div class="flex__1">
                                <input class="bnz-input__input" type="text" name="">
                              </div>
                            </div>
                          </div>
                          <div class="page-bnz__col-3/10">
                            <div class="bnz-box__input-wrapper" style="border-left: none;">
                              <label class="bnz-input__label">Postcode</label>
                              <div class="flex__1">
                                <input class="bnz-input__input" type="text" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="flex pt__2">
                      <div class="page-bnz__col-1/2">
                        <p>How long did you live there?</p>
                      </div>
                      <div class="page-bnz__col-1/2 page-bnz__cols-2">
                        <div class="page-bnz__col-1/2 bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                        <div
                          class="page-bnz__col-1/2 bnz-input__wrapper flex h-5 border border-l-0 border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Months</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="bnz-input__wrapper pt__2">
                      <label class=""><strong>Postal address</strong></label>
                      <p class="text-[10px]">(if different from current residential address above)</p>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>

                    <div class="pt__2">
                      <p class="mb-1"><strong>Residence type</strong></p>
                      <div class="bnz-input__checkbox-wrapper">
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Own your own home
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Rent
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Board
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Live with relatives
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Supplied by employer
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Other
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="">
                          <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                        </div>
                      </div>
                    </div>

                    <div class="pt__2">
                      <p><strong>Telephone</strong></p>
                    </div>

                    <div class="flex pt__1">
                      <div class="page-bnz__col-1/2 pr__2">
                        <div class="bnz-input__wrapper mb-1 flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Work</label>
                          <div
                            class="flex-1 bg-white relative after:absolute after:content-[''] after:w-[40px] after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">
                            <input
                              class="indent-2 leading-[18px] placeholder:text-gray-600 placeholder:font-bold focus:border-none w-full ml-0"
                              type="text" name="" placeholder="0">
                          </div>
                        </div>
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Home</label>
                          <div
                            class="flex-1 bg-white relative after:absolute after:content-[''] after:w-[40px] after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">
                            <input
                              class="indent-2 leading-[18px] placeholder:text-gray-600 placeholder:font-bold focus:border-none w-full ml-0"
                              type="text" name="" placeholder="0">
                          </div>
                        </div>
                      </div>
                      <div class="page-bnz__col-1/2 pl__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Mobile</label>
                          <div
                            class="flex-1 bg-white relative after:absolute after:content-[''] after:w-[40px] after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">
                            <input
                              class="indent-2 leading-[18px] placeholder:text-gray-600 placeholder:font-bold focus:border-none w-full ml-0"
                              type="text" name="" placeholder="02">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="bnz-input__wrapper pt__2">
                      <label class=""><strong>Country of Citizenship</strong></label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>

                    <div class="pt__2">
                      <p><strong>If you are not an NZ Citizen:</strong></p>
                    </div>

                    <div class="page-bnz__cols-10 ">
                      <div class="page-bnz__col-7/10">
                        <p>Do you have permanent New Zealand residency status? </p>
                      </div>
                      <div class="page-bnz__col-3/10">
                        <div class="bnz-input__checkbox-wrapper col-end">
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Yes
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">No
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="page-bnz__cols-10 ">
                      <div class="page-bnz__col-7/10">
                        <p>Have you lived in NZ for at least 6 of the last 12 months?</p>
                      </div>
                      <div class="page-bnz__col-3/10">
                        <div class="bnz-input__checkbox-wrapper col-end">
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Yes
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">No
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="page-bnz__col-1/2 pt__2 pl__3">
                    <div class="pt-2">
                      <p><strong>Person 2</strong></p>
                    </div>

                    <div class="flex space-x-6">
                      <div>
                        <p class="mb-1"><strong>Date of birth</strong></p>
                        <div class="page-bnz__form-input">
                          <div class="bnz-input__col-box">
                            <input class="bnz-form__input bnz-input__col-2" type="text" id="fdate" name="fdate"
                              placeholder="DD">
                            <div>
                              <span class="bnz-input-box bnz-input-box-1"></span>
                            </div>
                          </div>
                          <div class="bnz-input__col-box">
                            <input class="bnz-form__input bnz-input__col-2" type="text" id="fmonth" name="fmonth"
                              placeholder="MM">
                            <div>
                              <span class="bnz-input-box bnz-input-box-1"></span>
                            </div>
                          </div>
                          <div class="bnz-input__col-box">
                            <input class="bnz-form__input bnz-input__col-4" type="text" id="fyear" name="fyear"
                              placeholder="YYYY">
                            <div>
                              <span class="bnz-input-box bnz-input-box-1"></span>
                              <span class="bnz-input-box bnz-input-box-2"></span>
                              <span class="bnz-input-box bnz-input-box-3"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div>
                        <p class="mb-1"><strong>Gender</strong></p>
                        <div class="bnz-input__checkbox-wrapper">
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Male
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Female
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <p class="mb-1"><strong>Relationship status</strong></p>
                      <div class="bnz-input__checkbox-wrapper">
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Single
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Married
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">De facto
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Divorced
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div>
                      <p><strong>Residential address</strong></p>
                      <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                        <label class="bnz-input__label">Street
                          address</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="">
                        </div>
                      </div>
                      <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                        <label class="bnz-input__label">Suburb</label>
                        <div class="flex__1">
                          <input class="bnz-input__input" type="text" name="">
                        </div>
                      </div>

                      <div class="page-bnz__cols-10">
                        <div class="page-bnz__col-7/10">
                          <div class="bnz-box__input-wrapper">
                            <label class="bnz-input__label">Town/City</label>
                            <div class="flex__1">
                              <input class="bnz-input__input" type="text" name="">
                            </div>
                          </div>
                        </div>
                        <div class="page-bnz__col-3/10">
                          <div class="bnz-box__input-wrapper" style="border-left: none;">
                            <label class="bnz-input__label">Postcode</label>
                            <div class="flex__1">
                              <input class="bnz-input__input" type="text" name="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="flex pt__2">
                      <div class="page-bnz__col-1/2">
                        <p>How long have you lived here?</p>
                      </div>
                      <div class="page-bnz__col-1/2 page-bnz__cols-2">
                        <div class="page-bnz__col-1/2 bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                        <div
                          class="page-bnz__col-1/2 bnz-input__wrapper flex h-5 border border-l-0 border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Months</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="pt__2">
                        <p>If you have lived at the above
                          address for less than 3 years, what was your previous address?
                        </p>
                      </div>
                      <div>
                        <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                          <label class="bnz-input__label">Street
                            address</label>
                          <div class="flex__1">
                            <input class="bnz-input__input" type="text" name="">
                          </div>
                        </div>
                        <div class="bnz-box__input-wrapper" style="border-bottom: none;">
                          <label class="bnz-input__label">Suburb</label>
                          <div class="flex__1">
                            <input class="bnz-input__input" type="text" name="">
                          </div>
                        </div>

                        <div class="page-bnz__cols-10">
                          <div class="page-bnz__col-7/10">
                            <div class="bnz-box__input-wrapper">
                              <label class="bnz-input__label">Town/City</label>
                              <div class="flex__1">
                                <input class="bnz-input__input" type="text" name="">
                              </div>
                            </div>
                          </div>
                          <div class="page-bnz__col-3/10">
                            <div class="bnz-box__input-wrapper" style="border-left: none;">
                              <label class="bnz-input__label">Postcode</label>
                              <div class="flex__1">
                                <input class="bnz-input__input" type="text" name="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="flex pt__2">
                      <div class="page-bnz__col-1/2">
                        <p>How long did you live there?</p>
                      </div>
                      <div class="page-bnz__col-1/2 page-bnz__cols-2">
                        <div class="page-bnz__col-1/2 bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                        <div
                          class="page-bnz__col-1/2 bnz-input__wrapper flex h-5 border border-l-0 border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Months</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="bnz-input__wrapper pt__2">
                      <label class=""><strong>Postal address</strong></label>
                      <p class="text-[10px]">(if different from current residential address above)</p>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>

                    <div class="pt__2">
                      <p class="mb-1"><strong>Residence type</strong></p>
                      <div class="bnz-input__checkbox-wrapper">
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Own your own home
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Rent
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Board
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Live with relatives
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Supplied by employer
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Other
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="">
                          <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                        </div>
                      </div>
                    </div>

                    <div class="pt__2">
                      <p><strong>Telephone</strong></p>
                    </div>

                    <div class="flex pt__1">
                      <div class="page-bnz__col-1/2 pr__2">
                        <div class="bnz-input__wrapper mb-1 flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Work</label>
                          <div
                            class="flex-1 bg-white relative after:absolute after:content-[''] after:w-[40px] after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">
                            <input
                              class="indent-2 leading-[18px] placeholder:text-gray-600 placeholder:font-bold focus:border-none w-full ml-0"
                              type="text" name="" placeholder="0">
                          </div>
                        </div>
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Home</label>
                          <div
                            class="flex-1 bg-white relative after:absolute after:content-[''] after:w-[40px] after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">
                            <input
                              class="indent-2 leading-[18px] placeholder:text-gray-600 placeholder:font-bold focus:border-none w-full ml-0"
                              type="text" name="" placeholder="0">
                          </div>
                        </div>
                      </div>
                      <div class="page-bnz__col-1/2 pl__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Mobile</label>
                          <div
                            class="flex-1 bg-white relative after:absolute after:content-[''] after:w-[40px] after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">
                            <input
                              class="indent-2 leading-[18px] placeholder:text-gray-600 placeholder:font-bold focus:border-none w-full ml-0"
                              type="text" name="" placeholder="02">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="bnz-input__wrapper pt__2">
                      <label class=""><strong>Country of Citizenship</strong></label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>

                    <div class="pt__2">
                      <p><strong>If you are not an NZ Citizen:</strong></p>
                    </div>

                    <div class="page-bnz__cols-10 ">
                      <div class="page-bnz__col-7/10">
                        <p>Do you have permanent New Zealand residency status? </p>
                      </div>
                      <div class="page-bnz__col-3/10">
                        <div class="bnz-input__checkbox-wrapper col-end">
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Yes
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">No
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="page-bnz__cols-10 ">
                      <div class="page-bnz__col-7/10">
                        <p>Have you lived in NZ for at least 6 of the last 12 months?</p>
                      </div>
                      <div class="page-bnz__col-3/10">
                        <div class="bnz-input__checkbox-wrapper col-end">
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">Yes
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="bnz-input__checkbox-group">
                            <label class="bnz-input__checkbox-label">No
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
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
    <div class="page-bnz">
      <div class="page-bnz__container">
        <div class="page-bnz__content">
          <form action="/action_page.php">
            <div class="page-bnz__form">

              <div class="page-bnz__box">
                <div class="page-bnz__section-title">
                  <p><strong>Section three -</strong> Please complete for all requests</p>
                </div>

                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">3a. Your employment and income</h3>
                </div>

                <div class="page-bnz__cols-2 pt__2">
                  <div class="page-bnz__col-1/2 pr__3">
                    <h4 class="page-bnz__heading-4">Person 1</h4>
                    <div class="pt__2">
                      <p class="mb-1"><strong>Type of employment</strong></p>
                      <div class="bnz-input__checkbox-wrapper">
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Full-time
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Part-time
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Self employed
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Retired
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Other
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                      <label
                        class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Employer</label>
                      <div class="flex-1 bg-white">
                        <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                      </div>
                    </div>

                    <div class="page-bnz__cols-10 pt__2">
                      <div class="page-bnz__col-7/10 pr__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Position</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-bnz__col-3/10 pl__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="pt__2">
                      <p>If less than 3 years, who was your previous employer/s?</p>
                    </div>

                    <div class="page-bnz__cols-10 pt__1">
                      <div class="page-bnz__col-7/10 pr__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Employer</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-bnz__col-3/10 pl__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="page-bnz__cols-10 pt__1">
                      <div class="page-bnz__col-7/10 pr__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Employer</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-bnz__col-3/10 pl__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="page-bnz__col-1/2 pl__3">
                    <h4 class="page-bnz__heading-4">Person 2</h4>
                    <div class="pt__2">
                      <p class="mb-1"><strong>Type of employment</strong></p>
                      <div class="bnz-input__checkbox-wrapper">
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Full-time
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Part-time
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Self employed
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Retired
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="bnz-input__checkbox-group">
                          <label class="bnz-input__checkbox-label">Other
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                      <label
                        class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Employer</label>
                      <div class="flex-1 bg-white">
                        <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                      </div>
                    </div>

                    <div class="page-bnz__cols-10 pt__2">
                      <div class="page-bnz__col-7/10 pr__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Position</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-bnz__col-3/10 pl__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="pt__2">
                      <p>If less than 3 years, who was your previous employer/s?</p>
                    </div>

                    <div class="page-bnz__cols-10 pt__1">
                      <div class="page-bnz__col-7/10 pr__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Employer</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-bnz__col-3/10 pl__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="page-bnz__cols-10 pt__1">
                      <div class="page-bnz__col-7/10 pr__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Employer</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                      <div class="page-bnz__col-3/10 pl__2">
                        <div class="bnz-input__wrapper flex h-5 border border-solid border-[#6599D1]">
                          <label
                            class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Years</label>
                          <div class="flex-1 bg-white">
                            <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">Your income</h3>
                  <p>Please detail all income types e.g. Working for Families, investment income, bonus, boarder income.
                    For Rental income, please refer to section 3b.</p>
                </div>

                <div class="page-bnz__cols-2 pt__3">
                  <div class="page-bnz__col-1/2 pt__2 pr__3">
                    <div class="page-bnz__cols-10">
                      <div class="page-bnz__col-7/10 pr__2">
                        <h4 class="page-bnz__heading-4">Personal income</h4>
                      </div>
                      <div class="page-bnz__col-3/10 pl__2">
                        <div class="text-[10px]">
                          <p>Please circle:</p>
                          <p>W = Weekly, F = Fortnightly,
                            M = Monthly, A = Annually</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="page-bnz__col-1/2 pl__3">
                    <div class="page-bnz__cols-10">
                      <div class="page-bnz__col-7/10 pr__2">
                        <h4 class="page-bnz__heading-4">Personal income</h4>
                      </div>
                      <div class="page-bnz__col-3/10 pl__2">
                        <div class="text-[10px]">
                          <p>Please circle:</p>
                          <p>W = Weekly, F = Fortnightly,
                            M = Monthly, A = Annually</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="page-bnz__cols-2">
                  <div class="page-bnz__col-1/2 pt__2 pr__3">

                    <div
                      class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-none w-[25%] h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Salary/Wages</p>
                      </div>
                      <div class="bnz-input__check-group">
                        <label class="bnz-input__check-label mr__1">
                          <span class="text-[10px]">Gross</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                        <label class="bnz-input__check-label">
                          <span class="text-[10px]">Net</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Amount</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div>
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="flex items-end justify-between relative pt-2 before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Other income type</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="">
                        </div>
                      </div>
                      <div class="bnz-input__check-group">
                        <label class="bnz-input__check-label mr__1">
                          <span class="text-[10px]">Gross</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                        <label class="bnz-input__check-label">
                          <span class="text-[10px]">Net</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Amount</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div>
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="flex items-end justify-between relative pt-2 before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="">
                        </div>
                      </div>
                      <div class="bnz-input__check-group">
                        <label class="bnz-input__check-label mr__1">
                          <span class="text-[10px]">Gross</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                        <label class="bnz-input__check-label">
                          <span class="text-[10px]">Net</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Amount</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div>
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Do you contribute to KiwiSaver?</p>
                      </div>
                      <div class="flex-none w-[35%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative bg-[#EFF5FB] pr-2">
                          <label class="bnz-input__checkbox-label">Yes
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="relative bg-[#EFF5FB]">
                          <label class="bnz-input__checkbox-label">No
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">If yes, what percentage?</p>
                      </div>
                      <div class="flex-none w-[27%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="%">
                        </div>
                      </div>
                    </div>

                    <div class="pt__2">
                      <p><strong>Business income</strong></p>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Net profit after tax</p>
                      </div>
                      <div class="flex-none w-[27%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Annual current business debt commitments</p>
                      </div>
                      <div class="flex-none w-[27%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Business income to be used for personal debt
                          servicing</p>
                      </div>
                      <div class="flex-none w-[27%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Is business tax up to date?</p>
                      </div>
                      <div class="flex-none w-[35%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative bg-[#EFF5FB] pr-2">
                          <label class="bnz-input__checkbox-label">Yes
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="relative bg-[#EFF5FB]">
                          <label class="bnz-input__checkbox-label">No
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="page-bnz__col-1/2 pt__2 pl__3">

                    <div
                      class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-none w-[25%] h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Salary/Wages</p>
                      </div>
                      <div class="bnz-input__check-group">
                        <label class="bnz-input__check-label mr__1">
                          <span class="text-[10px]">Gross</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                        <label class="bnz-input__check-label">
                          <span class="text-[10px]">Net</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Amount</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div>
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="flex items-end justify-between relative pt-2 before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Other income type</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="">
                        </div>
                      </div>
                      <div class="bnz-input__check-group">
                        <label class="bnz-input__check-label mr__1">
                          <span class="text-[10px]">Gross</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                        <label class="bnz-input__check-label">
                          <span class="text-[10px]">Net</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Amount</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div>
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="flex items-end justify-between relative pt-2 before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="">
                        </div>
                      </div>
                      <div class="bnz-input__check-group">
                        <label class="bnz-input__check-label mr__1">
                          <span class="text-[10px]">Gross</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                        <label class="bnz-input__check-label">
                          <span class="text-[10px]">Net</span>
                          <input class="bnz-input__check-input" type="checkbox">
                          <span class="bnz-input__check"></span>
                        </label>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Amount</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div>
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Do you contribute to KiwiSaver?</p>
                      </div>
                      <div class="flex-none w-[35%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative bg-[#EFF5FB] pr-2">
                          <label class="bnz-input__checkbox-label">Yes
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="relative bg-[#EFF5FB]">
                          <label class="bnz-input__checkbox-label">No
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">If yes, what percentage?</p>
                      </div>
                      <div class="flex-none w-[27%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="%">
                        </div>
                      </div>
                    </div>

                    <div class="pt__2">
                      <p><strong>Business income</strong></p>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Net profit after tax</p>
                      </div>
                      <div class="flex-none w-[27%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Annual current business debt commitments</p>
                      </div>
                      <div class="flex-none w-[27%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Business income to be used for personal debt
                          servicing</p>
                      </div>
                      <div class="flex-none w-[27%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class=" h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Is business tax up to date?</p>
                      </div>
                      <div class="flex-none w-[35%] bnz-input__checkbox-wrapper col-end">
                        <div class="relative bg-[#EFF5FB] pr-2">
                          <label class="bnz-input__checkbox-label">Yes
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                        <div class="relative bg-[#EFF5FB]">
                          <label class="bnz-input__checkbox-label">No
                            <input class="bnz-input__checkbox-input" type="checkbox">
                            <span class="bnz-input__checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>

              <div class="page-bnz__box">
                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">3b. Your residential property</h3>
                  <p>To assist BNZ in meeting its regulatory obligations this section must be completed for all
                    residential properties owned or to be owned. If you do not own residential
                    property please proceed to 3c.</p>

                  <div class="page-bnz__cols-10">
                    <div class="page-bnz__col-6/10 pt__2 pr__1">
                      <div class="flex items-end justify-between relative pt-2">
                        <div class="flex-1 bnz-input__wrapper">
                          <label class="text-[10px] block mb-[2px]"><strong>Address</strong></label>
                          <div class="relative">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="">
                          </div>
                        </div>

                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <label class="text-[10px] block mb-[2px]"><strong>Value</strong></label>
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <label class="text-[10px] block mb-[2px]"><strong>Rental income gross amount</strong></label>
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[80px] flex-none">
                          <label class="text-[10px] block mb-[2px]"><strong>Rental income frequency</strong></label>
                          <div class="relative">
                            <input class="bnz-form__input bnz-input__col-4"
                              style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                              placeholder="WFMA">
                            <div>
                              <span class="bnz-input-fullbox bnz-input-box-1"></span>
                              <span class="bnz-input-fullbox bnz-input-box-2"></span>
                              <span class="bnz-input-fullbox bnz-input-box-3"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-end justify-between relative pt-1">
                        <div class="flex-1 bnz-input__wrapper">
                          <div class="relative">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[80px] flex-none">
                          <div class="relative">
                            <input class="bnz-form__input bnz-input__col-4"
                              style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                              placeholder="WFMA">
                            <div>
                              <span class="bnz-input-fullbox bnz-input-box-1"></span>
                              <span class="bnz-input-fullbox bnz-input-box-2"></span>
                              <span class="bnz-input-fullbox bnz-input-box-3"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-end justify-between relative pt-1">
                        <div class="flex-1 bnz-input__wrapper">
                          <div class="relative">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[80px] flex-none">
                          <div class="relative">
                            <input class="bnz-form__input bnz-input__col-4"
                              style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                              placeholder="WFMA">
                            <div>
                              <span class="bnz-input-fullbox bnz-input-box-1"></span>
                              <span class="bnz-input-fullbox bnz-input-box-2"></span>
                              <span class="bnz-input-fullbox bnz-input-box-3"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-end justify-between relative pt-1">
                        <div class="flex-1 bnz-input__wrapper">
                          <div class="relative">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[80px] flex-none">
                          <div class="relative">
                            <input class="bnz-form__input bnz-input__col-4"
                              style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                              placeholder="WFMA">
                            <div>
                              <span class="bnz-input-fullbox bnz-input-box-1"></span>
                              <span class="bnz-input-fullbox bnz-input-box-2"></span>
                              <span class="bnz-input-fullbox bnz-input-box-3"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-end justify-between relative pt-1">
                        <div class="flex-1 bnz-input__wrapper">
                          <div class="relative">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[130px] flex-none bnz-input__wrapper">
                          <div class="relative flex-1">
                            <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                              name="" placeholder="$">
                          </div>
                        </div>
                        <div class="w-[80px] flex-none">
                          <div class="relative">
                            <input class="bnz-form__input bnz-input__col-4"
                              style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                              placeholder="WFMA">
                            <div>
                              <span class="bnz-input-fullbox bnz-input-box-1"></span>
                              <span class="bnz-input-fullbox bnz-input-box-2"></span>
                              <span class="bnz-input-fullbox bnz-input-box-3"></span>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="page-bnz__col-4/10 pl__1 pt__6">
                      <div class="pt__1">
                        <p class="mb-1"><strong>Occupacy type*</strong></p>
                        <div class="bnz-input__checkbox-wrapper border border-solid border-[#6599D1] bg-white pl-2">
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Owner occupied</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Investment</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Secondary residence</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="pt__1">
                        <div class="bnz-input__checkbox-wrapper border border-solid border-[#6599D1] bg-white pl-2">
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Owner occupied</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Investment</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Secondary residence</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="pt__1">
                        <div class="bnz-input__checkbox-wrapper border border-solid border-[#6599D1] bg-white pl-2">
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Owner occupied</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Investment</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Secondary residence</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="pt__1">
                        <div class="bnz-input__checkbox-wrapper border border-solid border-[#6599D1] bg-white pl-2">
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Owner occupied</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Investment</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Secondary residence</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="pt__1">
                        <div class="bnz-input__checkbox-wrapper border border-solid border-[#6599D1] bg-white pl-2">
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Owner occupied</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Investment</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                          <div class="pr-2">
                            <label class="bnz-input__checkbox-label">
                              <span class="text-[9px]">Secondary residence</span>
                              <input class="bnz-input__checkbox-input" type="checkbox">
                              <span class="bnz-input__checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="pt__3">
                    <p><strong>* Definition of occupancy types:</strong></p>
                    <ul class="list__disc">
                      <li><strong>Owner occupied:</strong> This is your principal place of residence. You are confirming
                        you or a related party** currently occupy or intend to occupy
                        the property.</li>
                      <li><strong>Investment:</strong> This is a property which is not occupied by you or a related
                        party</li>
                      <li><strong>Secondary residence:</strong> This is a property that you or a related party** use as
                        a secondary place of residence (including as a holiday home), which earns no or
                        minimal rental income (e.g. it generates income for less than 6 weeks per year).</li>
                    </ul>
                  </div>

                  <div class="pt__3">
                    <p><strong>** A person is a related party of another person if:</strong></p>
                    <ul class="list__disc">
                      <li>one person is a trust, or a trustee of a trust and the other person is a beneficiary of the
                        trust; or</li>
                      <li>one person is a company or an unincorporated body of persons and the other person is a
                        shareholder of, or otherwise controls, the first person; or</li>
                      <li>one person is a natural person and the other person is the spouse, civil union, or de facto
                        partner of the first person or is the administrator of the estate of the
                        deceased spouse, civil union partner, or de facto partner of the first person.</li>
                    </ul>
                  </div>

                  <div class="pt__3">
                    <p>Please note that, for the purposes of residential property occupancy, children/parents of the
                      owners are not considered related parties.</p>
                  </div>

                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

    <!-- page 3 -->
    <div class="page-bnz">
      <div class="page-bnz__container">
        <div class="page-bnz__content">
          <form action="/action_page.php">
            <div class="page-bnz__form">

              <div class="page-bnz__box">
                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">3c. Other assets</h3>
                </div>
                <div class="page-bnz__cols-2">
                  <div class="page-bnz__col-1/2 pt__6 pr__3">
                    <div
                      class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Other property (e.g. commercial)</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Value</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Motor vehicle(s)</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Furniture & personal effects</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="page-bnz__col-1/2 pl__3">
                    <h4 class="page-bnz__heading-4">Non-BNZ</h4>

                    <div
                      class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Day to day account(s)</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr-2">
                        <label class="text-[10px] block mb-[2px]">Provider</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="">
                        </div>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Balance</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Savings account(s)</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr-2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="">
                        </div>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">KiwiSaver/Other Superannuation</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr-2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="">
                        </div>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Term investments</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr-2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="">
                        </div>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="page-bnz__box">
                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">3d. Liabilities - Non-BNZ</h3>
                </div>
                <div class="flex justify-between">
                  <p><strong>Housing loans*</strong></p>
                  <p class="text-[10px]">Please circle: W = Weekly, F = Fortnightly, M = Monthly, A = Annually</p>
                </div>

                <div
                  class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                  <div class="flex-none w-[10%] h-5 relative">
                    <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Housing loan</p>
                  </div>
                  <div class="flex-none w-[35%] bnz-input__wrapper mr-2">
                    <label class="text-[10px] block mb-[2px]">Provider</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-[70%] border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Current balance</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Payment amount</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Frequency</label>
                    <div class="relative">
                      <input class="bnz-form__input bnz-input__col-4" style="padding-left: 4px;background-color:white;"
                        type="text" id="fyear" name="fyear" placeholder="WFMA">
                      <div>
                        <span class="bnz-input-fullbox bnz-input-box-1"></span>
                        <span class="bnz-input-fullbox bnz-input-box-2"></span>
                        <span class="bnz-input-fullbox bnz-input-box-3"></span>
                      </div>
                    </div>
                  </div>
                  <div class="bnz-input__check-group">
                    <label class="bnz-input__check-label">
                      <span class="text-[10px]">To be repaid</span>
                      <input class="bnz-input__check-input" type="checkbox">
                      <span class="bnz-input__check-right"></span>
                    </label>
                  </div>
                </div>

                <div class="flex justify-between pt__2">
                  <div class="flex-none w-[10%] bg-[#3C73B2] py-[3px] px-[5px]">
                    <p class="text-[7px] text-white">If this loan is to be fully
                      repaid, please do not
                      complete this row</p>
                  </div>
                  <div class="flex-none w-[12%] flex">
                    <div class="flex-1">
                      <p class="text-[10px]">Interest
                        rate</p>
                    </div>
                    <div class="flex-none w-[60%]">
                      <input class="indent-1 h-5 ml-0 w-[90%] border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="flex-none w-[22%] flex">
                    <div class="flex-none w-[35%]">
                      <p class="text-[10px]">Loan start
                        date</p>
                    </div>
                    <div class="flex-1">
                      <div class="page-bnz__form-input">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fdate" name="fdate" placeholder="DD">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="MM">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="YY">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-none w-[22%] flex">
                    <div class="flex-1">
                      <p class="text-[10px]">Loan documented
                        term</p>
                    </div>
                    <div class="flex-none w-[60%]">
                      <input class="indent-1 h-5 ml-0 w-[90%] border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="flex-none w-[25%] flex justify-between">
                    <div class="flex-none w-[35%]">
                      <p class="text-[10px]">Interest only
                        end date (if applicable)</p>
                    </div>
                    <div class="flex-1 flex justify-end items-start">
                      <div class="page-bnz__form-input">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fdate" name="fdate" placeholder="DD">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="MM">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="YY">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div
                  class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                  <div class="flex-none w-[10%] h-5 relative">
                    <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Housing loan</p>
                  </div>
                  <div class="flex-none w-[35%] bnz-input__wrapper mr-2">
                    <label class="text-[10px] block mb-[2px]">Provider</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-[70%] border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Current balance</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Payment amount</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Frequency</label>
                    <div class="relative">
                      <input class="bnz-form__input bnz-input__col-4" style="padding-left: 4px;background-color:white;"
                        type="text" id="fyear" name="fyear" placeholder="WFMA">
                      <div>
                        <span class="bnz-input-fullbox bnz-input-box-1"></span>
                        <span class="bnz-input-fullbox bnz-input-box-2"></span>
                        <span class="bnz-input-fullbox bnz-input-box-3"></span>
                      </div>
                    </div>
                  </div>
                  <div class="bnz-input__check-group">
                    <label class="bnz-input__check-label">
                      <span class="text-[10px]">To be repaid</span>
                      <input class="bnz-input__check-input" type="checkbox">
                      <span class="bnz-input__check-right"></span>
                    </label>
                  </div>
                </div>

                <div class="flex justify-between pt__2">
                  <div class="flex-none w-[10%] bg-[#3C73B2] py-[3px] px-[5px]">
                    <p class="text-[7px] text-white">If this loan is to be fully
                      repaid, please do not
                      complete this row</p>
                  </div>
                  <div class="flex-none w-[12%] flex">
                    <div class="flex-1">
                      <p class="text-[10px]">Interest
                        rate</p>
                    </div>
                    <div class="flex-none w-[60%]">
                      <input class="indent-1 h-5 ml-0 w-[90%] border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="flex-none w-[22%] flex">
                    <div class="flex-none w-[35%]">
                      <p class="text-[10px]">Loan start
                        date</p>
                    </div>
                    <div class="flex-1">
                      <div class="page-bnz__form-input">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fdate" name="fdate" placeholder="DD">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="MM">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="YY">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-none w-[22%] flex">
                    <div class="flex-1">
                      <p class="text-[10px]">Loan documented
                        term</p>
                    </div>
                    <div class="flex-none w-[60%]">
                      <input class="indent-1 h-5 ml-0 w-[90%] border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="flex-none w-[25%] flex justify-between">
                    <div class="flex-none w-[35%]">
                      <p class="text-[10px]">Interest only
                        end date (if applicable)</p>
                    </div>
                    <div class="flex-1 flex justify-end items-start">
                      <div class="page-bnz__form-input">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fdate" name="fdate" placeholder="DD">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="MM">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="YY">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div
                  class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                  <div class="flex-none w-[10%] h-5 relative">
                    <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Revolving home loan</p>
                  </div>
                  <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                    <label class="text-[10px] block mb-[2px]">Provider</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Limit</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Current balance</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Payment amount</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Frequency</label>
                    <div class="relative">
                      <input class="bnz-form__input bnz-input__col-4" style="padding-left: 4px;background-color:white;"
                        type="text" id="fyear" name="fyear" placeholder="WFMA">
                      <div>
                        <span class="bnz-input-fullbox bnz-input-box-1"></span>
                        <span class="bnz-input-fullbox bnz-input-box-2"></span>
                        <span class="bnz-input-fullbox bnz-input-box-3"></span>
                      </div>
                    </div>
                  </div>
                  <div class="bnz-input__check-group">
                    <label class="bnz-input__check-label">
                      <span class="text-[10px]">To be repaid</span>
                      <input class="bnz-input__check-input" type="checkbox">
                      <span class="bnz-input__check-right"></span>
                    </label>
                  </div>
                </div>

                <div class="flex pt__4">
                  <div class="flex-none w-[10%] bg-[#3C73B2] py-[3px] px-[5px] mr-8">
                    <p class="text-[7px] text-white">If this loan is to be fully
                      repaid, please do not
                      complete this row</p>
                  </div>
                  <div class="flex mr-8">
                    <div class="flex-1">
                      <p class="text-[10px]">Interest
                        rate</p>
                    </div>
                    <div class="flex-none w-[60%]">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="flex mr-8">
                    <div class="flex-none w-[35%]">
                      <p class="text-[10px]">Loan start
                        date</p>
                    </div>
                    <div class="flex-1">
                      <div class="page-bnz__form-input">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fdate" name="fdate" placeholder="DD">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="MM">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="YY">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="flex-1">
                      <p class="text-[10px]">Loan documented
                        term</p>
                    </div>
                    <div class="flex-none w-[60%]">
                      <input class="indent-1 h-5 ml-0 w-[90%] border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>

                </div>

                <div
                  class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                  <div class="flex-none w-[10%] h-5 relative">
                    <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Revolving home loan</p>
                  </div>
                  <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                    <label class="text-[10px] block mb-[2px]">Provider</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Limit</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Current balance</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Payment amount</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Frequency</label>
                    <div class="relative">
                      <input class="bnz-form__input bnz-input__col-4" style="padding-left: 4px;background-color:white;"
                        type="text" id="fyear" name="fyear" placeholder="WFMA">
                      <div>
                        <span class="bnz-input-fullbox bnz-input-box-1"></span>
                        <span class="bnz-input-fullbox bnz-input-box-2"></span>
                        <span class="bnz-input-fullbox bnz-input-box-3"></span>
                      </div>
                    </div>
                  </div>
                  <div class="bnz-input__check-group">
                    <label class="bnz-input__check-label">
                      <span class="text-[10px]">To be repaid</span>
                      <input class="bnz-input__check-input" type="checkbox">
                      <span class="bnz-input__check-right"></span>
                    </label>
                  </div>
                </div>

                <div class="flex pt__4">
                  <div class="flex-none w-[10%] bg-[#3C73B2] py-[3px] px-[5px] mr-8">
                    <p class="text-[7px] text-white">If this loan is to be fully
                      repaid, please do not
                      complete this row</p>
                  </div>
                  <div class="flex mr-8">
                    <div class="flex-1">
                      <p class="text-[10px]">Interest
                        rate</p>
                    </div>
                    <div class="flex-none w-[60%]">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="flex mr-8">
                    <div class="flex-none w-[35%]">
                      <p class="text-[10px]">Loan start
                        date</p>
                    </div>
                    <div class="flex-1">
                      <div class="page-bnz__form-input">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fdate" name="fdate" placeholder="DD">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="MM">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="YY">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="flex-1">
                      <p class="text-[10px]">Loan documented
                        term</p>
                    </div>
                    <div class="flex-none w-[60%]">
                      <input class="indent-1 h-5 ml-0 w-[90%] border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>

                </div>

                <div class="pt__2">
                  <p>*If there are more than two housing loans or more than two revolving home loans, information
                    relating to these extra loans must be provided on the Supplementary Lending form.</p>
                  <p><strong>Other loans</strong></p>
                </div>

                <div
                  class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                  <div class="flex-none w-[11%] h-5 relative">
                    <p class="inline-block h-5 bg-[#EFF5FB] pr-2 text-[10px]">Buy now/paylater arrangements</p>
                  </div>
                  <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                    <label class="text-[10px] block mb-[2px]">Provider(s)</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Limit(s)</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Current balance(s)</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Payment amount</label>
                    <div class="relative">
                      <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                        placeholder="$">
                    </div>
                  </div>
                  <div class="bnz-input__wrapper">
                    <label class="text-[10px] block mb-[2px]">Frequency</label>
                    <div class="relative">
                      <input class="bnz-form__input bnz-input__col-4" style="padding-left: 4px;background-color:white;"
                        type="text" id="fyear" name="fyear" placeholder="WFMA">
                      <div>
                        <span class="bnz-input-fullbox bnz-input-box-1"></span>
                        <span class="bnz-input-fullbox bnz-input-box-2"></span>
                        <span class="bnz-input-fullbox bnz-input-box-3"></span>
                      </div>
                    </div>
                  </div>
                  <div class="bnz-input__check-group">
                    <label class="bnz-input__check-label">
                      <span class="text-[10px]">To be repaid</span>
                      <input class="bnz-input__check-input" type="checkbox">
                      <span class="bnz-input__check-right"></span>
                    </label>
                  </div>
                </div>

                <div class="pt__3">
                  <div
                    class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                    <div class="flex-none w-[10%] h-5 relative">
                      <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Overdraft</p>
                    </div>
                    <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                          name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="bnz-form__input bnz-input__col-4"
                          style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                          placeholder="WFMA">
                        <div>
                          <span class="bnz-input-fullbox bnz-input-box-1"></span>
                          <span class="bnz-input-fullbox bnz-input-box-2"></span>
                          <span class="bnz-input-fullbox bnz-input-box-3"></span>
                        </div>
                      </div>
                    </div>
                    <div class="bnz-input__check-group pl-4">
                      <label class="bnz-input__check-label">
                        <input class="bnz-input__check-input" type="checkbox">
                        <span class="bnz-input__check-right"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="pt__3">
                  <div
                    class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                    <div class="flex-none w-[10%] h-5 relative">
                      <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Credit card(s)</p>
                    </div>
                    <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                          name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="bnz-form__input bnz-input__col-4"
                          style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                          placeholder="WFMA">
                        <div>
                          <span class="bnz-input-fullbox bnz-input-box-1"></span>
                          <span class="bnz-input-fullbox bnz-input-box-2"></span>
                          <span class="bnz-input-fullbox bnz-input-box-3"></span>
                        </div>
                      </div>
                    </div>
                    <div class="bnz-input__check-group pl-4">
                      <label class="bnz-input__check-label">
                        <input class="bnz-input__check-input" type="checkbox">
                        <span class="bnz-input__check-right"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="pt__3">
                  <div
                    class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                    <div class="flex-none w-[10%] h-5 relative">
                      <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Personal loan</p>
                    </div>
                    <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                          name="">
                      </div>
                    </div>
                    <div class="flex-none w-[16%] bnz-input__wrapper">
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="bnz-form__input bnz-input__col-4"
                          style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                          placeholder="WFMA">
                        <div>
                          <span class="bnz-input-fullbox bnz-input-box-1"></span>
                          <span class="bnz-input-fullbox bnz-input-box-2"></span>
                          <span class="bnz-input-fullbox bnz-input-box-3"></span>
                        </div>
                      </div>
                    </div>
                    <div class="bnz-input__check-group pl-4">
                      <label class="bnz-input__check-label">
                        <input class="bnz-input__check-input" type="checkbox">
                        <span class="bnz-input__check-right"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="pt__3">
                  <div
                    class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                    <div class="flex-none w-[10%] h-5 relative">
                      <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Store card(s)</p>
                    </div>
                    <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                          name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="bnz-form__input bnz-input__col-4"
                          style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                          placeholder="WFMA">
                        <div>
                          <span class="bnz-input-fullbox bnz-input-box-1"></span>
                          <span class="bnz-input-fullbox bnz-input-box-2"></span>
                          <span class="bnz-input-fullbox bnz-input-box-3"></span>
                        </div>
                      </div>
                    </div>
                    <div class="bnz-input__check-group pl-4">
                      <label class="bnz-input__check-label">
                        <input class="bnz-input__check-input" type="checkbox">
                        <span class="bnz-input__check-right"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="pt__3">
                  <div
                    class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                    <div class="flex-none w-[10%] h-5 relative">
                      <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Hire purchase</p>
                    </div>
                    <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                          name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="bnz-form__input bnz-input__col-4"
                          style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                          placeholder="WFMA">
                        <div>
                          <span class="bnz-input-fullbox bnz-input-box-1"></span>
                          <span class="bnz-input-fullbox bnz-input-box-2"></span>
                          <span class="bnz-input-fullbox bnz-input-box-3"></span>
                        </div>
                      </div>
                    </div>
                    <div class="bnz-input__check-group pl-4">
                      <label class="bnz-input__check-label">
                        <input class="bnz-input__check-input" type="checkbox">
                        <span class="bnz-input__check-right"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="pt__3">
                  <div
                    class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                    <div class="flex-none w-[10%] h-5 relative">
                      <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Student loan</p>
                    </div>
                    <div class="flex-none w-[37%] bnz-input__wrapper mr-2">
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="bnz-form__input bnz-input__col-4"
                          style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                          placeholder="WFMA">
                        <div>
                          <span class="bnz-input-fullbox bnz-input-box-1"></span>
                          <span class="bnz-input-fullbox bnz-input-box-2"></span>
                          <span class="bnz-input-fullbox bnz-input-box-3"></span>
                        </div>
                      </div>
                    </div>
                    <div class="bnz-input__check-group pl-4">
                      <label class="bnz-input__check-label">
                        <input class="bnz-input__check-input" type="checkbox">
                        <span class="bnz-input__check-right"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="pt__3">
                  <div
                    class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                    <div class="flex-none w-[10%] h-5 relative">
                      <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Other</p>
                    </div>
                    <div class="flex-none w-[20%] bnz-input__wrapper mr-2">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                          name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text" name=""
                          placeholder="$">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper">
                      <div class="relative">
                        <input class="bnz-form__input bnz-input__col-4"
                          style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                          placeholder="WFMA">
                        <div>
                          <span class="bnz-input-fullbox bnz-input-box-1"></span>
                          <span class="bnz-input-fullbox bnz-input-box-2"></span>
                          <span class="bnz-input-fullbox bnz-input-box-3"></span>
                        </div>
                      </div>
                    </div>
                    <div class="bnz-input__check-group pl-4">
                      <label class="bnz-input__check-label">
                        <input class="bnz-input__check-input" type="checkbox">
                        <span class="bnz-input__check-right"></span>
                      </label>
                    </div>
                  </div>
                </div>

              </div>

              <div class="page-bnz__box">
                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">3e. Expenses</h3>
                  <h3 class="page-bnz__heading-3">Living expenses</h3>
                  <p>Please detail your living expenses as well as any increase to those expenses that will occur if new
                    lending is approved e.g. rates and insurance for a new property,
                    insurance and running costs for a new car, or any major increases to expenditure expected in the
                    next 12 months.</p>
                </div>

                <div class="page-bnz__cols-2 pb-10">
                  <div class="page-bnz__col-1/2 pt__6 pr__3">
                    <div
                      class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Childcare and education</p>
                        <p class="text-[9px]">Including school fees, school uniforms,
                          school books, transport to school,
                          extra curricular activities, after school
                          activities, childcare.</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <label class="text-[10px] block mb-[2px]">Amount</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt-12 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Sports, activities and hobbies</p>
                        <p class="text-[9px]">Including gym and club memberships,
                          leisure activities, and hobbies.</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt-8 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Superannuation
                          (e.g. KiwiSaver)</p>
                        <p class="text-[9px]">Including KiwiSaver and/or other superannuation
                          deductions (including any additional regular
                          voluntary contributions).</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt-12 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Rates</p>
                        <p class="text-[9px]">Including land rates (Council Rates).</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt-4 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Motor vehicle and transport expenses</p>
                        <p class="text-[9px]">Including vehicle registration, fuel, WOF, vehicle
                          maintenance, roadside assist, parking, tolls,
                          public transport, taxis, and ride share services.</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="page-bnz__col-1/2 pt__6 pl__3">
                    <div
                      class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Utilities</p>
                        <p class="text-[9px]">Including electricity, gas, water,
                          telephone, TV, mobile, internet, etc.</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <label class="text-[10px] block mb-[2px]">Amount</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt-8 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Food and groceries</p>
                        <p class="text-[9px]">Including groceries, restaurants, cafes,
                          takeaways and meals, food delivery
                          subscriptions, (e)cigarettes, and alcohol.</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt-12 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Insurances</p>
                        <p class="text-[9px]">Including general (house, car, contents),
                          health, life, income, pet, etc.</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt-8 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Clothing</p>
                        <p class="text-[9px]">Including clothing and footwear,
                          hair, and beauty</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt-4 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Other regular expenses</p>
                        <p class="text-[9px]">Including regular doctors/dentist visits,
                          pharmacy costs, optical/physio/remedial/chiro/
                          alternative therapies, tithing/donations, holidays,
                          professional development, and adult education.</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

    <!-- page 4 -->
    <div class="page-bnz">
      <div class="page-bnz__container">
        <div class="page-bnz__content">
          <form action="/action_page.php">
            <div class="page-bnz__form">

              <div class="page-bnz__box">
                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">Other financial commitments</h3>
                </div>

                <div class="page-bnz__cols-2 pt__2 mb-6">
                  <div class="page-bnz__col-1/2 pr__3">
                    <div
                      class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Rent or board payments</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <label class="text-[10px] block mb-[2px]">Current payment</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__2 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Family/child support payments</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="page-bnz__col-1/2 pl__3">
                    <div
                      class="flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Body corporate fees
                          and leasehold payments</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <label class="text-[10px] block mb-[2px]">Current payment</label>
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <label class="text-[10px] block mb-[2px]">Frequency</label>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="pt__3 flex items-end justify-between relative before:absolute before:content-[''] before:w-full before:h-[10px] before:left-0 before:bottom-0 before:border-t before:border-solid before:border-[#6599D1] before:z-0">
                      <div class="flex-1 h-5 relative">
                        <p class="inline-block h-5 bg-[#EFF5FB] pr-2">Other</p>
                      </div>
                      <div class="flex-none w-[25%] bnz-input__wrapper mr__2">
                        <div class="relative">
                          <input class="indent-1 h-5 ml-0 w-full border border-solid border-[#6599D1]" type="text"
                            name="" placeholder="$">
                        </div>
                      </div>
                      <div class="bnz-input__wrapper">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-4"
                            style="padding-left: 4px;background-color:white;" type="text" id="fyear" name="fyear"
                            placeholder="WFMA">
                          <div>
                            <span class="bnz-input-fullbox bnz-input-box-1"></span>
                            <span class="bnz-input-fullbox bnz-input-box-2"></span>
                            <span class="bnz-input-fullbox bnz-input-box-3"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="page-bnz__section-title">
                  <p><strong>Section four -</strong> Complete this section only if completing this form for a personal
                    borrowing request.</p>
                </div>

                <div class="pt__2">
                  <p class="mb-1"><strong>Select a product you think might be suitable</strong></p>
                  <div class="bnz-input__checkbox-wrapper">
                    <div class="bnz-input__checkbox-group">
                      <label class="bnz-input__checkbox-label">Home loan
                        <input class="bnz-input__checkbox-input" type="checkbox">
                        <span class="bnz-input__checkmark"></span>
                      </label>
                    </div>
                    <div class="bnz-input__checkbox-group">
                      <label class="bnz-input__checkbox-label">Credit card
                        <input class="bnz-input__checkbox-input" type="checkbox">
                        <span class="bnz-input__checkmark"></span>
                      </label>
                    </div>
                    <div class="bnz-input__checkbox-group">
                      <label class="bnz-input__checkbox-label">Personal loan
                        <input class="bnz-input__checkbox-input" type="checkbox">
                        <span class="bnz-input__checkmark"></span>
                      </label>
                    </div>
                    <div class="bnz-input__checkbox-group">
                      <label class="bnz-input__checkbox-label">Overdraft
                        <input class="bnz-input__checkbox-input" type="checkbox">
                        <span class="bnz-input__checkmark"></span>
                      </label>
                    </div>
                    <div class="bnz-input__checkbox-group">
                      <label class="bnz-input__checkbox-label">Credit card limit increase
                        <input class="bnz-input__checkbox-input" type="checkbox">
                        <span class="bnz-input__checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="page-bnz__cols-2">
                  <div class="page-bnz__col-1/2 pt__2 pr__3">
                  </div>
                  <div class="page-bnz__col-1/2 pl__3">
                    <p><strong>Solicitor’s details</strong> (for new property purchases)</p>
                  </div>
                </div>

                <div class="page-bnz__cols-2 pt__2">
                  <div class="page-bnz__col-1/2 pr__3">
                    <div class="bnz-input__wrapper pt__2">
                      <label class="">Amount/limit requested</label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper pt__2">
                      <label class="">Purpose</label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper pt__2">
                      <label class="">Name of borrower e.g. LTC/Trust (if different from full legal name)</label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>
                  </div>
                  <div class="page-bnz__col-1/2 pl__3">
                    <div class="bnz-input__wrapper pt__2">
                      <label class="">Solicitor’s name</label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper pt__2">
                      <label class="">Firm</label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>
                    <div class="bnz-input__wrapper pt__2">
                      <label class="">Email address</label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="pt__2">
                  <p class="mb-1">Are you a First Home Buyer?*</p>
                  <div class="bnz-input__checkbox-wrapper">
                    <div class="bnz-input__checkbox-group">
                      <label class="bnz-input__checkbox-label">Yes
                        <input class="bnz-input__checkbox-input" type="checkbox">
                        <span class="bnz-input__checkmark"></span>
                      </label>
                    </div>
                    <div class="bnz-input__checkbox-group">
                      <label class="bnz-input__checkbox-label">No
                        <input class="bnz-input__checkbox-input" type="checkbox">
                        <span class="bnz-input__checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <p class="text-[10px] pt-2">*You are a First Home Buyer if you are purchasing or building an owner
                    occupied residential property in NZ for the first time and neither you nor any other borrowing
                    parties have owned an owner occupied
                    property in NZ previously.</p>
                </div>

                <div class="pt__2">
                  <p><strong>For bridging finance requests</strong></p>
                </div>

                <div class="page-bnz__cols-2 pt__2">
                  <div class="page-bnz__col-1/2 pr__3">
                    <div class="bnz-input__wrapper pt__2">
                      <label class="">Address of existing owner occupied property:</label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>
                  </div>
                  <div class="page-bnz__col-1/2 pl__3">
                    <div class="bnz-input__wrapper pt__2">
                      <label class="">Address of new owner occupied property:</label>
                      <div class="">
                        <input class="indent-1 ml-0 w-full border border-solid border-[#6599D1]" type="text" name="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="pt__2">
                  <p><strong>For bridging finance only</strong></p>
                </div>

                <div class="bnz-input__checkbox-wrapper">
                  <div class="bnz-input__checkbox-group">
                    <label class="bnz-input__checkbox-label">
                      <span>You confirm that the property you currently occupy is your principal place of residence and
                        that you intend to occupy the new property as your principal place of
                        residence after settlement.</span>
                      <input class="bnz-input__checkbox-input" type="checkbox">
                      <span class="bnz-input__checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="page-bnz__box">
                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">Consents and Declaration</h3>
                  <p>Lending criteria (including minimum equity requirements), terms and fees apply. A low equity
                    interest rate premium may apply. Please consider whether you have
                    adequate life, disability, and asset (house, contents etc) insurance.</p>
                </div>

                <div class="pt__2">
                  <h3 class="page-bnz__heading-3">Consent to electronic disclosure</h3>
                  <p><strong>1.1</strong> You consent to us: </p>
                  <div class="mb__2">
                    <ol class="pl__4 mb__2" style="list-style-type: lower-alpha;">
                      <li>meeting our disclosure obligations to you under the Credit Contracts and Consumer Finance
                        Act 2003; and</li>
                      <li>sending you other notices and communications in relation to this facility, in electronic
                        form and by electronic communication (if applicable). You agree that this may include:</li>
                      <li>us sending you an email, to the most recent email address you have provided to us, that
                        allows a disclosure statement and/or other information including the terms of this facility and
                        any related product (for example, insurance) or service, to be accessed from a website or by
                        means of the internet by commonly used internet browsers (including, but not limited to,
                        Internet Explorer, Safari and Google Chrome). You acknowledge that this may include us sending
                        you an email telling you that a disclosure statement and/or other information is available
                        through BNZ internet banking instead of sending you that information by post;</li>
                      <li>us sending you an email, to the most recent email address you have provided to us, with a
                        copy of a disclosure statement and/or other information, including the terms of this facility
                        and any related product (for example, insurance) or service, attached to the email in PDF form;
                        and/or</li>
                      <li>if you have BNZ internet banking, us making available, through BNZ internet banking,
                        ongoing information about this facility (for example, payments you have made during a relevant
                        period) instead of sending you paper statements. You acknowledge that this means you may not
                        receive paper statements.</li>
                    </ol>
                    <p>We will tell you before we stop sending you paper continuing disclosure statements.</p>
                  </div>
                  <p class="mb__2"><strong>1.2</strong> You agree that any electronic communication is treated as being
                    received by
                    you at the time
                    that it leaves our information system.</p>
                  <p><strong>1.3</strong> Please note that emails are transmitted over the internet which is an insecure
                    public domain.
                    There is a risk that emails could become corrupted, may not be delivered or may be delivered to
                    the incorrect email address or intercepted.</p>
                </div>

                <div class="pt__2 space-y-2">
                  <h3 class="page-bnz__heading-3">Personal Information Notice</h3>
                  <p>To offer and/or provide you with products or services we need to collect, use and disclose your
                    personal information in accordance with BNZ&rsquo;s Master Privacy Policy. Our Master Privacy
                    Policy sets out the purpose of this collection, details of how the information may be used or
                    disclosed, your rights to that information (such as access and correction), our legal
                    obligations and the consequences of not providing the information.</p>
                  <p>The Master Privacy Policy covers all our products and services, and all our interactions with you.
                    It is available on our website or you can ask us to send you a copy.</p>
                  <p>If you go ahead with any BNZ product or service, you may be required to consent to us collecting
                    information about you from credit reporting agencies, which we use to assess your
                    creditworthiness. If we need this, we will ask for your consent in the declarations section.
                  </p>
                  <p>If you give us, or ask us to collect, information about another person (for example, a guarantor or
                    an additional card holder), you must have their consent to provide this to us. By submitting
                    this form, you agree that you have sought, and that person has granted, their consent.</p>
                </div>

                <div class="pt__2 space-y-2">
                  <h3 class="page-bnz__heading-3">Your information, your choice</h3>

                  <div class="flex justify-between">
                    <div>
                      <p>BNZ and our trusted third parties can offer you information about various products, services
                        and promotions. If you do not want to receive these, please tick here</p>
                    </div>
                    <label class="bnz-input__checkbox-label w-8">
                      <input class="bnz-input__checkbox-input" type="checkbox">
                      <span class="bnz-input__checkmark"></span>
                    </label>
                  </div>
                  <div class="flex justify-between">
                    <div>
                      <p>We value your opinion and would like to invite you to participate in surveys and research. If
                        you are not willing to receive invitations to participate, please tick here</p>
                    </div>
                    <label class="bnz-input__checkbox-label w-8">
                      <input class="bnz-input__checkbox-input" type="checkbox">
                      <span class="bnz-input__checkmark"></span>
                    </label>
                  </div>
                </div>

                <div class="pt__4">
                  <p><strong>Declaration</strong></p>
                  <p>You are not less than 18 years of age, and have read and understood this form. You have read the
                    Personal Information Notice. You confirm that all the information supplied
                    by you is true and complete and understand that it has been given to enable us to consider your
                    request. You authorise BNZ to collect credit information about you from
                    credit reporting agencies for the purposes of assessing your creditworthiness. You certify that you
                    are not undischarged bankrupts, are not subject to any personal insolvency
                    procedure or proceedings under the Insolvency Act 2006 (including but not limited to the No Asset
                    Procedure, a Summary Instalment Order or a Proposal), nor are you in
                    default with any payment under any credit facility. Where you are applying for credit, you believe
                    that you can afford to service the credit you have applied for.</p>
                </div>

                <div class="page-bnz__cols-2 pt__4">
                  <div class="page-bnz__col-1/2 pr__3">
                    <p>Person 1</p>
                    <div class="flex justify-between items-end">
                      <div
                        class="bnz-input__wrapper flex-1 flex items-end h-12 mr-6 bg-white border border-solid border-[#6599D1]">
                        <label
                          class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Signature</label>
                        <div class="flex-1 bg-white">
                          <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                        </div>
                      </div>
                      <div class="flex">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fdate" name="fdate" placeholder="DD">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="MM">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="YY">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                      </div>
                    </div>




                  </div>
                  <div class="page-bnz__col-1/2 pl__3">
                    <p>Person 2</p>
                    <div class="flex justify-between items-end">
                      <div
                        class="bnz-input__wrapper flex-1 flex items-end h-12 mr-6 bg-white border border-solid border-[#6599D1]">
                        <label
                          class="text-[9px] leading-[20px] pl-2 pr-3 bg-white relative after:absolute after:content-[''] after:w-full after:h-[8px] after:left-0 after:bottom-0 after:border-r after:border-solid after:border-[#6599D1]">Signature</label>
                        <div class="flex-1 bg-white">
                          <input class="indent-1 focus:border-none w-full ml-0" type="text" name="">
                        </div>
                      </div>
                      <div class="flex">
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fdate" name="fdate" placeholder="DD">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="MM">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                        <div class="relative">
                          <input class="bnz-form__input bnz-input__col-2" style="background-color: white;" type="text"
                            id="fmonth" name="fmonth" placeholder="YY">
                          <div>
                            <span class="bnz-input-box bnz-input-box-1"></span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

  </div>

</body>

</html>
