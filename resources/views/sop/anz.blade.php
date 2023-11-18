<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>ANZ Statement of Position</title>
        <link rel="stylesheet" href="{{ asset('assets/css/sop/anz.blade.css') }}">
</head>

<body>
<div class="page-anz__wrapper">
@php
        $application = $data['data']['application'];
        $consumer = $data['data']['application']['consumer'];
        $joint_applicant =  $data['data']['application']['joint_applicant'];
        $dependents =  $data['data']['application']['dependents'];
        $incomes =  $data['data']['application']['incomes'];
        $expenses =  $data['data']['application']['expenses'];
        $assets =  $data['data']['application']['assets'];
        $liabilities =  $data['data']['application']['liabilities'];
        $step_statuses =  $data['data']['application']['step_statuses'];
        $my_money_map =  $data['data']['application']['my_money_map'];
        $download_sop =  $data['data']['application']['download_sop'];
    @endphp
        <div class="page-anz">
                <header class="page-anz__header">
                        <div class="page-anz__title-col">
                                <h2 class="page-anz__title">ANZ Statement of Position</h2>
                        </div>
                        <div class="page-anz__logo">
                                <img src="{{ asset('images/sop/anz.blade.png') }}" alt="">
                        </div>
                </header>
                <div class="page-anz__content">
                        <form action="/action_page.php">
                                <div class="page-anz__form">
                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label flex-none w-[50px]" for="fdate">As at:</label>
                                                <div class="anz-input__col-box">
                                                        <input class="anz-form__input anz-input__col-2" type="text" id="fdate" name="fdate" placeholder="DD"
                                                        value="{{ today()->format('d') }}">
                                                        <div>
                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                        </div>
                                                </div>
                                                <div class="anz-input__col-box">
                                                        <input class="anz-form__input anz-input__col-2" type="text" id="fmonth" name="fmonth" placeholder="MM"
                                                        value="{{ today()->format('m') }}">
                                                        <div>
                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                        </div>
                                                </div>
                                                <div class="anz-input__col-box">
                                                        <input class="anz-form__input anz-input__col-4" type="text" id="fyear" name="fyear"
                                                        value="{{ today()->format('Y') }}" placeholder="20YY">
                                                        <div>
                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="anz-page__5-col">
                                                <div class="anz-page__2-span">
                                                        <p><strong class="mr-4">Section 1</strong> Personal Details</p>
                                                        <p><strong class="mr-4">Section 2</strong> Personal Financial Details</p>
                                                        <p><strong class="mr-4">Section 3</strong> Business Details</p>
                                                </div>
                                                <div class="anz-page__3-span">
                                                        <p><strong class="mr-4">Section 4</strong> Business Financial Details</p>
                                                        <p><strong class="mr-4">Section 5</strong> Declarations</p>
                                                        <p><strong class="mr-4">Section 6</strong> Checklists</p>
                                                </div>
                                        </div>

                                        <h3 class="page-anz__subtitle">SECTION 1 – PERSONAL DETAILS</h3>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">ANZ customer number, if known</label>
                                                <div class="anz-form__label-md">
                                                        <h4 class="text-heading-4">Individual applicant details</h4>
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-8" type="text" name=""  value="{{ $consumer['id'] }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                        <span class="anz-input-box anz-input-box-2"></span>
                                                                        <span class="anz-input-box anz-input-box-3"></span>
                                                                        <span class="anz-input-box anz-input-box-4"></span>
                                                                        <span class="anz-input-box anz-input-box-5"></span>
                                                                        <span class="anz-input-box anz-input-box-6"></span>
                                                                        <span class="anz-input-box anz-input-box-7"></span>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <h4 class="text-heading-4">Joint applicant details</h4>
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-8" type="text" name=""  value="{{ $joint_applicant['id'] }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                        <span class="anz-input-box anz-input-box-2"></span>
                                                                        <span class="anz-input-box anz-input-box-3"></span>
                                                                        <span class="anz-input-box anz-input-box-4"></span>
                                                                        <span class="anz-input-box anz-input-box-5"></span>
                                                                        <span class="anz-input-box anz-input-box-6"></span>
                                                                        <span class="anz-input-box anz-input-box-7"></span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Title</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>
                                        @php
                    $application =  $data['data']['application']
                    @endphp
                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">First name</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['consumer']['first_name'] }}">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['has_joint_applicant'] ? $application['joint_applicant']['first_name'] : '' }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Middle name</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Surname</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['consumer']['last_name'] }}">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['has_joint_applicant'] ? $application['joint_applicant']['last_name'] : '' }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-checkbox">
                                                <label class="anz-form__label anz-form__label-sm">Current living situation</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Boarding
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Renting
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ (!$application['consumer']['current_address']['own_property'] ?? false) ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Own home
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ ($application['consumer']['current_address']['own_property'] ?? false) ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Living with parents/relatives
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Boarding
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Renting
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ ($application['has_joint_applicant'] && !$application['joint_applicant']['current_address']['own_property'] ?? false) ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Own home
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ ($application['has_joint_applicant'] && $application['joint_applicant']['current_address']['own_property'] ?? false) ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Living with parents/relatives
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input" style="align-items: flex-start;">
                                                @php
                                                    $currentAddress = $application['consumer']['current_address']['value'] ?? '';
                                                    $currentAddressParts = explode(',', $currentAddress);
                                                @endphp
                                                <label class="anz-form__label anz-form__label-sm pt-[3px]">Residential address</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $currentAddressParts[0] ?? '' }}">
                                                        </div>
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $currentAddressParts[1] ?? '' }}">
                                                        </div>
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $currentAddressParts[2] ?? '' }}">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        @php
                                                            $jointCurrentAddress = $application['joint_applicant']['current_address']['value'] ?? '';
                                                            $jointCurrentAddressParts = explode(',', $jointCurrentAddress);
                                                        @endphp
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $jointCurrentAddressParts[0] ?? '' }}">
                                                        </div>
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $jointCurrentAddressParts[1] ?? '' }}">
                                                        </div>
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $jointCurrentAddressParts[2] ?? '' }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Time at current address</label>
                                                <div class="anz-form__label-md box-item-end">
                                                        <div class="box-item-end mr-2">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ $application['consumer']['current_address']['duration'] ?? '' }}">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div>
                                                                        <span>Years</span>
                                                                </div>
                                                        </div>
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="" value="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div>
                                                                        <span>Months</span>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md box-item-end">
                                                        <div class="box-item-end mr-2">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ $application['joint_applicant']['current_address']['duration'] ?? '' }}">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div>
                                                                        <span>Years</span>
                                                                </div>
                                                        </div>
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="" value="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div>
                                                                        <span>Months</span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input" style="align-items: flex-start;">
                                                @php
                                                        $previousAddress = $application['consumer']['previous_address']['value'] ?? '';
                                                        $previousAddressParts = explode(',', $previousAddress);
                                                @endphp
                                                <label class="anz-form__label anz-form__label-sm pt-[3px]">Previous address
                                                        (If less than 3 years at above
                                                        residential address)</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $previousAddressParts[0] ?? '' }}">
                                                        </div>
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $previousAddressParts[1] ?? '' }}">
                                                        </div>
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $previousAddressParts[2] ?? '' }}">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        @php
                                                                $jointPreviousAddress = $application['joint_applicant']['previous_address']['value'] ?? '';
                                                                $jointPreviousAddressParts = explode(',', $jointPreviousAddress);
                                                        @endphp
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $jointPreviousAddressParts[0] ?? '' }}">
                                                        </div>
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $jointPreviousAddressParts[1] ?? '' }}">
                                                        </div>
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $jointPreviousAddressParts[2] ?? '' }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Time at previous address</label>
                                                <div class="anz-form__label-md box-item-end">
                                                        <div class="box-item-end mr-2">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ $application['consumer']['previous_address']['duration'] ?? '' }}">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div>
                                                                        <span>Years</span>
                                                                </div>
                                                        </div>
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="" value="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div>
                                                                        <span>Months</span>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md box-item-end">
                                                        <div class="box-item-end mr-2">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ $application['joint_applicant']['previous_address']['duration'] ?? '' }}">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div>
                                                                        <span>Years</span>
                                                                </div>
                                                        </div>
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div>
                                                                        <span>Months</span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Contact number</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['consumer']['phone'] }}">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['joint_applicant']['phone'] }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Email</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['consumer']['email'] }}">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['joint_applicant']['email'] }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-checkbox">
                                                <label class="anz-form__label anz-form__label-sm">Residency status</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">NZ citizen
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">NZ permanent resident
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Other
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__box-dashed flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">NZ citizen
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">NZ permanent resident
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Other
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__box-dashed flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-checkbox">
                                                <label class="anz-form__label anz-form__label-sm">Are you a NZ Tax resident only?</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Yes
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">No
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Yes
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">No
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Date of birth</label>
                                                <div class="anz-form__label-md box-item-end">
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ date('d', strtotime($application['consumer']['dob'])) }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ date('m', strtotime($application['consumer']['dob'])) }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-4" type="text" name="" value="{{ date('Y', strtotime($application['consumer']['dob'])) }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                        <span class="anz-input-box anz-input-box-2"></span>
                                                                        <span class="anz-input-box anz-input-box-3"></span>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md box-item-end">
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ date('d', strtotime($application['joint_applicant']['dob'])) }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ date('m', strtotime($application['joint_applicant']['dob'])) }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-4" type="text" name="" value="{{ date('Y', strtotime($application['joint_applicant']['dob'])) }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                        <span class="anz-input-box anz-input-box-2"></span>
                                                                        <span class="anz-input-box anz-input-box-3"></span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Number of dependants</label>
                                                <div class="anz-form__label-md box-item-end">
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ count($application['consumer']['dependents']) }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md box-item-end">
                                                        <div class="anz-input__col-box">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="" value="{{ count($application['joint_applicant']['dependents']) }}">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Age of dependants</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ implode(', ', array_map(function($dependant) { return (new DateTime($dependant['dob']))->diff(new DateTime('now'))->y; }, $application['consumer']['dependents'])) }}">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ implode(', ', array_map(function($dependant) { return (new DateTime($dependant['dob']))->diff(new DateTime('now'))->y; }, $application['joint_applicant']['dependents'])) }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input">
                                                <label class="anz-form__label anz-form__label-sm">Current occupation</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input" style="align-items: flex-start;">
                                                <label class="anz-form__label anz-form__label-sm">Current employer</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="anz-form__label-md box-item-end">
                                                                <div class="box-item-end mr-2">
                                                                        <div class="anz-input__col-box">
                                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                                <div>
                                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                                </div>
                                                                        </div>
                                                                        <div>
                                                                                <span>Years</span>
                                                                        </div>
                                                                </div>
                                                                <div class="box-item-end">
                                                                        <div class="anz-input__col-box">
                                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                                <div>
                                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                                </div>
                                                                        </div>
                                                                        <div>
                                                                                <span>Months</span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="anz-form__label-md box-item-end">
                                                                <div class="box-item-end mr-2">
                                                                        <div class="anz-input__col-box">
                                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                                <div>
                                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                                </div>
                                                                        </div>
                                                                        <div>
                                                                                <span>Years</span>
                                                                        </div>
                                                                </div>
                                                                <div class="box-item-end">
                                                                        <div class="anz-input__col-box">
                                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                                <div>
                                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                                </div>
                                                                        </div>
                                                                        <div>
                                                                                <span>Months</span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-checkbox">
                                                <label class="anz-form__label anz-form__label-sm">Employment type</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Full-time
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Part-time
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Self-employed
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Full-time
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Part-time
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Self-employed
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="page-anz__form-input" style="align-items: flex-start;">
                                                <label class="anz-form__label anz-form__label-sm">Previous occupation/employer (If current employment is
                                                        less than 3 years)</label>
                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="anz-form__label-md box-item-end">
                                                                <div class="box-item-end mr-2">
                                                                        <div class="anz-input__col-box">
                                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                                <div>
                                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                                </div>
                                                                        </div>
                                                                        <div>
                                                                                <span>Years</span>
                                                                        </div>
                                                                </div>
                                                                <div class="box-item-end">
                                                                        <div class="anz-input__col-box">
                                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                                <div>
                                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                                </div>
                                                                        </div>
                                                                        <div>
                                                                                <span>Months</span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="anz-form__label-md">
                                                        <div class="anz-input__box-dashed mb-2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="anz-form__label-md box-item-end">
                                                                <div class="box-item-end mr-2">
                                                                        <div class="anz-input__col-box">
                                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                                <div>
                                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                                </div>
                                                                        </div>
                                                                        <div>
                                                                                <span>Years</span>
                                                                        </div>
                                                                </div>
                                                                <div class="box-item-end">
                                                                        <div class="anz-input__col-box">
                                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                                <div>
                                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                                </div>
                                                                        </div>
                                                                        <div>
                                                                                <span>Months</span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- <input type="submit" value="Submit"> -->
                                </div>
                        </form>
                </div>
        </div>

        <div class="page-anz">
                <header class="page-anz__header">
                        <div class="page-anz__title-col">
                                <h2 class="page-anz__title">ANZ Statement of Position</h2>
                        </div>
                </header>
                <div class="page-anz__content">
                        <form action="/action_page.php">
                                <div class="page-anz__form mr__6">
                                        <h3 class="page-anz__subtitle mb__2">SECTION 2 – PERSONAL FINANCIAL DETAILS</h3>
                                        <p>Please only include your personal financial details. Business financial details are to be captured in
                                                section 3 and 4.</p>
                                        <div class="box-cols-4 box-between pt__4 mb__2">
                                                <div class="box-col-3-4">
                                                        <p><strong>Assets</strong> (what you own)</p>
                                                </div>
                                                <div class="box-col-1-4">
                                                        <p><strong>Current value</strong></p>
                                                </div>
                                        </div>

                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <p>Total non-ANZ bank accounts balance</p>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ array_sum(array_map(function($bank_account) { return $bank_account['bank'] !== 'ANZ' ? intval($bank_account['current_balance']) : 0; }, $application['assets']['main']['bank_accounts'])) }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <p>Total other cash assets (Shares/Bonds etc.)</p>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ array_sum(array_map(function($bank_account) { return intval($bank_account['value']); }, $application['assets']['main']['saving_investments'])) }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <p>Superannuation/KiwiSaver value</p>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ array_sum(array_map(function($bank_account) { return intval($bank_account['value']); }, $application['assets']['main']['kiwisavers'])) }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <p>Homes, rentals and other property</p>
                                                </div>
                                        </div>

                                        @for($i=0;$i<max(count($application['assets']['main']['properties'] ?? 0),count($application['assets']['joint']['properties'] ?? 0));$i++)
                                        <div class="box__flex mb__2">
                                                <label>Address</label>
                                                <div class="flex__1 pr__2">
                                                        <input class="anz-box__input-dashed" type="text" name="" value="{{ $application['assets']['main']['properties'][$i]['address'] ?? '' }}">
                                                </div>
                                        </div>

                                        <div class="box-cols-5">
                                                <div class="box-col-3-5 box__flex">
                                                        <label>Owned by</label>
                                                        <div class="flex__1 pl__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ isset($application['assets']['main']['properties'][$i]) ? $application['consumer']['first_name'] . ' ' . $application['consumer']['last_name'] : '' }}">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-5 box__flex">
                                                        <label class="px-1">Value $</label>
                                                        <div class="flex__1 pl__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['assets']['main']['properties'][$i]['market_value'] ?? '' }}">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-5 px-1">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Own home
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['assets']['main']['properties'][$i]['property_type']) && $application['assets']['main']['properties'][$i]['property_type'] == 'owner' ? 'checked' : ''  }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Holiday home
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['assets']['main']['properties'][$i]['property_type']) && $application['assets']['main']['properties'][$i]['property_type'] == 'holiday_home' ? 'checked' : ''  }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Investment property
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['assets']['main']['properties'][$i]['property_type']) && $application['assets']['main']['properties'][$i]['property_type'] == 'investment' ? 'checked' : ''  }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <label>Address</label>
                                                <div class="flex__1 pr__2">
                                                        <input class="anz-box__input-dashed" type="text" name="" value="{{ $application['assets']['joint']['properties'][$i]['address'] ?? '' }}">
                                                </div>
                                        </div>

                                        <div class="box-cols-5">
                                                <div class="box-col-3-5 box__flex">
                                                        <label>Owned by</label>
                                                        <div class="flex__1 pl__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ isset($application['assets']['joint']['properties'][$i]) ? $application['joint_applicant']['first_name'] . ' ' . $application['joint_applicant']['last_name'] : '' }}">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-5 box__flex">
                                                        <label class="px-1">Value $</label>
                                                        <div class="flex__1 pl__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['assets']['joint']['properties'][$i]['market_value'] ?? '' }}">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-5 px-1">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Own home
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['assets']['joint']['properties'][$i]['property_type']) && $application['assets']['joint']['properties'][$i]['property_type'] == 'owner' ? 'checked' : ''  }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Holiday home
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['assets']['joint']['properties'][$i]['property_type']) && $application['assets']['joint']['properties'][$i]['property_type'] == 'holiday_home' ? 'checked' : ''  }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Investment property
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['assets']['joint']['properties'][$i]['property_type']) && $application['assets']['joint']['properties'][$i]['property_type'] == 'investment' ? 'checked' : ''  }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        @endfor

                                        <div class="pt__4 mb__2">
                                                <p>Other assets (e.g. investments, boats, caravans, antiques)</p>
                                        </div>

                                        <div>
                                                <p>Note/Description</p>
                                        </div>

                                        @for($i=0;$i<max(count($application['assets']['main']['others'] ?? 0),count($application['assets']['joint']['others'] ?? 0));$i++)
                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['assets']['main']['others'][$i]['description'] ?? '' }}">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['assets']['main']['others'][$i]['value'] ?? '' }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['assets']['joint']['others'][$i]['description'] ?? '' }}">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['assets']['joint']['others'][$i]['value'] ?? '' }}">
                                                        </div>
                                                </div>
                                        </div>
                                        @endfor

                                        <div class="pt__4 mb__2">
                                                <p>Motor Vehicles</p>
                                        </div>

                                        <div>
                                                <p>Note/Description (e.g. 2012 Toyota Hilux)</p>
                                        </div>

                                        @for($i=0;$i<max(count($application['assets']['main']['vehicles'] ?? 0),count($application['assets']['joint']['vehicles'] ?? 0));$i++)
                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ isset($application['assets']['main']['vehicles'][$i]) ? (($application['assets']['main']['vehicles'][$i]['year'] ?? '') . ' ' . ($application['assets']['main']['vehicles'][$i]['make_and_model'] ?? '') . ' (' . ($application['assets']['main']['vehicles'][$i]['license'] ?? '') . ')') : '' }}">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ isset($application['assets']['main']['vehicles'][$i]) ? $application['assets']['main']['vehicles'][$i]['value'] : '' }}">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ isset($application['assets']['joint']['vehicles'][$i]) ? (($application['assets']['joint']['vehicles'][$i]['year'] ?? '') . ' ' . ($application['assets']['joint']['vehicles'][$i]['make_and_model'] ?? '') . ' (' . ($application['assets']['joint']['vehicles'][$i]['license'] ?? '') . ')') : '' }}">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ isset($application['assets']['joint']['vehicles'][$i]) ? $application['assets']['joint']['vehicles'][$i]['value'] : '' }}">
                                                        </div>
                                                </div>
                                        </div>
                                        @endfor
                                </div>
                        </form>
                </div>
        </div>

        <!-- page 3 -->
        <div class="page-anz">
                <header class="page-anz__header">
                        <div class="page-anz__title-col">
                                <h2 class="page-anz__title">ANZ Statement of Position</h2>
                        </div>
                </header>

                <div class="page-anz__content">
                        <form action="/action_page.php">
                                <div class="page-anz__form mr__6">
                                        <h3 class="page-anz__subtitle mb__2">SECTION 2 – PERSONAL FINANCIAL DETAILS (continued)</h3>
                                        <p><strong>Liabilities</strong> (what you owe)</p>

                                        <div class="box__flex pt__4">
                                                <div class="box__20"></div>
                                                <div class="box__54">
                                                        <p>Bank or lender name</p>
                                                </div>
                                                <div class="box__13">
                                                        <p>Limits </p>
                                                </div>
                                                <div class="box__13">
                                                        <p>Amount owing</p>
                                                </div>
                                        </div>

                                        @for($i=0;$i<max(count($application['liabilities']['main']['overdraft'] ?? 0),count($application['liabilities']['joint']['overdraft'] ?? 0));$i++)
                                        @if(isset($application['liabilities']['main']['overdraft'][$i]) && $application['liabilities']['main']['overdraft'][$i]['provider'] != 'ANZ')
                                        <div class="box__flex mb__2">
                                                <div class="box__20">
                                                        <p>Non-ANZ overdraft</p>
                                                </div>
                                                <div class="box__54">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['overdraft'][$i]['provider'] }}">
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['overdraft'][$i]['limit'] ?? '0' }}">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['overdraft'][$i]['balance'] ?? '0' }}">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        @endif

                                        @if(isset($application['liabilities']['joint']['overdraft'][$i]) && $application['liabilities']['joint']['overdraft'][$i]['provider'] != 'ANZ')
                                        <div class="box__flex mb__2">
                                                <div class="box__20">
                                                        <p>Non-ANZ overdraft</p>
                                                </div>
                                                <div class="box__54">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['joint']['overdraft'][$i]['provider'] }}">
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['joint']['overdraft'][$i]['limit'] ?? '0' }}">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['joint']['overdraft'][$i]['balance'] ?? '0' }}">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        @endif
                                        @endfor

                                        @for($i=0;$i<max(count($application['liabilities']['main']['credit_card'] ?? 0),count($application['liabilities']['joint']['credit_card'] ?? 0));$i++)
                                        @if(isset($application['liabilities']['main']['credit_card'][$i]) && $application['liabilities']['main']['credit_card'][$i]['provider'] != 'ANZ')
                                        <div class="box__flex mb__2">
                                                <div class="box__20">
                                                        <p>Non-ANZ credit card</p>
                                                </div>
                                                <div class="box__54">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['credit_card'][$i]['provider'] }}">
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['credit_card'][$i]['limit'] ?? '0' }}">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['credit_card'][$i]['balance'] ?? '0' }}">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        @endif

                                        @if(isset($application['liabilities']['joint']['credit_card'][$i]) && $application['liabilities']['joint']['credit_card'][$i]['provider'] != 'ANZ')
                                        <div class="box__flex mb__2">
                                                <div class="box__20">
                                                        <p>Non-ANZ credit card</p>
                                                </div>
                                                <div class="box__54">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['credit_card'][$i]['provider']}}">
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['credit_card'][$i]['limit'] ?? '0' }}">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ $application['liabilities']['main']['credit_card'][$i]['balance'] ?? '0' }}">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        @endif
                                        @endfor

                                        <div class="box__flex mb__2">
                                                <div class="box__20">
                                                        <p>Store cards</p>
                                                </div>
                                                <div class="box__54">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="box__20">
                                                        <p>Non-ANZ flexible loan</p>
                                                </div>
                                                <div class="box__54">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="box__13 pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="pt__4 mb__2">
                                                <p>Car loans, hire purchase, home and personal loans</p>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <p>Financial institution</p>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <p>Type (e.g. HP/Loan)</p>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <p>Current balance</p>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <p>Interest rate</p>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <p>Monthly repayment</p>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <p>Maturity date</p>
                                                </div>
                                        </div>

                                        <!-- col 1 -->
                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- col 2 -->
                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- col 3 -->
                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- col 4 -->
                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- col 5 -->
                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- col 6 -->
                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- col 7 -->
                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <!-- col 8 -->
                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pt__6 mb__2">
                                                <div class="flex-none w-[30%]"></div>
                                                <div class="flex-none w-[35%]">
                                                        <p><strong>Individual applicant details</strong></p>
                                                </div>
                                                <div class="flex-none w-[35%]">
                                                        <p><strong>Joint applicant details</strong></p>
                                                </div>
                                        </div>

                                        <div class="box__flex pt__6 pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Total other liabilities
                                                                (e.g. overdue bills, tax owing)</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Details of any debts you are a guarantor for</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="mb__1">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="mb__1">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="mb__1">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="mb__1">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>







                                </div>
                        </form>
                </div>
        </div>

        <!-- page 4 -->
        <div class="page-anz">
                <header class="page-anz__header">
                        <div class="page-anz__title-col">
                                <h2 class="page-anz__title">ANZ Statement of Position</h2>
                        </div>
                </header>
                <div class="page-anz__content">
                        <form action="/action_page.php">
                                <div class="page-anz__form mr__6">
                                        <h3 class="page-anz__subtitle mb__2">SECTION 2 – PERSONAL FINANCIAL DETAILS (continued)</h3>
                                        <p><strong>Income</strong></p>

                                        <div class="box__flex pt__6 mb__2">
                                                <div class="flex-none w-[30%]"></div>
                                                <div class="flex-none w-[35%]">
                                                        <p><strong>Individual applicant details</strong></p>
                                                </div>
                                                <div class="flex-none w-[35%]">
                                                        <p><strong>Joint applicant details</strong></p>
                                                </div>
                                        </div>

                                        @for($i=0;$i<max(count($application['incomes']['main']['salary_incomes'] ?? 0),count($application['incomes']['joint']['salary_incomes'] ?? 0));$i++)
                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Salary/wage</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ isset($application['incomes']['main']['salary_incomes'][$i]) ? $application['incomes']['main']['salary_incomes'][$i]['base_salary'] : 0 }}">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['incomes']['main']['salary_incomes'][$i]) && $application['incomes']['main']['salary_incomes'][$i]['base_salary_duration_type'] == 'weekly' ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['incomes']['main']['salary_incomes'][$i]) && $application['incomes']['main']['salary_incomes'][$i]['base_salary_duration_type'] == 'fortnightly' ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['incomes']['main']['salary_incomes'][$i]) && $application['incomes']['main']['salary_incomes'][$i]['base_salary_duration_type'] == 'monthly' ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Yearly
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['incomes']['main']['salary_incomes'][$i]) && $application['incomes']['main']['salary_incomes'][$i]['base_salary_duration_type'] == 'yearly' ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ isset($application['incomes']['joint']['salary_incomes'][$i]) ? $application['incomes']['joint']['salary_incomes'][$i]['base_salary'] : 0 }}">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['incomes']['joint']['salary_incomes'][$i]) && $application['incomes']['joint']['salary_incomes'][$i]['base_salary_duration_type'] == 'weekly' ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['incomes']['joint']['salary_incomes'][$i]) && $application['incomes']['joint']['salary_incomes'][$i]['base_salary_duration_type'] == 'fortnightly' ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['incomes']['joint']['salary_incomes'][$i]) && $application['incomes']['joint']['salary_incomes'][$i]['base_salary_duration_type'] == 'monthly' ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Yearly
                                                                                <input class="anz-input__checkbox-input" type="checkbox" {{ isset($application['incomes']['joint']['salary_incomes'][$i]) && $application['incomes']['joint']['salary_incomes'][$i]['base_salary_duration_type'] == 'yearly' ? 'checked' : '' }}>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Is this before or after tax?</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Before Tax
                                                                                <input class="anz-input__checkbox-input" type="checkbox" checked>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">After Tax
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Before Tax
                                                                                <input class="anz-input__checkbox-input" type="checkbox" checked>
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">After Tax
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Do you contribute to KiwiSaver?</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">Yes
                                                                        <input class="anz-input__checkbox-input" type="checkbox" {{ count($application['assets']['main']['kiwisavers']) > 0 ? 'checked' : '' }}>
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="box__inline-flex pr__2">
                                                                <div class="w-[40px]">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">No
                                                                        <input class="anz-input__checkbox-input" type="checkbox" {{ count($application['assets']['main']['kiwisavers']) <= 0 ? 'checked' : '' }}>
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">Yes
                                                                        <input class="anz-input__checkbox-input" type="checkbox" {{ count($application['assets']['joint']['kiwisavers']) > 0 ? 'checked' : '' }}>
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="box__inline-flex pr__2">
                                                                <div class="w-[40px]">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">No
                                                                        <input class="anz-input__checkbox-input" type="checkbox" {{ count($application['assets']['joint']['kiwisavers']) <= 0 ? 'checked' : '' }}>
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                </div>
                                        </div>
                                        @endfor

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Do you have a student loan?</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">Yes
                                                                        <input class="anz-input__checkbox-input" type="checkbox" {{ count($application['liabilities']['main']['student_loan']) > 0 ? 'checked' : '' }}>
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">No
                                                                        <input class="anz-input__checkbox-input" type="checkbox" {{ count($application['liabilities']['main']['student_loan']) <= 0 ? 'checked' : '' }}>
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">Yes
                                                                        <input class="anz-input__checkbox-input" type="checkbox" {{ count($application['liabilities']['joint']['student_loan']) > 0 ? 'checked' : '' }}>
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">No
                                                                        <input class="anz-input__checkbox-input" type="checkbox" {{ count($application['liabilities']['joint']['student_loan']) <= 0 ? 'checked' : '' }}>
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__1">
                                                <div class="flex-none w-[30%]">
                                                        <p>Total student loan balance</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__1">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ array_sum(array_map(function($student_loan) { return $student_loan['balance']; }, $application['liabilities']['main']['student_loan'])) }}">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="box__flex mb__1">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="" value="{{ array_sum(array_map(function($student_loan) { return $student_loan['balance']; }, $application['liabilities']['joint']['student_loan'])) }}">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Other income (e.g. working for
                                                                families, child support, student
                                                                allowance, accommodation
                                                                supplement, other)</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="mb__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Before Tax
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">After Tax
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="mb__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Before Tax
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">After Tax
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Gross rental income</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Gross Airbnb/holiday home
                                                                income</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Gross boarder income</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[35%] pl__3">
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Number of boarders</p>
                                                </div>
                                                <div class="pr__3">
                                                        <div class="anz-input__col-box box-inline">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">All Inclusive
                                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">Room Only
                                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                </div>
                                        </div>










                                </div>
                        </form>
                </div>
        </div>

        <!-- page 5 -->
        <div class="page-anz">
                <header class="page-anz__header">
                        <div class="page-anz__title-col">
                                <h2 class="page-anz__title">ANZ Statement of Position</h2>
                        </div>
                </header>
                <div class="page-anz__content">
                        <form action="/action_page.php">
                                <div class="page-anz__form mr__6">
                                        <h3 class="page-anz__subtitle mb__2">SECTION 2 – PERSONAL FINANCIAL DETAILS (continued)</h3>
                                        <div class="box__flex pt__4 mb__2">
                                                <div class="flex-none w-[65%]">
                                                        <p class="mb__2"><strong>Expenses</strong></p>
                                                        <p><strong>Living Expenses</strong></p>
                                                </div>
                                                <div class="flex-none w-[35%]">
                                                        <p><strong>Amount</strong></p>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Groceries & Food</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Utilities (e.g. electricity, gas)</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Phone/Mobile, Internet</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Transport & Vehicle Costs (e.g. petrol, vehicle servicing, maintenance,
                                                                public transport)</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Essential Personal Expenses (e.g. clothing, footwear, personal care,
                                                                school uniforms)</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="pt__4 mb__2">
                                                <p><strong>Fixed Expenses</strong></p>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Rent</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Board</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Council & Water Rates</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Body Corporate or Ground Rent Fees</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Childcare Costs (e.g. day care, nanny, after school care)</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Child Support Payments</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Home, Contents and/or Car Insurances</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Other Insurances (e.g. Health, Life, Critical Illness, Disability, Income Protection,
                                                                Boat, Pet)</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Buy Now Pay Later Repayments</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                        <div class="pt__4 mb__2">
                                                <p><strong>Other Significant Expenses</strong></p>
                                        </div>

                                        <div class="box__flex mb__1">
                                                <div class="flex-none w-[65%]">
                                                        <p>Other Significant Expenses (e.g. ongoing medical costs, other costs of
                                                                dependents, family contributions, tithings, private school fees, etc.)</p>
                                                </div>
                                                <div class="flex-none w-[35%] pr__3">
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>
                                                        <div class="box__flex mb__2">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                        <div class="anz-input__checkbox-flex">
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Weekly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Fortnightly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                                <div class="anz-input__checkbox-group">
                                                                        <label class="anz-input__checkbox-label">Monthly
                                                                                <input class="anz-input__checkbox-input" type="checkbox">
                                                                                <span class="anz-input__checkmark"></span>
                                                                        </label>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>










                                </div>
                        </form>
                </div>
        </div>

        <!-- page 6 -->
        <div class="page-anz">
                <header class="page-anz__header">
                        <div class="page-anz__title-col">
                                <h2 class="page-anz__title">ANZ Statement of Position</h2>
                        </div>
                </header>
                <div class="page-anz__content">
                        <form action="/action_page.php">
                                <div class="page-anz__form mr__6">
                                        <h3 class="page-anz__subtitle mb__2">SECTION 3 – BUSINESS DETAILS</h3>
                                        <p>Please provide the last 2 years of finalised financial reports.</p>

                                        <div class="box__flex pt__4 pr__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Full name of Business (and trading name)</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="mb__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Company number (if known)</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="mb__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Industry description</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="mb__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Franchise?</p>
                                                </div>
                                                <div class="flex-none w-[34%] pr__3">
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">Yes
                                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">No
                                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="box__inline-flex">
                                                                <span>If yes, which franchise?</span>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[34%] pr__3">
                                                        <div class="mb__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Number of Directors/Partners/Owners</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="anz-input__col-box box-inline">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Number of employees</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="anz-input__col-box box-inline">
                                                                <input class="anz-form__input anz-input__col-5" type="text" name="">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                        <span class="anz-input-box anz-input-box-2"></span>
                                                                        <span class="anz-input-box anz-input-box-3"></span>
                                                                        <span class="anz-input-box anz-input-box-4"></span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Date business started operating</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="anz-form__label-md box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Date current management started</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="anz-form__label-md box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2 mb__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Date main Director/Partner started in this line of business</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="anz-form__label-md box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box-item-end pr__2 mb__2">
                                                <div class="flex-none w-[66%]">
                                                        <p>If with ANZ for less than six months, number of months spent at previous bank</p>
                                                </div>
                                                <div class="flex-none w-[34%] pr__3">
                                                        <div class="anz-input__col-box box-inline">
                                                                <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                <div>
                                                                        <span class="anz-input-box anz-input-box-1"></span>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Previous bank</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="mb__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="pt__4 mb__2">
                                                <p>Commercial Property</p>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <label>Address</label>
                                                <div class="flex__1 pr__7">
                                                        <input class="anz-box__input-dashed" type="text" name="">
                                                </div>
                                        </div>

                                        <div class="box-item-end pr__2 mb__2">
                                                <div class="flex-none w-[66%]">
                                                        <div class="box__flex">
                                                                <label>Owned by</label>
                                                                <div class="flex__1 pr__2">
                                                                        <input class="anz-box__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[34%] pr__3">
                                                        <div class="box__flex">
                                                                <label class="px-1">Value $</label>
                                                                <div class="flex__1 pl__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <label>Address</label>
                                                <div class="flex__1 pr__7">
                                                        <input class="anz-box__input-dashed" type="text" name="">
                                                </div>
                                        </div>

                                        <div class="box-item-end pr__2 mb__2">
                                                <div class="flex-none w-[66%]">
                                                        <div class="box__flex">
                                                                <label>Owned by</label>
                                                                <div class="flex__1 pr__2">
                                                                        <input class="anz-box__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[34%] pr__3">
                                                        <div class="box__flex">
                                                                <label class="px-1">Value $</label>
                                                                <div class="flex__1 pl__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="pt__4 mb__2">
                                                <p>Net value of any business owned</p>
                                        </div>

                                        <div class="mb__1">
                                                <p>Note/Description</p>
                                        </div>

                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box-cols-4 box-between mb__2">
                                                <div class="box-col-3-4">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="box-col-1-4 box__flex">
                                                        <label>$</label>
                                                        <div class="flex__1">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                </div>
                        </form>
                </div>
        </div>

        <!-- page 7 -->
        <div class="page-anz">
                <header class="page-anz__header">
                        <div class="page-anz__title-col">
                                <h2 class="page-anz__title">ANZ Statement of Position</h2>
                        </div>
                </header>
                <div class="page-anz__content">
                        <form action="/action_page.php">
                                <div class="page-anz__form mr__6">
                                        <h3 class="page-anz__subtitle mb__2">SECTION 4 – BUSINESS FINANCIAL DETAILS</h3>
                                        <p><strong>Please provide details of any non-ANZ lending facilities</strong> (e.g. other bank overdrafts,
                                                hire
                                                purchases, other lending)</p>

                                        <div class="box__flex pt__4 mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <p>Institution
                                                                (e.g. bank/lender)</p>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <p>Type/description
                                                                (e.g. hire purchase/loan)</p>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <p>Current balance</p>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <p>Interest rate</p>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <p>Monthly repayment</p>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <p>Expiry date</p>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[21%]">
                                                        <div class="pr__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[13%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[7%] pr__2">
                                                        <div class="box__flex">
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                                <p>%</p>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[11%] pr__2">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div lass="flex__1 pr__2">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>Is the business tax/GST position current?</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">Yes
                                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="anz-input__checkbox-group box-inline">
                                                                <label class="anz-input__checkbox-label">No
                                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                                        <span class="anz-input__checkmark"></span>
                                                                </label>
                                                        </div>
                                                        <div class="box__inline-flex">
                                                                <span>If no, please detail clearance arrangements in the following field.</span>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Clearance arrangements details</p>
                                                </div>
                                                <div class="flex-none w-[70%]">
                                                        <div class="mb__2">
                                                                <input class="anz-form__input-dashed" type="text" name="">
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="pt__2 mb__2">
                                                <p><strong>Please attach your current summary from Xero, MYOB, etc.</strong> Otherwise fill in the section
                                                        below.</p>
                                        </div>

                                        <div class="box__flex pt__4 mb__2">
                                                <div class="flex-none w-[30%]"></div>
                                                <div class="flex-none w-[14%]">
                                                        <p>Current</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <p>30 days</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <p>60 days</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <p>90 days</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <p>Tota</p>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Creditors<br>
                                                                (e.g. people you owe money to)</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Debtors<br>
                                                                (e.g. people who owe you money)</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Cash</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Stock</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex mb__2">
                                                <div class="flex-none w-[30%]">
                                                        <p>Work in progress</p>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="flex-none w-[14%]">
                                                        <div class="box__flex">
                                                                <label>$</label>
                                                                <div class="flex__1">
                                                                        <input class="anz-form__input-dashed" type="text" name="">
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="box__flex pr__2">
                                                <div class="flex-none w-[32%]">
                                                        <p>What is your latest balance sheet date?</p>
                                                </div>
                                                <div class="flex-none w-[68%] pr__3">
                                                        <div class="box-item-end">
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-2" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="anz-input__col-box">
                                                                        <input class="anz-form__input anz-input__col-4" type="text" name="">
                                                                        <div>
                                                                                <span class="anz-input-box anz-input-box-1"></span>
                                                                                <span class="anz-input-box anz-input-box-2"></span>
                                                                                <span class="anz-input-box anz-input-box-3"></span>
                                                                        </div>
                                                                </div>
                                                                <p>(Please supply us with a copy)</p>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="pt__4">
                                                <h3 class="page-anz__subtitle mb__2">SECTION 5 – DECLARATIONS</h3>
                                                <p>By completing and returning this form:</p>
                                                <p>I/we certify that all information supplied in this form is true, correct and complete in every respect
                                                        and I/we have the authority to
                                                        provide this information.</p>
                                                <p>I/we understand that, and consent to, ANZ collecting, using and disclosing the personal information
                                                        that
                                                        I/we provide as part of
                                                        this form in accordance with ANZ’s Privacy Statement available at www.anz.co.nz/privacy.</p>
                                                <p>I/we confirm that I/we are happy for ANZ to get a credit report about me/us. I/we understand this will
                                                        involve the disclosure of
                                                        personal information to credit reporting agencies who may also disclose that information to their
                                                        customers.</p>
                                        </div>

                                </div>
                        </form>
                </div>
        </div>

        <!-- page 8 -->
        <div class="page-anz">
                <header class="page-anz__header">
                        <div class="page-anz__title-col">
                                <h2 class="page-anz__title">ANZ Statement of Position</h2>
                        </div>
                </header>
                <div class="page-anz__content">
                        <form action="/action_page.php">
                                <div class="page-anz__form mr__6">
                                        <h3 class="page-anz__subtitle mb__2">SECTION 6 – CHECKLISTS</h3>
                                        <p><strong>Please provide the following with your completed application:</strong></p>

                                        <div class="anz-input__checkbox-group pt__2 mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>Confirmation of income (e.g. wage slip, letter from employer, rental income).</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                <span>90 days of bank statements for each non-ANZ bank account in PDF format (not a transaction
                  summary).</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>The last 2 years of finalised financial reports (Business customers only).</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                <span>Valid proof of identification. Examples of acceptable forms of identification can be found at
                  anz.co.nz/ID or any ANZ branch.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                <span>A piece of mail addressed to your residential address from the last three months. Examples of
                  acceptable forms of address
                  verification can be found at anz.co.nz/ID or any ANZ branch.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <p><strong>Home loan applicants will also need to provide:</strong></p>

                                        <div class="anz-input__checkbox-group pt__2 mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>Confirmation of deposit and/or equity (e.g. statement showing savings).</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>Signed sale and purchase agreement if purchase property located.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>If selling and purchasing, signed sale and purchase agreement of property being sold.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                <span>For a Family Trust/LTC (Look Through Company) a copy of the Trust Deed/Company Certificate of
                  Incorporation.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>If building, a copy of the Building Contract/Fixed Price Contract and the Building Consent.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <p><strong>Ask us about:</strong></p>

                                        <div class="anz-input__checkbox-group pt__2 mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>An ANZ transaction account to make your loan payments.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>ANZ goMoney mobile app.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>ANZ Internet Banking.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>ANZ Phone Banking.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>Home and contents insurance.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <div class="anz-input__checkbox-group mb__2">
                                                <label class="anz-input__checkbox-label">
                                                        <span>Life and Living insurance.</span>
                                                        <input class="anz-input__checkbox-input" type="checkbox">
                                                        <span class="anz-input__checkmark"></span>
                                                </label>
                                        </div>

                                        <p>For more information call 0800 269 296, visit any branch of ANZ or anz.co.nz</p>

                                </div>
                        </form>
                </div>
        </div>

</div>

</body>

</html>
