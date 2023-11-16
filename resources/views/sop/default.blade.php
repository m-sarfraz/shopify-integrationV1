<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <style>
            body {
                font-family: sans-serif;
            }
            .page-break {
                page-break-after: always;
            }
            .text-sm {
                font-size: 10px;
            }
            .text-md, p {
                font-size: 12px;
            }
            .text-white {
                color: #FFFFFF;
            }
            .text-blue {
                color: #06AED4;
            }
            .text-dark-blue {
                color: #164C63;
            }
            .font-weight-bolder {
                font-weight: bolder;
            }
            .bg-color-teal-500 {
                background-color: #0E7090;
            }
            .bg-color-gray-100 {
                background-color: #F5F5F5;
            }
            td, tr, p, span {
                padding: 0;
                margin: 0;
            }
            .blue-border{
                border: 1px #06AED4 solid;
            }
            .margin-left-5 {
                margin-left: 5px;
            }
            .margin-right-5 {
                margin-left: 5px;
            }
            .padding-top-5 {
                padding-top: 5px;
            }
            .padding-top-10 {
                padding-top: 10px;
            }
            .vertical-align-middle {
                vertical-align: middle;
            }
            .vertical-align-bottom {
                vertical-align: bottom;
            }
            .text-align-center {
                text-align: center;
            }
            .text-transform-capitalize {
                text-transform: capitalize;
            }
        </style>
    </head>
    <body><div>
        <div>
            <h1 class="text-dark-blue">Statement of Position</h1>
        </div>
        <div class="bg-color-gray-100" style="padding: 10px;">
            <div class="text-sm">
                Please note that where there is more than one applicant but the applicants are not a couple(married,
                engaged/defacto etc.), Person 2 must complete a separate form
            </div>
            <div class="bg-color-teal-500 text-white" style="padding: 5px;">
                <span class="font-weight-bolder">SECTION ONE</span> - Please complete for all requests
            </div>
            <div style="padding: 5px">
                <table style="width:100%">
                    <tr>
                        <td colspan="2">
                            <p>
                                <span class="font-weight-bolder">Personal details</span>
                                (Person 1)
                            </p>
                        </td>
                        <td colspan="2">
                            <p>
                                <span class="font-weight-bolder">Personal details</span>
                                (Person 2)
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="padding-top-10">
                            <p>
                                <span class="font-weight-bolder">Name</span>
                            </p>
                        </td>
                        <td colspan="2" class="padding-top-10">
                            <p>
                                <span class="font-weight-bolder">Name</span>
                            </p>
                        </td>
                    </tr>
                    @php
                    $application =  $data['data']['application']
                    @endphp 
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p class="margin-right-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">First</span> <span class="text-blue">|</span>
                                {{$application['consumer']['first_name']}}
                            </p>
                        </td>
                        <td colspan="2" class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">First</span> <span class="text-blue">|</span>
                                {{$application['joint_applicant'] ? $application['joint_applicant']['first_name'] : null}}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p class="margin-right-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Last</span> <span class="text-blue">|</span>
                                {{$application['consumer']['last_name']}}
                            </p>
                        </td>
                        <td colspan="2" class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Last</span> <span class="text-blue">|</span>
                                {{$application['joint_applicant'] ? $application['joint_applicant']['last_name'] : null}}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="padding-top-10">
                            <p>
                                <span class="font-weight-bolder">Email address*</span>
                            </p>
                        </td>
                        <td colspan="2" class="padding-top-10">
                            <p>
                                <span class="font-weight-bolder">Email address*</span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="margin-left-5">
                                    {{$application['consumer']['email']}}
                                </span>
                            </p>
                        </td>
                        <td colspan="2" class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if($application['joint_applicant'])
                                <span class="margin-left-5">
                                    {{$application['joint_applicant']['email']}}
                                </span>
                                @else
                                <span class="text-white">N/A</span>
                                @endif
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="padding-top-10">
                            <p class="margin-left-5 text-md">Number of dependents in your care</p>
                            <p class="margin-left-5 blue-border">
                                <span class="margin-left-5">
                                    {{count($application['dependents']['main'])}}
                                </span>
                            </p>
                        </td>
                        <td class="padding-top-10">
                            <p class="margin-left-5 text-sm">
                                *By providing your email address, you consent to the 
                                <!-- lender variable goes here  -->
                                group contacting you
                                electronically (e.g. by email, text, website link) from time to time with
                                information about their products, services, and promotions, and without an
                                unsubscribe facility.
                            </p>
                        </td>
                        <td class="padding-top-10">
                            <p class="margin-left-5 text-md">Number of dependents in your care</p>
                            <p class="margin-left-5 blue-border">
                                @if($application['joint_applicant'])
                                <span class="margin-left-5">
                                    {{count($application['dependents']['joint'])}}
                                </span>
                                @else
                                <span class="text-white">N/A</span>
                                @endif
                            </p>
                        </td>
                        <td class="padding-top-10">
                            <p class="margin-left-5 text-sm">
                                *By providing your email address, you consent to the
                                <!-- lender variable goes here  -->
                                group contacting you
                                electronically (e.g. by email, text, website link) from time to time with
                                information about their products, services, and promotions, and without an
                                unsubscribe facility.
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="bg-color-gray-100" style="margin-top:10px;padding: 10px;">
            <div class="bg-color-teal-500 text-white" style="padding: 5px;">
                <span class="font-weight-bolder">SECTION TWO</span> - Complete this section only if you are a new
                <!-- lender varibles goes here  -->
                customer or your details have changed since your last application. Otherwise, go to
                section 3.
            </div>
            <div style="padding: 5px">
                <table style="width:100%">
                    <tr>
                        <td colspan="2">
                            <p class="font-weight-bolder">Person 1</p>
                        </td>
                        <td colspan="2">
                            <p class="font-weight-bolder">Person 2</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p class="font-weight-bolder">Date of birth</p>
                            <p class="blue-border">
                                <span>
                                    {{str_split(date('d', strtotime($application['consumer']['dob'])))[0]}}
                                    {{str_split(date('d', strtotime($application['consumer']['dob'])))[1]}}
                                </span>
                                <span class="text-blue">|</span>
                                <span>
                                    {{str_split(date('m', strtotime($application['consumer']['dob'])))[0]}}
                                    {{str_split(date('m', strtotime($application['consumer']['dob'])))[1]}}
                                </span>
                                <span class="text-blue">|</span>
                                <span>
                                    {{str_split(date('Y', strtotime($application['consumer']['dob'])))[2]}}
                                    {{str_split(date('Y', strtotime($application['consumer']['dob'])))[3]}}
                                </span>
                            </p>
                        </td>
                        <td colspan="2">
                            <p class="font-weight-bolder">Date of birth</p>
                            @if($application['joint_applicant'] !== null)
                            <p class="blue-border">
                                <span>
                                    {{str_split(date('d', strtotime($application['joint_applicant']['dob'])))[0]}}
                                    {{str_split(date('d', strtotime($application['joint_applicant']['dob'])))[1]}}
                                </span>
                                <span class="text-blue">|</span>
                                <span>
                                    {{str_split(date('m', strtotime($application['joint_applicant']['dob'])))[0]}}
                                    {{str_split(date('m', strtotime($application['joint_applicant']['dob'])))[1]}}
                                </span>
                                <span class="text-blue">|</span>
                                <span>
                                    {{str_split(date('Y', strtotime($application['joint_applicant']['dob'])))[2]}}
                                    {{str_split(date('Y', strtotime($application['joint_applicant']['dob'])))[3]}}
                                </span>
                            </p>
                            @else
                            <p class="blue-border">DD<span class="text-blue">|</span>MM<span class="text-blue">|</span>YY</p>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="padding-top-10">
                            <p>
                                <span class="font-weight-bolder">Residential Address</span>
                            </p>
                        </td>
                        <td colspan="2" class="padding-top-10">
                            <p>
                                <span class="font-weight-bolder">Residential Address</span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p class="margin-left-5">
                                Address <span class="text-blue">|</span> {{$application['consumer']['current_address']['value']}}
                            </p>
                        </td>
                        <td colspan="2" class="blue-border">
                            <p class="margin-right-5">
                                Address <span class="text-blue">|</span>
                                @if($application['joint_applicant'])
                                {{$application['joint_applicant']['current_address']['value']}}
                                @endif
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <span>How long have you lived there?</span>
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-right-5">
                                Years <span class="text-blue">|</span> {{$application['consumer']['current_address']['duration']}}
                            </p>
                        </td>
                        <td>
                            <p>
                                <span>How long have you lived there?</span>
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5">
                                Years <span class="text-blue">|</span> {{$application['joint_applicant'] ? $application['joint_applicant']['current_address']['duration'] : NULL}}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="padding-top-10">
                            <p>If you have lived at the above address for less than 3 years, what was your previous
                                address?</p>
                        </td>
                        <td colspan="2" class="padding-top-10">
                            <p>If you have lived at the above address for less than 3 years, what was your previous
                                address?</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p class="margin-right-5">
                                Address <span class="text-blue">|</span>
                                @if($application['consumer']['previous_address'])
                                {{$application['consumer']['previous_address']['value']}}
                                @endif
                            </p>
                        </td>
                        <td colspan="2" class="blue-border">
                            <p class="margin-right-5">
                               Address <span class="text-blue">|</span>
                                @if($application['joint_applicant'] && $application['joint_applicant']['previous_address'])
                                {{$application['joint_applicant']['previous_address']['value']}}
                                @endif
                            </p>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <span>How long have you lived there?</span>
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-right-5">
                                Years <span class="text-blue">|</span> {{$application['consumer'] && $application['consumer']['previous_address'] ? $application['consumer']['previous_address']['duration'] : NULL}}
                            </p>
                        </td>
                        <td>
                            <p>
                                <span>How long have you lived there?</span>
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5">
                                Years <span class="text-blue">|</span> {{$application['joint_applicant'] && $application['joint_applicant']['previous_address'] ? $application['joint_applicant']['previous_address']['duration'] : NULL}}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p>
                                <span class="font-weight-bolder">Residence Type</span><br/>
                                Do you own this property?
                            </p>
                        </td>
                        <td colspan="2">
                            <p>
                                <span class="font-weight-bolder">Residence Type</span><br/>
                                Do you own this property?
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="radio" {{$application['consumer']['current_address']['own_property'] === 1 ? 'checked' : null}}><span class="vertical-align-middle text-md">Yes</span>
                            <input type="radio" {{$application['consumer']['current_address']['own_property'] === 0 ? 'checked' : null}}><span class="vertical-align-middle text-md">No</span>
                        </td>
                        <td colspan="2">
                            <input type="radio" {{$application['joint_applicant'] ? $application['joint_applicant']['current_address']['own_property'] === 1 ? "checked" : null : null}}><span class="vertical-align-middle text-md">Yes</span>
                            <input type="radio" {{$application['joint_applicant'] ? $application['joint_applicant']['current_address']['own_property'] === 0 ? "checked" : null : null}}><span class="vertical-align-middle text-md">No</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p class="font-weight-bolder">
                                Phone
                                <span class="text-blue">|</span>
                                {{$application['consumer']['phone']}}
                            </p>
                        </td>
                        <td colspan="2" class="blue-border">
                            <p class="font-weight-bolder">
                                Phone
                                <span class="text-blue">|</span>
                                @if($application['joint_applicant'])
                                {{$application['joint_applicant']['phone']}}
                                @endif
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="bg-color-gray-100" style="margin-top: 10px; padding: 10px;">
            <div class="bg-color-teal-500 text-white" style="padding: 5px;">
                <span class="font-weight-bolder">SECTION THREE</span> - Please complete for all requests
            </div>
            <div style="padding:5px;" class="padding-top-10 font-weight-bolder text-dark-blue">
                3a. Your Employment and Income
            </div>
            <div style="padding: 5px">
                <table style="width:100%">
                    <tr>
                        <td colspan="2">
                            <p class="font-weight-bolder">Person 1</p>
                        </td>
                        <td colspan="2">
                            <p class="font-weight-bolder">Person 2</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="font-weight-bolder padding-top-5 blue-border">
                            <p>
                                Type of employment
                                <span class="text-blue">|</span>
                                @if(isset($application['incomes']['main']['salary_incomes'][0]))
                                    @if($application['incomes']['main']['salary_incomes'][0]['employment_type'] === 'full_time')
                                    Full Time
                                    @elseif($application['incomes']['main']['salary_incomes'][0]['employment_type'] === 'part_time')
                                    Part Time
                                    @else
                                    Casual
                                    @endif
                                @endif
                            </p>
                        </td>
                        <td colspan="2" class="font-weight-bolder padding-top-5 blue-border">
                            <p>
                                Type of employment
                                <span class="text-blue">|</span>
                                @if($application['has_joint_applicant'] &&
                                isset($application['incomes']['joint']['salary_incomes'][0]))
                                    @if($application['incomes']['joint']['salary_incomes'][0]['employment_type'] === 'full_time')
                                    Full Time
                                    @elseif($application['incomes']['joint']['salary_incomes'][0]['employment_type'] === 'part_time')
                                    Part Time
                                    @else
                                    Casual
                                    @endif
                                @endif
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Employer</span>
                                <span class="text-blue">|</span>
                                @if(isset($application['incomes']['main']['salary_incomes'][0]))
                                {{$application['incomes']['main']['salary_incomes'][0]['employer']}}
                                @endif
                            </p>
                        </td>
                        <td colspan="2" class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Employer</span>
                                <span class="text-blue">|</span>
                                @if($application['has_joint_applicant'] &&
                                isset($application['incomes']['joint']['salary_incomes'][0]))
                                    {{$application['incomes']['joint']['salary_incomes'][0]['employer']}}
                                @endif
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Position</span>
                                <span class="text-blue">|</span>
                                @if(isset($application['incomes']['main']['salary_incomes'][0]))
                                {{$application['incomes']['main']['salary_incomes'][0]['occupation']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Start Date</span>
                                <span class="text-blue">|</span>
                                @if(isset($application['incomes']['main']['salary_incomes'][0]))
                                {{date('d-m-Y', strtotime($application['incomes']['main']['salary_incomes'][0]['start_date']))}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Position</span>
                                <span class="text-blue">|</span>
                                @if($application['has_joint_applicant'] &&
                                isset($application['incomes']['joint']['salary_incomes'][0]))
                                    {{$application['incomes']['joint']['salary_incomes'][0]['occupation']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Start Date</span>
                                <span class="text-blue">|</span>
                                @if($application['has_joint_applicant'] &&
                                isset($application['incomes']['joint']['salary_incomes'][0]))
                                    {{date('d-m-Y', strtotime($application['incomes']['joint']['salary_incomes'][0]['start_date']))}}
                                @endif
                            </p>
                        </td>
                    </tr>
                    @if(count($application['incomes']['main']['salary_incomes']) > 1 ||
                        count($application['incomes']['joint']['salary_incomes']) > 1)
                    <tr>
                        <td colspan="2">
                            <p class="text-md">If less than 3 years, who was your previous employer/s?</p>
                        </td>
                        <td colspan="2">
                            <p class="text-md">If less than 3 years, who was your previous employer/s?</p>
                        </td>
                    </tr>
                    <tr>
                        @for($i = 1; $i < max(count($application['incomes']['main']['salary_incomes']),
                        count($application['incomes']['joint']['salary_incomes'])); $i++)
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Employer</span>
                                <span class="text-blue">|</span>
                                @if(isset($application['incomes']['main']['salary_incomes'][$i]))
                                {{$application['incomes']['main']['salary_incomes'][$i]['employer']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Start Date</span>
                                <span class="text-blue">|</span>
                                @if(isset($application['incomes']['main']['salary_incomes'][$i]))
                                    {{$application['incomes']['main']['salary_incomes'][$i]['start_date']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Employer</span>
                                <span class="text-blue">|</span>
                                @if(isset($application['incomes']['joint']['salary_incomes'][$i]))
                                    {{$application['incomes']['joint']['salary_incomes'][$i]['employer']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                <span class="font-weight-bolder margin-right-5">Start Date</span>
                                <span class="text-blue">|</span>
                                @if(isset($application['incomes']['joint']['salary_incomes'][$i]))
                                    {{$application['incomes']['main']['salary_incomes'][$i]['start_date']}}
                                @endif
                            </p>
                        </td>
                        @endfor
                    </tr>
                    @endif
                </table>
            </div>
            <div class="page-break"></div>
            <div style="padding:5px;">
                <p class="padding-top-10 font-weight-bolder text-dark-blue">Your Income</p>
                <p class="text-md">Please detail all income types e.g. Working for families, Investment Income, Bonus, Boarder Income. For Rental Income, please refer to section 3b</p>
            </div>
            <div style="padding: 5px">
                <table style="width:100%">
                    <tr>
                        <td colspan="3">
                            <p class="font-weight-bolder">Personal income</p>
                        </td>
                        <td colspan="3">
                            <p class="font-weight-bolder">Personal income</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="vertical-align-bottom">
                            <p>Salary/Wages</p>
                        </td>
                        <td>
                            <p>Amount</p>
                            @if(isset($application['incomes']['main']['salary_incomes'][0]))
                            <p class="blue-border">

                                ${{number_format($application['incomes']['main']['salary_incomes'][0]['base_salary'], 2, '.' , ',')}}

                            </p>
                            @else
                            <p class="blue-border">
                                None
                            </p>
                            @endif
                        </td>
                        <td>
                            <p>Frequency</p>
                            @if(isset($application['incomes']['main']['salary_incomes'][0]))
                            <p class="text-transform-capitalize blue-border">

                                {{$application['incomes']['main']['salary_incomes'][0]['base_salary_duration_type']}}

                            </p>
                            @else
                            <p class="blue-border">
                                None
                            </p>
                            @endif
                        </td>
                        <td class="vertical-align-bottom">
                            <p>Salary/Wages</p>
                        </td>
                        <td>
                            <p>Amount</p>
                            <p class="blue-border">
                            @if(isset($application['incomes']['joint']['salary_incomes'][0]))
                                {{number_format($application['incomes']['joint']['salary_incomes'][0]['base_salary'], 2, '.', ',')}}
                            @else
                                None
                            @endif
                            </p>
                        </td>
                        <td>
                            <p>Frequency</p>
                            <p class="blue-border text-transform-capitalize">
                            @if(isset($application['incomes']['joint']['salary_incomes'][0]))
                                {{$application['incomes']['joint']['salary_incomes'][0]['base_salary_duration_type']}}
                            @else
                                None
                            @endif
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Other Income Type</p>
                        </td>
                        <td>
                            <p>Amount</p>
                            <p class="blue-border text-transform-capitalize">
                            @if(isset($application['incomes']['joint']['salary_incomes'][0]))
                                {{$application['incomes']['joint']['salary_incomes'][0]['base_salary']}}
                            @else
                                None
                            @endif
                            </p>
                        </td>
                        <td>
                            <p>Frequency</p>
                            <p class="blue-border text-transform-capitalize">
                            @if(isset($application['incomes']['joint']['salary_incomes'][0]))
                                {{$application['incomes']['joint']['salary_incomes'][0]['base_salary_duration_type']}}
                            @else
                                None
                            @endif
                            </p>
                        </td>
                        <td>
                            <p>Other Income Type</p>
                        </td>
                        <td>
                            <p>Amount</p>
                            <p class="blue-border text-transform-capitalize">
                            @if(isset($application['incomes']['joint']['salary_incomes'][0]))
                                {{$application['incomes']['joint']['salary_incomes'][0]['base_salary']}}
                            @else
                                None
                            @endif
                            </p>
                        </td>
                        <td>
                            <p>Frequency</p>
                            <p class="blue-border text-transform-capitalize">
                            @if(isset($application['incomes']['joint']['salary_incomes'][0]))
                                {{$application['incomes']['joint']['salary_incomes'][0]['base_salary_duration_type']}}
                            @else
                                None
                            @endif
                            </p>
                        </td>
                    </tr>
                    @php
                    $countMain = isset($application['download_sop']['incomes']['main']) ?
                    count($application['download_sop']['incomes']['main']) : 0;
                    $countJoint = isset($application['download_sop']['incomes']['joint']) ?
                    count($application['download_sop']['incomes']['joint']) : 0;
                    @endphp
                    @for($i = 0; $i < max($countMain, $countJoint); $i++)
                    <tr>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if(isset($application['download_sop']['incomes']['main'][$i]))
                                    {{$application['download_sop']['incomes']['main'][$i]['text']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if(isset($application['download_sop']['incomes']['main'][$i]))
                                    {{$application['download_sop']['incomes']['main'][$i]['value']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5 text-transform-capitalize">
                                @if(isset($application['download_sop']['incomes']['main'][$i]))
                                    {{$application['download_sop']['incomes']['main'][$i]['frequency']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if(isset($application['download_sop']['incomes']['joint'][$i]))
                                    {{$application['download_sop']['incomes']['joint'][$i]['text']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if(isset($application['download_sop']['incomes']['joint'][$i]))
                                    {{$application['download_sop']['incomes']['joint'][$i]['value']}}
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5 text-transform-capitalize">
                                @if(isset($application['download_sop']['incomes']['joint'][$i]))
                                    {{$application['download_sop']['incomes']['joint'][$i]['frequency']}}
                                @endif
                            </p>
                        </td>
                    </tr>
                    @endfor
                    @if(isset($application['download_sop']['incomes']['both']))
                    <tr>
                        <td colspan="6">
                            <p>Other Income Type for Both Applicants</p>
                        </td>
                    </tr>
                    @foreach($application['download_sop']['incomes']['both'] as $income)
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                {{$income['text']}}
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                {{$income['value']}}
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5 text-transform-capitalize">
                                {{$income['frequency']}}
                            </p>
                        </td>
                        <td class="blue-border">
                        </td>
                        <td class="blue-border">
                        </td>
                        <td class="blue-border">
                        </td>
                    @endforeach
                    @endif
                </table>
                <table style="width:100%;">
                    <tr>
                        <td>
                            <p>Do you contribute to Kiwisaver?</p>
                        </td>
                        <td>
                            <input type="radio" {{count($application['expenses']['main']['kiwisaver']) > 0 ? 'checked' : null}}><span class="vertical-align-middle text-md">Yes</span>
                        </td>
                        <td>
                            <input type="radio" {{count($application['expenses']['main']['kiwisaver']) === 0 ? 'checked' : null}}><span class="vertical-align-middle text-md">No</span>
                        </td>
                        <td>
                            <p>Do you contribute to Kiwisaver?</p>
                        </td>
                        <td>
                            <input type="radio" {{count($application['expenses']['joint']['kiwisaver']) > 0 ? 'checked' : null}}><span class="vertical-align-middle text-md">Yes</span>
                        </td>
                        <td>
                            <input type="radio" {{count($application['expenses']['joint']['kiwisaver']) === 0 ? 'checked' : null}}><span class="vertical-align-middle text-md">No</span>
                        </td>
                    </tr>
                </table>
                <table style="width:100%;">
                    <tr>
                        <td>
                            <p class="font-weight-bolder">Business Income</p>
                        </td>
                        <td>
                            <p>Both</p>
                        </td>
                        <td>
                            <p>Amount</p>
                        </td>
                        <td>
                            <p>Frequency</p>
                        </td>
                        <td>
                            <p class="font-weight-bolder">Business Income</p>
                        </td>
                        <td>
                            <p>Amount</p>
                        </td>
                        <td colspan="2">
                            <p>Frequency</p>
                        </td>
                    </tr>
                    @if(isset($application['download_sop']['business_incomes']['main']) ||
                        isset($application['download_sop']['business_incomes']['joint']))
                    @php
                        $countMain = isset($application['download_sop']['business_incomes']['main']) ?
                        count($application['download_sop']['business_incomes']['main']) : 0;
                        $countJoint = isset($application['download_sop']['business_incomes']['joint']) ?
                        count($application['download_sop']['business_incomes']['joint']) : 0;
                    @endphp
                    @for($i = 0; $i < max($countMain, $countJoint); $i++)
                    <tr>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if(isset($application['download_sop']['business_incomes']['main'][$i]))
                                    {{$application['download_sop']['business_incomes']['main'][$i]['text']}}
                                @else
                                    None
                                @endif
                            </p>
                        </td>
                        <td class="text-align-center">
                            <input type="radio">
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if(isset($application['download_sop']['business_incomes']['main'][$i]))
                                    {{$application['download_sop']['business_incomes']['main'][$i]['value']}}
                                @else
                                    None
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5 text-transform-capitalize">
                                @if(isset($application['download_sop']['business_incomes']['main'][$i]))
                                    {{$application['download_sop']['business_incomes']['main'][$i]['frequency']}}
                                @else
                                    None
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if(isset($application['download_sop']['business_incomes']['joint'][$i]))
                                    {{$application['download_sop']['business_incomes']['joint'][$i]['text']}}
                                @else
                                    None
                                @endif
                            </p>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                @if(isset($application['download_sop']['business_incomes']['joint'][$i]))
                                    {{$application['download_sop']['business_incomes']['joint'][$i]['value']}}
                                @else
                                    None
                                @endif
                            </p>
                        </td>
                        <td colspan="2" class="blue-border">
                            <p class="margin-left-5 padding-top-5 text-transform-capitalize">
                                @if(isset($application['download_sop']['business_incomes']['joint'][$i]))
                                    {{$application['download_sop']['business_incomes']['joint'][$i]['frequency']}}
                                @else
                                    None
                                @endif
                            </p>
                        </td>
                    </tr>
                    @endfor
                    @else
                    <tr>
                        <td>
                            <p class="font-weight-bolder"></p>
                        </td>
                        <td>
                            <p class="blue-border">None</p>
                        </td>
                        <td>
                            <p class="blue-border">None</p>
                        </td>
                        <td>
                            <p class="blue-border">None</p>
                        </td>
                        <td>
                        </td>
                        <td>
                            <p class="blue-border">None</p>
                        </td>
                        <td colspan="2">
                            <p class="blue-border">None</p>
                        </td>
                    </tr>
                    @endif
                    @if(isset($application['download_sop']['business_incomes']['both']))
                    @foreach($application['download_sop']['business_incomes']['both'] as $businessIncome)
                    <tr>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">
                                {{$businessIncome['text']}}
                            </p>
                        </td>
                        <td class="text-align-center">
                            <input type="radio" checked>
                        </td>
                        <td class="blue-border">
                            <p class="margin-left-5 padding-top-5">{{$businessIncome['value']}}</p>
                        </td>
                        <td class="blue-border text-transform-capitalize">
                            <p class="margin-left-5 padding-top-5">{{$businessIncome['frequency']}}</p>
                        </td>
                        <td>

                        </td>
                        <td>
                        </td>
                        <td colspan="2">
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>
        <div class="bg-color-gray-100" style="margin-top: 10px; padding: 10px;">
            <div>
                <p class="font-weight-bolder text-dark-blue">3b. Your Residential Property</p>
                <p class="text-md">
                    To assist  
                    <!-- lender variable goes here  -->
                    in meeting its regulatory obligations this section
                    <span class="font-weight-bolder">MUST</span> be completed for all residential properties
                    owned or to be owned. If you do not own residential property please proceed to 3c.
                </p>
            </div>
            <div style="padding: 5px">
                <table style="width:100%;">
                    <tr>
                        <td colspan="2">
                            <p class="font-weight-bolder">Address</p>
                        </td>
                        <td colspan="1">
                            <p class="font-weight-bolder">Value</p>
                        </td>
                        <td colspan="1">
                            <p class="font-weight-bolder">
                                Rental Income<br/>
                                Gross Amount
                            </p>
                        </td>
                        <td colspan="1">
                            <p class="font-weight-bolder">
                                Rental Income<br/>
                                Frequency
                            </p>
                        </td>
                        <td colspan="3">
                            <p class="font-weight-bolder">Occupancy type*:</p>
                        </td>
                    </tr>
                    @if(count($application['download_sop']['properties']) > 0)
                    @foreach($application['download_sop']['properties'] as $property)
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p>{{$property['address']}}</p>
                        </td>
                        <td colspan="1" class="blue-border">
                            <p>{{$property['value']}}</p>
                        </td>
                        <td colspan="1" class="blue-border">
                            <p>{{$property['gross_income']}}</p>
                        </td>
                        <td colspan="1" class="blue-border">
                            <p class="text-transform-capitalize">{{$property['frequency']}}</p>
                        </td>
                        <td colspan="1" class="text-md">
                            <input type="radio" {{$property['property_type'] === 'owner' ? 'checked' : null}}> <span class="vertical-align-middle">Owner Occupied</span>
                        </td>
                        <td colspan="1" class="text-md">
                            <input type="radio" {{$property['property_type'] === 'investment' ? 'checked' : null}}> <span class=" vertical-align-middle">Investment</span>
                        </td>
                        <td colspan="1" class="text-md">
                            <input type="radio" {{$property['property_type'] === 'holiday_home' ? 'checked' : null}}> <span class="vertical-align-middle">Holiday Residence</span>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="2" class="blue-border">
                            <p>None</p>
                        </td>
                        <td colspan="1" class="blue-border">
                            <p>None</p>
                        </td>
                        <td colspan="1" class="blue-border">
                            <p>None</p>
                        </td>
                        <td colspan="1" class="blue-border">
                            <p class="text-transform-capitalize">None</p>
                        </td>
                        <td colspan="1" class="blue-border text-md">
                            <p class="vertical-align-middle">N/A</p>
                        </td>
                    </tr>
                    @endif
                </table>
            </div>
            <div class="padding-top-10">
                <p class="font-weight-bolder">* Definition of Occupancy Types:</p>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bolder">Owner Occupied:</span>
                            This is your principal place of residence. You are currently confirming you or a related
                            party** currently occupy or intend to occupy the property.
                        </p>
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bolder">Investment:</span>
                            This is a property which is not occupied by you or a related party.
                        </p>
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bolder">Holiday Residence:</span>
                        </p>
                    </li>
                </ul>
                <p class="font-weight-bolder">** A person is a related party of another person if:</p>
                <ul>
                    <li>
                        <p>One person is a trust, or a trustee of a trust and the other party is a beneficiary of the
                            trust; or
                        </p>
                    </li>
                    <li>
                        <p>One person is a company or an unincorporated body of persons and the other person is a
                            shareholder of, or otherwise controls, the first person; or
                        </p>
                    </li>
                    <li>
                        <p>One person is a natural person and the other person is a spouse, civil union or de facto
                            partner of the first person or is the administrator of the estate of the deceased spouse,
                            civil union partner or de facto partner of the first person.
                        </p>
                    </li>
                </ul>
                <p>
                    Please note that, for the purposes of residential property occupancy, children/parents of the owners
                     are not considered related parties.
                </p>
            </div>
        </div>
        <div class="page-break"></div>
        <div class="bg-color-gray-100" style="margin-top: 10px; padding: 10px;">
            <p class="padding-top-10 font-weight-bolder text-dark-blue">3c. Other Assets</p>
            <table style="width:100%;">
                <tr>
                    <td>

                    </td>
                    <td>
                        <p>Value</p>
                    </td>
                    <td>

                    </td>
                    <td>
                        <p>Value</p>
                    </td>
                </tr>
                @for($i = 0; $i < 6;)
                <tr>
                    @for($n = 1; $n <= 2; $n++)
                    <td>
                        <p>{{$application['download_sop']['other_assets'][$i]['label']}}</p>
                    </td>
                    <td class="blue-border">
                        <p>{{$application['download_sop']['other_assets'][$i]['value']}}</p>
                    </td>
                    @php
                    $i++;
                    @endphp
                    @endfor
                </tr>
                @endfor
            </table>
        </div>
        <div class="bg-color-gray-100" style="margin-top: 10px; padding: 10px;">
            <p class="padding-top-10 font-weight-bolder text-dark-blue">3d. Liabilities</p>
            <p class="font-weight-bolder">Housing Loans*</p>
            <table style="width:100%;">
                @if(count($application['download_sop']['property_loans']) > 0)
                @foreach($application['download_sop']['property_loans'] as $propertyLoan)
                <tr>
                    <td>
                        <p>Housing Loan</p>
                    </td>
                    <td>
                        <p>Current Balance</p>
                        <p class="blue-border">{{isset($propertyLoan['balance']) ? $propertyLoan['balance'] : '$0'}}</p>
                    </td>
                    <td>
                        <p>Payment Amount</p>
                        <p class="blue-border">{{isset($propertyLoan['repayment']) ? $propertyLoan['repayment'] : '$0'}}</p>
                    </td>
                    <td>
                        <p>Frequency</p>
                        <p class="blue-border text-transform-capitalize">
                            {{isset($propertyLoan['frequency']) ? $propertyLoan['frequency'] : 'N/A'}}
                        </p>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">
                        <p>Nothing to show</p>
                    </td>
                </tr>
                @endif
            </table>
            <p>
                *If there are more than two housing loans or more  than two home loans, information relating to the
                extra loans must be provided on the supplementary lending forms
            </p>
            <table style="width:100%;">
                <tr>
                    <td>
                        <p class="padding-top-10 font-weight-bolder">Other Loans</p>
                    </td>
                    <td>
                        <p>Provider(s)</p>
                    </td>
                    <td>
                        <p>Limit(s)</p>
                    </td>
                    <td>
                        <p>Current Balance(s)</p>
                    </td>
                    <td>
                        <p>Payment Amount</p>
                    </td>
                </tr>
                @foreach($application['download_sop']['other_loans'] as $otherLoan)
                <tr>
                    <td class="blue-border">
                        <p>
                            {{$otherLoan['label']}}
                        </p>
                    </td>
                    <td class="blue-border">
                        <p>
                            {{$otherLoan['provider']}}
                        </p>
                    </td>
                    <td class="blue-border">
                        <p>{{$otherLoan['limit']}}</p>
                    </td>
                    <td class="blue-border">
                        <p>{{$otherLoan['balance']}}</p>
                    </td>
                    <td class="blue-border">
                        <p>{{$otherLoan['repayment']}}</p>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="bg-color-gray-100" style="margin-top: 10px; padding: 10px;">
            <p class="padding-top-10 font-weight-bolder text-dark-blue" style="font-size: 14px;">3e. Expenses</p>
            <p class="padding-top-10 font-weight-bolder text-dark-blue">Living Expenses</p>
            <p>
                Please detail your living expenses as well as any increase to those expenses that will occur if new
                lending is approved e.g. rates and insurance for a new property, insurance and running cost for a new
                car, or any major increases to expenditure expected in the next 12 months
            </p>
            <table style="width:100%;">
                <tr>
                    <td></td>
                    <td><p>Amount</p></td>
                    <td><p>Amount</p></td>
                </tr>
                @for($i = 0; $i < 16;)
                <tr>
                    @for($n = 1; $n <= 2; $n++)
                    <td>
                        <p>{{$application['download_sop']['expenses'][$i]['label']}}</p>
                    </td>
                    <td class="blue-border">
                        <p>{{$application['download_sop']['expenses'][$i]['value']}}</p>
                    </td>
                    @php
                        $i++;
                    @endphp
                    @endfor
                </tr>
                @endfor
            </table>
        </div>
        <div class="bg-color-gray-100" style="margin-top:10px;padding: 10px;">
            <div class="bg-color-teal-500 text-white" style="padding: 5px;">
                <span class="font-weight-bolder">SECTION FOUR</span> - Complete this section only if completing this form
                for a personal borrowing request.
            </div>
            <table style="width:100%;">
                <tr>
                    <td colspan="5">
                        <p class="font-weight-bolder">Product Requirements</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" class="text-md">
                        <input type="radio" {{$application['loan_type'] === 'new_home' ? 'checked' : null}}> <span class="vertical-align-middle">New Home Loan</span>
                    </td>
                    <td colspan="1" class="text-md">
                        <input type="radio" {{$application['loan_type'] === 'investment_home' ? 'checked' : null}}> <span class="vertical-align-middle">Home Investment Loan</span>
                    </td>
                    <td colspan="1" class="text-md">
                        <input type="radio" {{$application['loan_type'] === 'refinance_home' ? 'checked' : null}}> <span class="vertical-align-middle">Refinance Home Loan</span>
                    </td>
                    <td colspan="1" class="text-md">
                        <input type="radio" {{$application['loan_type'] === 'vehicle' ? 'checked' : null}}> <span class="vertical-align-middle">Vehicle Loan</span>
                    </td>
                    <td colspan="1" class="text-md">
                        <input type="radio" {{$application['loan_type'] === 'personal' ? 'checked' : null}}> <span class="vertical-align-middle">Personal Loan</span>
                    </td>
                </tr>
            </table>
        </div>
    </div></body></html>
